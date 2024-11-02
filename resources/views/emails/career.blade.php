<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Career Application</title>
    <style>
        body, table, td {
            font-family: Arial, sans-serif;
            color: #153643;
        }
        img.image-thumbnail{
            max-width: 120px !important;
        }
    </style>
</head>

<body style="margin: 0; padding: 0;">
    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td style="padding: 20px;">
                <table align="center" width="600" style="border-collapse: collapse; border: 1px solid #cccccc;">
                    <!-- Header Logo Section -->
                    <tr>
                        <td align="center" style="padding: 40px; background-color: #1B1A27;">
                            <img src="https://littlecruisers.ca/assets/images/logo.svg" alt="Little Cruisers Logo" style="width: 200px;">
                        </td>
                    </tr>
                    
                    <!-- Main Content Section -->
                    <tr>
                        <td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding:  20px;">
                            <h1 style="margin: 0;">Career Application Details</h1>
                            <hr>
                            <p style="margin: 0;"><span style="color: #153643"><b>First Name:</b></span> 
                                {{ $data['first_name'] }}
                            </p>
                            <hr>
                            <p style="margin: 0;"><span style="color: #153643"><b>Last Name:</b></span> 
                                {{ $data['last_name'] }}
                            </p>
                            <hr>
                            <p style="margin: 0;"><span style="color: #153643"><b>Email:</b></span> 
                                {{ $data['email'] }}
                            </p>
                            <hr>
                            <p style="margin: 0;"><span style="color: #153643"><b>Phone:</b></span> 
                                {{ $data['phone'] }}
                            </p>
                            <hr>
                            <p style="margin: 0;"><span style="color: #153643"><b>Desired Position:</b></span> 
                                {{ $data['desired_position'] }}
                            </p>
                            <hr>
                            <p style="margin: 0;"><span style="color: #153643"><b>Additional Comments:</b></span> 
                                {{ $data['addition_comments'] }}
                            </p>
                        </td>
                    </tr>

                    <!-- Footer Section -->
                    <tr>
                        <td style="background-color: #FDF6ED; padding: 20px; text-align: center;">
                            <p style="margin: 0;">© <script>document.write(new Date().getFullYear());</script> Little Cruisers. All Rights Reserved. 
                                <a href="https://bmgroupinc.com" style="color: #456DE2;"><strong>BM_IT</strong></a>
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
