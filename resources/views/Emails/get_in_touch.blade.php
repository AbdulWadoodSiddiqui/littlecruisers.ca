<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-GB">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>The Kids Planet | Booking Tour Email</title>
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
                        <img src="https://thekidsplanet.ca/assets/img/tkp-1.svg" style="display: block; width: 200px" />
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
                            <tr>
                                <td style="color: #153643; font-family: Arial, sans-serif;">
                                    <h1 style="font-size: 24px; margin: 0;">Get in touch details:</h1>
                                </td>
                            </tr>
                            <tr>
                                <td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0 30px 0;">
                                    <p style="margin: 0;"><span style="color: #153643"><b>Parent First Name:</b></span>
                                        {{$data ['parent_first_name'] }}
                                    </p>
                                    <hr>
                                    <p style="margin: 0;"><span style="color: #153643"><b>Parent Last Name:</b></span>
                                        {{$data ['parent_last_name'] }}
                                    </p>
                                    <hr>
                                    <p style="margin: 0;"><span style="color: #153643"><b>Email:</b></span>
                                        {{$data ['email'] }}
                                    </p>
                                    <hr>
                                    <p style="margin: 0;"><span style="color: #153643"><b>Phone</b></span>
                                        {{$data ['number'] }}
                                    </p>
                                    <hr>
                                    <p style="margin: 0;"><span style="color: #153643"><b>Child one first name:</b></span>
                                        {{$data ['child_one_first_name'] }}
                                    </p>
                                    <hr>
                                    <p style="margin: 0;"><span style="color: #153643"><b>Child one last name:</b></span>
                                        {{$data ['child_one_last_name'] }}
                                    </p>
                                    <hr>
                                    <p style="margin: 0;"><span style="color: #153643"><b>Child one date of birth:</b></span>
                                        {{$data ['child_one_dob'] }}
                                    </p>
                                    @if(isset($data['child_two_first_name']) && isset($data['child_two_last_name']) && isset($data['child_two_dob']))
                                        <hr>
                                        <p style="margin: 0;"><span style="color: #153643"><b>Child two first name:</b></span>
                                            {{$data ['child_two_first_name'] }}
                                        </p>
                                        <hr>
                                        <p style="margin: 0;"><span style="color: #153643"><b>Child two last name:</b></span>
                                            {{$data ['child_two_last_name'] }}
                                        </p>
                                        <hr>
                                        <p style="margin: 0;"><span style="color: #153643"><b>Child two date of birth:</b></span>
                                            {{$data ['child_two_dob'] }}
                                        </p>
                                    @endif
                                    @if(isset($data['child_three_first_name']) && isset($data['child_three_last_name']) && isset($data['child_three_dob']))
                                        <hr>
                                        <p style="margin: 0;"><span style="color: #153643"><b>Child three first name:</b></span>
                                            {{$data ['child_three_first_name'] }}
                                        </p>
                                        <hr>
                                        <p style="margin: 0;"><span style="color: #153643"><b>Child three last name:</b></span>
                                            {{$data ['child_three_last_name'] }}
                                        </p>
                                        <hr>
                                        <p style="margin: 0;"><span style="color: #153643"><b>Child three date of birth:</b></span>
                                            {{$data ['child_three_dob'] }}
                                        </p>
                                    @endif
                                    <hr>
                                    @if(isset($data['additional_comments']))
                                        <p style="margin: 0;"><span style="color: #153643"><b>Additional Comments:</b></span>
                                            {{$data ['additional_comments'] }}
                                        </p>
                                    @endif
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
                                        </script> The Kids Planet . All Rights Reserved. <a href="https://bmgroupinc.com" target="_blank" style="color: #456DE2"><b>BM_IT</b></a></p>
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
