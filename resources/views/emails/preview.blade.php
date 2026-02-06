<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Product Enquiry</title>
    <!-- Inline styles for email client compatibility -->
    <style>
        /* Some clients strip <style>, but harmless as a fallback */
        @media only screen and (max-width: 620px) {
            .container { width: 100% !important; }
            .content { padding: 20px !important; }
        }
    </style>
</head>
<body style="margin:0; padding:0; background-color:#f6f9fc; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, 'Apple Color Emoji', 'Segoe UI Emoji', sans-serif; color:#1f2937;">

<!-- Full width wrapper -->
<table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%" style="background-color:#f6f9fc;">
    <tr>
        <td align="center" style="padding: 24px 12px;">
            <!-- Centered container -->
            <table role="presentation" cellpadding="0" cellspacing="0" border="0" class="container" width="100%" style="max-width:600px; width:100%; background-color:#ffffff; border:1px solid #e5e7eb; border-radius:12px; overflow:hidden;">
                <!-- Header -->
                <tr>
                    <td align="center" style="background-color:#0ea5e9; padding: 24px;">
                        <h1 style="margin:0; font-size:22px; line-height:1.3; color:#ffffff;">Product Enquiry</h1>
                        <div style="margin-top:6px; font-size:13px; color:#e0f2fe;">Preview</div>
                    </td>
                </tr>

                <!-- Body -->
                <tr>
                    <td class="content" style="padding: 28px;">
                        <table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%">
                            <tr>
                                <td style="padding:0 0 12px 0; font-size:14px; color:#6b7280;">Product</td>
                            </tr>
                            <tr>
                                <td style="padding:0 0 16px 0; font-size:16px; font-weight:600; color:#111827;">{{ $product->name }}</td>
                            </tr>

                            <tr>
                                <td style="padding:16px 0 6px 0; border-top:1px solid #f3f4f6; font-size:14px; color:#6b7280;">Name</td>
                            </tr>
                            <tr>
                                <td style="padding:0 0 16px 0; font-size:16px; color:#111827;">{{ $data['name'] }}</td>
                            </tr>

                            <tr>
                                <td style="padding:16px 0 6px 0; border-top:1px solid #f3f4f6; font-size:14px; color:#6b7280;">Email</td>
                            </tr>
                            <tr>
                                <td style="padding:0 0 16px 0; font-size:16px; color:#111827;">
                                    <a href="mailto:{{ $data['email'] }}" style="color:#0ea5e9; text-decoration:none;">{{ $data['email'] }}</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="padding:16px 0 6px 0; border-top:1px solid #f3f4f6; font-size:14px; color:#6b7280;">Message</td>
                            </tr>
                            <tr>
                                <td style="padding:0;">
                                    <div style="margin:0; padding:16px; background:#f9fafb; border:1px solid #f3f4f6; border-radius:8px; font-size:15px; line-height:1.6; color:#111827; white-space:pre-wrap;">{{ $data['message'] }}</div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <!-- Footer -->
                <tr>
                    <td align="center" style="padding: 18px; background:#f9fafb; border-top:1px solid #e5e7eb;">
                        <p style="margin:0; font-size:12px; color:#6b7280;">This is a preview of the enquiry email. Please do not reply to this message.</p>
                        <p style="margin:8px 0 0 0; font-size:12px; color:#9ca3af;">&copy; {{ date('Y') }} LSi</p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

</body>
</html>
