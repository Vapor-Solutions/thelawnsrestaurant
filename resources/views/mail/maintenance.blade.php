<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }} - New Contact</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
        body {}

        a {
            text-decoration: none;
        }

        span {
            font-size: 14px;
        }


        .text-center {}

        h6 {
            font-size: 16px;
            margin: 0 0 18px 0;
        }

    </style>
</head>

<body style="margin: 30px auto;width: 650px;
            font-family: 'Roboto', sans-serif;
            background-color: #f6f7fb;
            display: block;">
    <table style="width: 100%">
        <tbody>
            <tr>
                <td>
                    <table style="background-color: #f6f7fb; width: 100%">
                        <tbody>
                            <tr>
                                <td>
                                    <table style="width: 650px; margin: 0 auto; margin-bottom: 30px">
                                        <tbody>
                                            <tr>
                                                <td><a href="index.html"><img width="50px" height="auto"
                                                            class="img-fluid" src="{{ url('/lawns-color.png') }}"
                                                            alt=""></a></td>
                                                <td style="text-align: right; color:#999"><span
                                                        style="font-size: 14px;">New Contact
                                                        No. {{ $details->id }}</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style="width: 650px; margin: 0 auto; background-color: #fff; border-radius: 8px">
                        <tbody>
                            <tr>
                                <td style="padding: 30px">
                                    <h6 style="font-weight: 600 font-size: 16px;
            margin: 0 0 18px 0;">New Contact</h6>
                                    <p style="font-size: 13px;
            line-height: 1.7;
            letter-spacing: 0.7px;
            margin-top: 0;">There is a new contact for you.</p>
                                    {{-- <p style="text-align: center"><a href="javascript:void(0)"
                                            style="padding: 10px; background-color: #00a19a; color: #fff; display: inline-block; border-radius: 4px;font-weight:600;">Reset
                                            Password</a></p> --}}
                                    <p style="font-size: 13px;
            line-height: 1.7;
            letter-spacing: 0.7px;
            margin-top: 0;"><strong>Name: </strong>{{ $details->name }}</p>
                                    <p style="font-size: 13px;
            line-height: 1.7;
            letter-spacing: 0.7px;
            margin-top: 0;"><strong>Email: </strong>{{ $details->email }}</p>
                                    <p style="margin-bottom: 0">
                                        Regards,<br>The Lawns Restaurant Robot</p>

                                    {{-- <p style="font-size: 13px;
            line-height: 1.7;
            letter-spacing: 0.7px;
            margin-top: 0;">{{ $details }}</p> --}}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style="width: 650px; margin: 0 auto; margin-top: 30px">
                        <tbody>
                            <tr style="text-align: center">
                                <td>
                                    <p style="color: #999; margin-bottom: 0">
                                        {{ env('LINE_1') }},<br>{{ env('LINE_2') }},<br>{{ env('CITY') }},
                                        {{ env('COUNTRY_ABBREVIATION') }} <br> {{ env('POSTAL_ADDRESS') }} -
                                        {{ env('POSTAL_CODE') }}</p>
                                    {{-- <p style="color: #999; margin-bottom: 0">Don't Like These Emails?<a
                                            href="javascript:void(0)" style="color: #00a19a">Unsubscribe</a></p> --}}
                                    <p style="color: #999; margin-bottom: 0">Powered By Steve Nyanumba Developments</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>
