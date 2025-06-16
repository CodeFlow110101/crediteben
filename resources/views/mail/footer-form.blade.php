<!DOCTYPE html>
<html>

<head>
    <title>Email</title>
</head>

<body style="margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: #f4f4f4;">
    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#f4f4f4">
        <tr>
            <td align="center">
                <table role="presentation" width="600" cellspacing="0" cellpadding="0" border="0" style="background-color: #ffffff; padding: 20px; border-radius: 5px;">
                    <tr>
                        <td>
                            <table role="presentation" width="100%" cellspacing="0" cellpadding="10" border="0" style="margin-top: 20px;">
                                <tr>
                                    <td><strong>Name:</strong> {{$name}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Email:</strong> {{$email}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Message:</strong>{{ $userMessage }}</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" style="font-size: 14px; color: #888; padding-top: 20px;">
                            This mail has been sent from CreditEben.
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>