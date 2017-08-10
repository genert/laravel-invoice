<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>Invoice</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .template-body { min-height: 700px; background-color: #dbe5ea; }

            .email_start { padding-top: 32px; }
            .email_end { padding-bottom: 32px; }

            .email_container,
            .email_row,
            .col_1,
            .col_2,
            .col_3,
            .col_4,
            .col_6 { font-size: 0; display: inline-block; width: 100%; min-width: 100%; min-width: 0 !important; vertical-align: top; }

            .content_cell { width: 100%; min-width: 100%; min-width: 0 !important; }
            .column_cell { padding-top: 16px; padding-bottom: 16px; vertical-align: top; }

            .email_container { max-width: 672px; Margin: 0 auto; text-align: center; }
            .email_row { display: block; max-width: 600px !important; Margin: 0 auto; text-align: center; clear: both; }

            .col_1 { max-width: 100px; }
            .col_2 { max-width: 200px; }
            .col_3 { max-width: 300px; }
            .col_4 { max-width: 400px; }
            .col_6 { max-width: 600px; }

            .email_body a,
            .email_body a span { text-decoration: none; color: #37c2ef; }

            .email_body a.td,
            .email_body a.td span { color: #616161; }

            /* latin */
            @font-face {
                font-family: 'Roboto';
                font-style: normal;
                font-weight: 400;
                src: local("Roboto"), local("Roboto-Regular"), url(https://fonts.gstatic.com/s/roboto/v15/CWB0XYA8bzo0kSThX0UTuA.woff2) format("woff2");
                unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215; }
            /* latin */
            @font-face {
                font-family: 'Roboto';
                font-style: normal;
                font-weight: 700;
                src: local("Roboto Bold"), local("Roboto-Bold"), url(https://fonts.gstatic.com/s/roboto/v15/d-6IYplOFocCacKzxwXSOFtXRa8TVwTICgirnJhmVJw.woff2) format("woff2");
                unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215; }
            .template-body * {
                font-family: "Roboto", sans-serif;
                font-weight: 400;
            }

            .email_body .column_cell,
            .column_cell,
            .min_table td,
            .xlabel_c,
            .template-body p {
                font-size: 16px;
                line-height: 23px;
                color: #616161;
                mso-line-height-rule: exactly; }

            .template-body p {
                display: block;
                Margin-top: 0;
                Margin-bottom: 16px; }
            .template-body p small {
                font-size: 14px; }
            .template-body p.lead {
                font-size: 19px;
                line-height: 27px;
                color: #9aa7ad; }

            .template-body .small {
                font-size: 14px;
                line-height: 20px; }

            .template-body h1, .template-body h2, .template-body h3, .template-body h4, .template-body h5, .template-body h6 {
                color: #3e484d;
                Margin-left: 0;
                Margin-right: 0;
                Margin-top: 20px;
                Margin-bottom: 8px;
                padding: 0;
                font-weight: bold; }

            .template-body h1 a, .template-body h2 a, .template-body h3 a, .template-body h4 a, .template-body h5 a, .template-body h6 a {
                color: #3e484d; }

            .template-body h1 {
                font-size: 32px;
                line-height: 42px; }

            .template-body h2 {
                font-size: 26px;
                line-height: 36px; }

            .template-body h3 {
                font-size: 23px;
                line-height: 30px; }

            .template-body h4 {
                font-size: 19px;
                line-height: 25px; }

            .template-body h5 {
                font-size: 16px;
                line-height: 21px; }

            .template-body h6 {
                font-size: 13px;
                line-height: 20px; }

            .template-body .column_cell,
            .template-body p {
                color: #9aa7ad; }

            .template-body .footer_c a,
            .template-body .footer_c a span {
                color: #9aa7ad;
                text-decoration: underline; }

            .content_cell,
            .bank_cell {
                width: 100%;
                font-size: 0;
                text-align: center;
                vertical-align: top;
                padding-left: 16px;
                padding-right: 16px; }

            .content_cell {
                background-color: #ffffff; }

            .hdr_menu {
                text-align: right; }
            .hdr_menu p {
                line-height: 100%; }

            .email_body .logo_c {
                line-height: 100%; }

            .logo_c img {
                max-width: 168px;
                height: auto !important; }

            .email_body .fsocial {
                line-height: 100%;
                color: #a7b1b6; }

            .fsocial img {
                max-width: 24px;
                height: auto !important; }

            .ncard_c {
                color: #616161;
                overflow: hidden; }

            .content_cell .sc,
            .sc td,
            .sc {
                color: #ffffff; }

            .sc h1,
            .sc h2,
            .sc h3,
            .sc h4,
            .sc h5,
            .sc h6,
            .sc p,
            .template-body .sc p.lead,
            .sc a,
            .sc a span {
                color: #ffffff; }

            .hr_rl,
            .hr_ep,
            .hr_vl {
                font-size: 0;
                line-height: 1px;
                mso-line-height-rule: exactly;
                min-height: 1px;
                overflow: hidden;
                height: 2px;
                background-color: transparent !important; }

            .hr_vl {
                height: 50px;
                min-height: 49px;
            }

            .default_b { background-color: #475359; }

            .imgr a,
            .imgr a span { line-height: 1; }
            .imgr img { width: 100% !important; max-width: 568px; height: auto !important; }
            .imgr24 img { max-width: 24px; }
            .imgr44 img { max-width: 44px; }
            .imgr68 img { max-width: 68px; }
            .imgr96 img { max-width: 96px; }
            .imgr168 img { max-width: 168px; }
            .imgr268 img { max-width: 268px; }
            .imgr632 img { max-width: 632px; }

            .ebtn td,
            .ebtn_xs td {
                line-height: 20px;
                mso-line-height-rule: exactly;
                border-radius: 4px;
                text-align: center;
                font-weight: bold; }
            .ebtn td a,
            .ebtn td a span,
            .ebtn_xs td a,
            .ebtn_xs td a span {
                color: #ffffff; }

            .ebtn td {
                font-size: 17px;
                padding: 13px 22px; }

            .ebtn_xs td {
                border-radius: 4px;
                font-size: 14px;
                padding: 8px 16px; }

            .ic_h img {
                max-width: 32px;
                width: 32px;
                height: 32px;
                display: block;
                line-height: 100%; }
            .ic_h a {
                line-height: 100%; }
            .ic_h td {
                text-align: center;
                vertical-align: middle;
                line-height: 100%;
                mso-line-height-rule: exactly;
                padding: 16px;
                border-radius: 80px; }

            .template-body  p.small {
                display: block; }

            .brb {
                border-radius: 0 0 4px 4px; }

            .tp,
            table .tp {
                color: #37c2ef; }

            .ts,
            table .ts {
                color: #32d373; }

            .tde,
            table .tde {
                color: #d04e53; }

            .tm,
            table .tm,
            a.tm,
            a.tm span {
                color: #a7b1b6; }

            .td,
            table .td {
                color: #616161; }

            .tc {
                text-align: center; }

            .tc .imgr img {
                margin-left: auto;
                margin-right: auto; }

            .tl {
                text-align: left; }

            table.tl {
                margin-left: 0;
                margin-right: auto; }

            .tr {
                text-align: right; }

            table.tr {
                margin-left: auto;
                margin-right: 0; }

            .nw,
            table .nw {
                white-space: nowrap; }

            .py {
                padding-top: 16px;
                padding-bottom: 16px; }

            .px {
                padding-left: 16px;
                padding-right: 16px; }

            .pt {
                padding-top: 16px; }

            .pt_0 {
                padding-top: 0; }

            .pt_xs {
                padding-top: 8px; }

            .pte {
                padding-top: 32px; }

            .pt_card {
                padding-top: 96px; }

            .pb {
                padding-bottom: 16px; }

            .pb_0 {
                padding-bottom: 0; }

            .pb_xs {
                padding-bottom: 8px; }

            .pbe {
                padding-bottom: 32px; }

            .xlabel .pl_0,
            .pl_0 {
                padding-left: 0; }

            .pl {
                padding-left: 16px; }

            .ple {
                padding-left: 32px; }

            .xlabel .pr_0,
            .pr_0 {
                padding-right: 0; }

            .pr {
                padding-right: 16px; }

            .pre {
                padding-right: 32px; }

            .pte_lg {
                padding-top: 64px; }

            .template-body .mt_0 {
                margin-top: 0; }

            .template-body .mt_xs {
                margin-top: 8px; }

            .template-body .mt {
                margin-top: 16px; }

            .template-body .mte {
                margin-top: 32px; }

            .template-body .mb_0 {
                margin-bottom: 0; }

            .template-body .mb_xs {
                margin-bottom: 8px; }

            .template-body .mb_xxs {
                margin-bottom: 4px; }

            .template-body .mb {
                margin-bottom: 16px; }

            .template-body .mbe {
                margin-bottom: 32px; }

            .bt {
                border-top: 1px solid #d7dbe0; }

            .bb {
                border-bottom: 1px solid #d7dbe0; }

            .btw,
            .bt.btw,
            .bbw.btw {
                border-color: #ffffff; }

            .clear {
                content: ' ';
                display: block;
                clear: both;
                height: 1px;
                overflow: hidden;
                font-size: 0; }
            .template-body strong, .template-body b, .template-body h1, .template-body h2, .template-body h3, .template-body h4, .template-body h5 {
                font-weight: 700; }
            .ebtn td,
            .ebtn_xs td {
                padding: 0 !important;
                -webkit-transition: box-shadow 0.25s;
                -moz-transition: box-shadow 0.25s;
                -ms-transition: box-shadow 0.25s;
                -o-transition: box-shadow 0.25s;
                transition: box-shadow 0.25s; }
            .ebtn a,
            .ebtn a span,
            .ebtn_xs a,
            .ebtn_xs a span {
                display: block !important;
                text-align: center !important;
                vertical-align: top !important;
                line-height: inherit !important; }
            .template-body .ebtn a {
                padding: 10px 22px !important;
                line-height: 26px !important; }
            .template-body .ebtn * {
                font-weight: 700 !important; }
            .template-body .ebtn_xs a {
                padding: 5px 16px !important;
                line-height: 26px !important; }
            .template-body .ebtn_xs * {
                font-weight: 400 !important; }


            @media (max-width: 697px) {
                .email_body.email_start {
                    padding-top: 16px !important; }
                .email_body.email_end {
                    padding-bottom: 16px !important; }
                .email_holder,
                .email_container,
                .col_1,
                .col_2,
                .col_3,
                .col_4,
                .col_5,
                .col_6,
                .col_2_lg {
                    width: 100% !important;
                    max-width: none !important; }
                .hdr_menu {
                    text-align: left !important;
                    padding-top: 12px !important; }
                .hdr_menu .ebtn,
                .hdr_menu .ebtn_xs {
                    margin-right: auto !important;
                    margin-left: 0 !important; }
                .pte_lg,
                .py.pte_lg {
                    padding-top: 32px !important; }
                .pte_xs,
                .py.pte_xs {
                    padding-top: 8px !important; }
                .pbe_xs,
                .py.pbe_xs {
                    padding-bottom: 8px !important; }
                .ord_cell,
                .invoice_qty,
                .invoice_price {
                    text-align: left !important; }
                .ord_cell {
                    padding-top: 8px !important; }
                .hide {
                    max-height: 0 !important;
                    display: none !important;
                    mso-hide: all !important;
                    overflow: hidden !important;
                    font-size: 0 !important; } }

            /* Minimal */
            .template-body.layout-3 .header_c {
                background-color: transparent!important;
                border-bottom: 0!important;
            }

            .template-body.layout-3 .email_table:nth-child(2) .content_cell {
                border-radius: 4px 4px 0 0!important;
            }

        </style>
    </head>

    <body>
    <div class="template-body theme-1 layout-3">
        <!-- invoice_intro -->
        <table class="email_table" width="100%" border="0" cellspacing="0" cellpadding="0">
            <tbody>
            <tr>
                <td class="email_body email_start tc">
                    <!--[if (mso)|(IE)]><table width="632" border="0" cellspacing="0" cellpadding="0" align="center" style="vertical-align:top;width:632px;Margin:0 auto;"><tbody><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]-->
                    <div class="email_container">
                        <table class="content_section" width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tbody>
                            <tr>
                                <td class="content_cell">
                                    <!-- col-6 -->
                                    <div class="email_row tl">
                                        <!--[if (mso)|(IE)]><table width="600" border="0" cellspacing="0" cellpadding="0" align="center" style="vertical-align:top;width:600px;Margin:0 auto 0 0;"><tbody><tr><td width="600" style="width:600px;line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]-->
                                        <div class="col_6">
                                            <table class="column" width="100%" border="0" cellspacing="0" cellpadding="0">
                                                <tbody>
                                                <tr>
                                                    <td class="column_cell px tl">
                                                        <h1 class="mb_0">{{ trans('invoice::receipt.title') }}</h1>

                                                        @if (isset($company))
                                                            <p class="small tm">{{ $company }}</p>
                                                        @endif

                                                        <p>
                                                            @if (isset($id))
                                                                {{ trans('invoice::receipt.invoice_number') }}: <strong>{{ $id }}</strong><br>
                                                            @endif

                                                            @if (isset($date))
                                                                {{ trans('invoice::receipt.date') }}: <strong>{{ $date }}</strong><br>
                                                            @endif

                                                            @if (isset($payment_date))
                                                                {{ trans('invoice::receipt.payment_date') }}: <strong>{{ $payment_date }}</strong><br><br>
                                                            @endif

                                                            @if (isset($client))
                                                                {{ trans('invoice::receipt.client') }}: <strong>{{ $client }}</strong><br>
                                                            @endif

                                                            @if (isset($vatNumber))
                                                                {{ trans('invoice::receipt.vat') }}: <strong>{{ $vatNumber }}</strong><br>
                                                            @endif

                                                            @if (isset($address))
                                                                {{ trans('invoice::receipt.address') }}: {{ $address }}<br>
                                                            @endif

                                                        </p>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!--[if (mso)|(IE)]></td></tr></tbody></table><![endif]-->
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--[if (mso)|(IE)]></td></tr></tbody></table><![endif]-->
                </td>
            </tr>
            </tbody>
        </table>
        <!-- spacer-lg -->
        <table class="email_table" width="100%" border="0" cellspacing="0" cellpadding="0">
            <tbody>
            <tr>
                <td class="email_body tc">
                    <!--[if (mso)|(IE)]><table width="632" border="0" cellspacing="0" cellpadding="0" align="center" style="vertical-align:top;width:632px;Margin:0 auto;"><tbody><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]-->
                    <div class="email_container">
                        <table class="content_section" width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tbody>
                            <tr>
                                <td class="content_cell">
                                    <table class="hr_rl" align="center" width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tbody>
                                        <tr>
                                            <td class="hr_ep pte">&nbsp;</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--[if (mso)|(IE)]></td></tr></tbody></table><![endif]-->
                </td>
            </tr>
            </tbody>
        </table>
        <!-- invoice_header -->
        <table class="email_table hide" width="100%" border="0" cellspacing="0" cellpadding="0">
            <tbody>
            <tr>
                <td class="email_body tc">
                    <!--[if (mso)|(IE)]><table width="632" border="0" cellspacing="0" cellpadding="0" align="center" style="vertical-align:top;width:632px;Margin:0 auto;"><tbody><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]-->
                    <div class="email_container">
                        <table class="content_section" width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tbody>
                            <tr>
                                <td class="content_cell pb">
                                    <!-- col-6 -->
                                    <div class="email_row tl">
                                        <!--[if (mso)|(IE)]><table width="600" border="0" cellspacing="0" cellpadding="0" align="center" style="vertical-align:top;width:600px;Margin:0 auto 0 0;"><tbody><tr><td width="400" style="width:400px;line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]-->
                                        <div class="col_4">
                                            <table class="column" width="100%" border="0" cellspacing="0" cellpadding="0">
                                                <tbody>
                                                <tr>
                                                    <td class="column_cell px pt_0 pb_0 tl">
                                                        <p class="small mb_0 tm">{{ trans('invoice::receipt.description') }}</p>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!--[if (mso)|(IE)]></td><td width="100" style="width:100px;line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]-->
                                        <div class="col_1">
                                            <table class="column" width="100%" border="0" cellspacing="0" cellpadding="0">
                                                <tbody>
                                                <tr>
                                                    <td class="column_cell px pt_0 pb_0 tc">
                                                        <p class="small mb_0 tm">{{ trans('invoice::receipt.price') }}</p>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!--[if (mso)|(IE)]></td><td width="100" style="width:100px;line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]-->
                                        <div class="col_1">
                                            <table class="column" width="100%" border="0" cellspacing="0" cellpadding="0">
                                                <tbody>
                                                <tr>
                                                    <td class="column_cell px pt_0 pb_0 tl">
                                                        <p class="small mb_0 tm tr">{{ trans('invoice::receipt.amount') }}</p>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!--[if (mso)|(IE)]></td></tr></tbody></table><![endif]-->
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--[if (mso)|(IE)]></td></tr></tbody></table><![endif]-->
                </td>
            </tr>
            </tbody>
        </table>

        @if (isset($products) && count($products) > 0)
            @foreach ($products as $product)
                <!-- invoice_row -->
                <table class="email_table" width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tbody>
                    <tr>
                        <td class="email_body tc">
                            <!--[if (mso)|(IE)]><table width="632" border="0" cellspacing="0" cellpadding="0" align="center" style="vertical-align:top;width:632px;Margin:0 auto;"><tbody><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]-->
                            <div class="email_container">
                                <table class="content_section" width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                        <td class="content_cell pb">
                                            <table class="hr_rl" align="center" width="100%" border="0" cellspacing="0" cellpadding="0">
                                                <tbody>
                                                <tr>
                                                    <td class="hr_ep pb bt">&nbsp; </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <!-- col-6 -->
                                            <div class="email_row tl">
                                                <!--[if (mso)|(IE)]><table width="600" border="0" cellspacing="0" cellpadding="0" align="center" style="vertical-align:top;width:600px;Margin:0 auto;"><tbody><tr><td width="400" style="width:400px;line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]-->
                                                <div class="col_4">
                                                    <table class="column" width="100%" border="0" cellspacing="0" cellpadding="0">
                                                        <tbody>
                                                        <tr>
                                                            <td class="column_cell px pt_0 pb_0">
                                                                @if (isset($product['description']))
                                                                    <p class="small tm mb_0">{{ $product['description'] }}</p>
                                                                @else
                                                                    <p class="small tm mb_0">Charge</p>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!--[if (mso)|(IE)]></td><td width="100" style="width:100px;line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]-->
                                                <div class="col_1">
                                                    <table class="column" width="100%" border="0" cellspacing="0" cellpadding="0">
                                                        <tbody>
                                                        <tr>
                                                            <td class="column_cell px pt_0 pb_0 tc invoice_qty">
                                                                @if (isset($product['price']))
                                                                    <p class="mb_0">{{ $product['price'] }}</p>
                                                                @else
                                                                    <p class="mb_0">-</p>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!--[if (mso)|(IE)]></td><td width="100" style="width:100px;line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]-->
                                                <div class="col_1">
                                                    <table class="column" width="100%" border="0" cellspacing="0" cellpadding="0">
                                                        <tbody>
                                                        <tr>
                                                            <td class="column_cell px pt_0 pb_0 tr invoice_price">
                                                                @if (isset($product['sum']))
                                                                    <p class="mb_0">{{ $product['sum'] }}</p>
                                                                @else
                                                                    <p class="mb_0">-</p>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!--[if (mso)|(IE)]></td></tr></tbody></table><![endif]-->
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--[if (mso)|(IE)]></td></tr></tbody></table><![endif]-->
                        </td>
                    </tr>
                    </tbody>
                </table>
            @endforeach
        @endif

        @if (isset($discounts))
            <table class="email_table" width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody>
                <tr>
                    <td class="email_body tc">
                        <!--[if (mso)|(IE)]><table width="632" border="0" cellspacing="0" cellpadding="0" align="center" style="vertical-align:top;width:632px;Margin:0 auto;"><tbody><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]-->
                        <div class="email_container">
                            <table class="content_section" width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tbody>
                                <tr>
                                    <td class="content_cell pb">
                                        <table class="hr_rl" align="center" width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tbody>
                                                <tr>
                                                    <td class="hr_ep pb bt">&nbsp; </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- col-6 -->
                                        <div class="email_row tl">
                                            <!--[if (mso)|(IE)]><table width="600" border="0" cellspacing="0" cellpadding="0" align="center" style="vertical-align:top;width:600px;Margin:0 auto;"><tbody><tr><td width="400" style="width:400px;line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]-->
                                            <div class="col_4">
                                                <table class="column" width="100%" border="0" cellspacing="0" cellpadding="0">
                                                    <tbody>
                                                    <tr>
                                                        <td class="column_cell px pt_0 pb_0">
                                                            <p class="small tm mb_0">what</p>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--[if (mso)|(IE)]></td><td width="100" style="width:100px;line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]-->
                                            <div class="col_1">
                                                <table class="column" width="100%" border="0" cellspacing="0" cellpadding="0">
                                                    <tbody>
                                                    <tr>
                                                        <td class="column_cell px pt_0 pb_0 tc invoice_qty">
                                                            <p class="mb_0">&nbsp;</p>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--[if (mso)|(IE)]></td><td width="100" style="width:100px;line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]-->
                                            <div class="col_1">
                                                <table class="column" width="100%" border="0" cellspacing="0" cellpadding="0">
                                                    <tbody>
                                                    <tr>
                                                        <td class="column_cell px pt_0 pb_0 tr invoice_price">
                                                            <p class="mb_0">-32EUR</p>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--[if (mso)|(IE)]></td></tr></tbody></table><![endif]-->
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--[if (mso)|(IE)]></td></tr></tbody></table><![endif]-->
                    </td>
                </tr>
                </tbody>
            </table>
        @endif

        <!-- order_total -->
        <table class="email_table" width="100%" border="0" cellspacing="0" cellpadding="0">
            <tbody>
            <tr>
                <td class="email_body tc">
                    <!--[if (mso)|(IE)]><table width="632" border="0" cellspacing="0" cellpadding="0" align="center" style="vertical-align:top;width:632px;Margin:0 auto;"><tbody><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]-->
                    <div class="email_container">
                        <table class="content_section" width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tbody>
                            <tr>
                                <td class="content_cell pb">
                                    <table class="hr_rl" align="center" width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tbody>
                                        <tr>
                                            <td class="hr_ep pb bt">&nbsp; </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <!-- col-6 -->
                                    <div class="email_row tr">
                                        <!--[if (mso)|(IE)]><table width="600" border="0" cellspacing="0" cellpadding="0" align="center" style="vertical-align:top;width:600px;Margin:0 auto;"><tbody><tr><td width="300" style="width:300px;line-height:0px;font-size:0px;mso-line-height-rule:exactly;"> </td><td width="300" style="width:300px;line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]-->
                                        <div class="col_3">
                                            <table class="column" width="100%" border="0" cellspacing="0" cellpadding="0">
                                                <tbody>
                                                <tr>
                                                    <td class="column_cell px tl">
                                                        <p class="mb_xxs"><strong>{{ trans('invoice::receipt.total_sum') }}:&nbsp;{{ $payment_total }}</strong></p>
                                                        @if (isset($vatAmount) && (isset($vatNumber) && $vatNumber === null))
                                                            <p class="mb_xxs"><strong>{{ trans('invoice::receipt.vat') }}: {{ $vatAmount }}</strong></p>
                                                        @endif
                                                        <table class="hr_rl" align="center" width="100%" border="0" cellspacing="0" cellpadding="0">
                                                            <tbody>
                                                            <tr>
                                                                <td class="hr_ep pb">&nbsp; </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="hr_ep pb bt">&nbsp; </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        <h5 class="mt_xs mb_0">{{ trans('invoice::receipt.total') }} {{ $payment_currency }}: <span class="tp" style="text-align: right;">{{ $payment_total }}</span></h5>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!--[if (mso)|(IE)]></td></tr></tbody></table><![endif]-->
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--[if (mso)|(IE)]></td></tr></tbody></table><![endif]-->
                </td>
            </tr>
            </tbody>
        </table>

        @for ($i = 0; $i < 3; $i++)
            <!-- spacer-lg -->
            <table class="email_table" width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody>
                <tr>
                    <td class="email_body tc">
                        <!--[if (mso)|(IE)]><table width="632" border="0" cellspacing="0" cellpadding="0" align="center" style="vertical-align:top;width:632px;Margin:0 auto;"><tbody><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]-->
                        <div class="email_container">
                            <table class="content_section" width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tbody>
                                <tr>
                                    <td class="content_cell">
                                        <table class="hr_vl" align="center" width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tbody>
                                            <tr>
                                                <td class="hr_ep pte">&nbsp; </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--[if (mso)|(IE)]></td></tr></tbody></table><![endif]-->
                    </td>
                </tr>
                </tbody>
            </table>
        @endfor

        <!-- footer_default -->
        <table class="email_table" width="100%" border="0" cellspacing="0" cellpadding="0">
            <tbody>
            <tr>
                <td class="email_body email_end tc">
                    <!--[if (mso)|(IE)]><table width="632" border="0" cellspacing="0" cellpadding="0" align="center" style="vertical-align:top;width:632px;Margin:0 auto;"><tbody><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]-->
                    <div class="email_container">
                        <table class="content_section" width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tbody>
                            <tr>
                                <td class="content_cell footer_c default_b brb pt pb">
                                    <!-- col-2-4 -->
                                    <div class="email_row">
                                        <!--[if (mso)|(IE)]><table width="600" border="0" cellspacing="0" cellpadding="0" align="center" style="vertical-align:top;width:600px;Margin:0 auto;"><tbody><tr><td width="400" style="width:400px;line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]-->
                                        <div class="col_4">
                                            <table class="column" width="100%" border="0" cellspacing="0" cellpadding="0">
                                                <tbody>
                                                <tr>
                                                    <td class="column_cell px pt_xs pb_0 tl sc">
                                                        <p class="mb_xxs">
                                                            @if (isset($company))
                                                                <strong>{{ $company }}</strong><br>
                                                            @endif

                                                            @if (isset($company_reg))
                                                                <small>{{ trans('invoice::receipt.reg_number') }}: {{ $company_reg }}</small><br><br>
                                                            @endif

                                                            @if (isset($company_address))
                                                                <small>{{ trans('invoice::receipt.address') }}: {{ $company_address }}</small>
                                                            @endif
                                                        </p>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!--[if (mso)|(IE)]></td><td width="200" style="width:200px;line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]-->
                                        <div class="col_2">
                                            <table class="column" width="100%" border="0" cellspacing="0" cellpadding="0">
                                                <tbody>
                                                <tr>
                                                    <td class="column_cell px pt_xs pb_0 ord_cell tr sc">

                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!--[if (mso)|(IE)]></td></tr></tbody></table><![endif]-->
                                    </div></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--[if (mso)|(IE)]></td></tr></tbody></table><![endif]-->
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    </body>
</html>
