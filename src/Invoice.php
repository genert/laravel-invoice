<?php
/**
 * Created by PhpStorm.
 * User: Genert Org
 * Date: 08/08/2017
 * Time: 12:06
 */

namespace Genert\Laravel\Invoice;

use Dompdf\Dompdf;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

final class Invoice
{
    /**
     * Get the View instance for the invoice.
     *
     * @param array $data
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function view(array $data)
    {
        return View::make('invoice::receipt', $data);
    }

    /**
     * Capture the invoice as a PDF and return the raw bytes.
     *
     * @param array $data
     *
     * @return string
     */
    public function pdf(array $data)
    {
        if (!defined('DOMPDF_ENABLE_AUTOLOAD')) {
            define('DOMPDF_ENABLE_AUTOLOAD', false);
        }

        if (file_exists($configPath = base_path() . '/vendor/dompdf/dompdf/dompdf_config.inc.php')) {
            require_once $configPath;
        }

        $dompdf = new Dompdf();

        $dompdf->loadHtml($this->view($data)->render());

        $dompdf->render();

        return $dompdf->output();
    }

    /**
     * Create an invoice download response.
     *
     * @param string $filename
     * @param array $data
     *
     * @return Response
     */
    public function download(string $filename, array $data)
    {
        // Table causes zero-division bug
        // See https://github.com/dompdf/dompdf/issues/1057
        // Until this is fixed, we will disable error reporting for PDF
        // generation and downloading.
        error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);

        return new Response($this->pdf($data), 200, [
            'Content-Description' => 'File Transfer',
            'Content-Disposition' => 'attachment; filename="' . $filename . '.pdf"',
            'Content-Transfer-Encoding' => 'binary',
            'Content-Type' => 'application/pdf',
        ]);
    }
}
