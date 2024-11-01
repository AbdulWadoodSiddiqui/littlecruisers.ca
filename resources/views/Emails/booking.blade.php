<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-GB">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Little Cruisers | Booking Tour Email</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <style type="text/css">
        a[x-apple-data-detectors] {
            color: inherit !important;
        }
    </style>

</head>

<body style="margin: 0; padding: 0;">
    <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td style="padding: 20px 0 30px 0;">

                <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse; border: 1px solid #cccccc;">
                    <tr>
                        <td align="center" bgcolor="#1B1A27" style="padding: 40px 0 30px 0;">
                            <img src="https://littlecruisers.ca/assets/images/logo.svg" style="display: block; width: 200px" />
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
                                <tr>
                                    <td style="color: #153643; font-family: Arial, sans-serif;">
                                        <h1 style="font-size: 24px; margin: 0;">Book a tour details:</h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0 30px 0;">
                                        <p style="margin: 0;"><span style="color: #153643"><b>Name:</b></span>
                                            {{$data ['name'] }}
                                        </p>
                                        <hr>
                                        <p style="margin: 0;"><span style="color: #153643"><b>Phone:</b></span>
                                            {{$data ['number'] }}
                                        </p>
                                        <hr>
                                        <p style="margin: 0;"><span style="color: #153643"><b>Email:</b></span>
                                            {{$data ['email'] }}
                                        </p>
                                        <hr>
                                        <p style="margin: 0;"><span style="color: #153643"><b>Visit Date</b></span>
                                            {{$data ['date'] }}
                                        </p>
                                        <hr>
                                        <p style="margin: 0;"><span style="color: #153643"><b>Preferred Time:</b></span>
                                            {{$data ['time'] }}
                                        </p>
                                        <hr>
                                        <p style="margin: 0;"><span style="color: #153643"><b>Child's Age:</b></span>
                                            {{ $data['child_one'] . ($data['child_two'] ? ', ' . $data['child_two'] : '') . ($data['child_three'] ? ', ' . $data['child_three'] : '') }}
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="FDF6ED" style="padding: 30px 30px;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
                                <tr>
                                    <td style="color: black; font-family: Arial, sans-serif; font-size: 14px;">
                                        <p style="margin: 0; color: black">© <script>
                                                document.write(new Date().getFullYear());
                                            </script> Little Cruisers . All Rights Reserved. <a href="https://bmgroupinc.com" target="_blank" style="color: #456DE2"><b>BM_IT</b></a></p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>

            </td>
        </tr>
    </table>
</body>

</html>
