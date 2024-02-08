<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Webpage Title -->
    <title>eBarangay Contact Page</title>

    <!-- Branding -->
    <link rel="icon" href="../assets/branding/logo-lightmode.png">

    <!-- Styles -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/unicons.css">
    <style>
        /* Heading */
        .contact-banner {
            height: 60vh;
            position: relative;
            border: 1px solid #9B9988;
        }

        .contact-heading {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding-top: 150px;
            width: 100%; /* Use 100% width to make it responsive */
            height: 182px;
            flex-shrink: 0;
            object-fit: cover;
            background: linear-gradient(0deg, rgba(45, 22, 116, 0.40) 0%, rgba(45, 22, 116, 0.40) 100%), url(https://s3-alpha-sig.figma.com/img/d37d/124c/bcd4c66b4ab3cd74536961fbeab8848b?Expires=1705276800&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=iyX03G8o9DV3DxAJvVFY5b-lec~3h9kiG01wf45cOLE6tqN6z5fi7pF4nA~yS9Hi4tkl0I5C1atR9-k9sE9w4YQVl2s3fR0DV2uqQFU0C76DTH1t1RDKD9TW7-zc5TwVrc5cngJPM8m2aHRrUSAkpPNBsdeiObVhojOUy2ZuERUJqlhQks7WDPevrjh384~5wQQubcdCm3NvmTzCeYmZtY563jxIFANfzAeAER1Ex9wlmNvFa7nvCfuv6zoi~POIhdQ9OiVJtnebuWtBzyLmOlxTCQImSr6CmDpi3cgPfXpGzSbDcYh0kyxNHAaXTvdsNE07FZbb765G54fTA4GPjg__), lightgray 0px -123.549px / 100% 191.742% no-repeat;
            background-size: cover;
            background-position: center;
        }

        .contact-heading h1 {
            color: #FFF;
            text-align: center;
            font-family: Harabara Mais Demo;
            font-size: 70px;
            font-style: normal;
            font-weight: bold;
            line-height: normal;
            letter-spacing: -0.9px;
        }

        .contact-heading h2 {
            color: rgba(45, 22, 116, 0.50);
            font-family: Harabara Mais Demo;
            font-size: 75px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            letter-spacing: -0.75px;
        }

        .contactpage {
            height: 80vh;
            position: relative;
            border: 1px solid #9B9988;
        }

        .row {
            display: flex;
        }

        .col {
            box-sizing: border-box;
            padding: 50px;
        }

        .col-50 {
            width: 50%;
            padding: 50px;
        }

        /* Welcome */
        
        .welcome p {
            color: #140A32;
            font-family: Inter;
            font-size: 20px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            letter-spacing: 0.75px;
            text-align: justify;
        }

        .images {
            /* Placeholder style for images */
            width: 100px;
            height: 100px;
            background-color: lightgray;
        }

        .welcome h2 {
            color: #2D1674;
            font-family: Harabara Mais Demo;
            font-size: 40px;
            font-style: bold;
            font-weight: bold;
            line-height: normal;
            letter-spacing: -0.4px;
            width: 543px;
        }

        .welcome h3 {
            display: flex;
            width: 460px;
            height: 90px;
            flex-direction: column;
            justify-content: center;
            flex-shrink: 0;
            color: #140A32;
            font-family: Inter;
            font-size: 30px;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
            letter-spacing: -0.4px;
        }

   

        .details h2 {
            color: #2D1674;
            font-family: Harabara Mais Demo;
            font-size: 40px;
            font-style: bold;
            font-weight: 400;
            line-height: normal;
            letter-spacing: -0.75px;
            align-items: center;
        }

        .loc h2,
        .con h2 {
            color: #140A32;
            font-family: Inter;
            font-size: 25px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            letter-spacing: 0.75px;
            width: 127px;
            
        }

        .loc h4 {
            color: #140A32;
            font-family: Inter;
            font-size: 20px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            letter-spacing: 0.6px;
            width: 286px;
        }

        .con h4 {
            color: #140A32;
            font-family: Inter;
            font-size: 20px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            letter-spacing: 0.6px;
            width: 226px;
        }

        /* Emergency Table */
        .hotlines {
            text-align: center;
            padding: 50px 20px;
        }

        .emergency {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            border: 1px solid #9B9988; /* Added border styling */
            background: rgba(255, 255, 255, 0.05);
        }

        .emergency th,
        .emergency td {
            padding: 15px;
            border: 1px solid #ccc;
            color: #2D1674;
        }

        .emergency th {
            background-color: #2D1674;
            color: #fff;
        }

        .emergency tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .em h1 {
            color: #2D1674;
            font-family: Harabara Mais Demo;
            font-size: 40px;
            font-style: bold;
            font-weight: bold;
            line-height: normal;
            letter-spacing: -0.4px;
            width: 543px;
        }
    </style>
</head>

<body>
    <!-- Top navbar -->
    <?php require_once('../partials/user_topnav.html'); ?>

    <!-- Heading Section -->
    <section id="contact-banner" class="contact-banner">
        <div class="contact-heading">
            <h1>Contact</h1>
        </div>
    </section>

    <!-- Welcome and Details -->
    <section id="contactpage" class="contactpage">
        <div class="row">
            <!-- Welcome Section -->
            <div class="col col-50">
                <div class="welcome">
                    <h2>Contact Us!</h2>
                    <h3>Don't hesitate to contact us if you need more help!</h3>
                    <p>We're here to assist you in any way we can. Whether you have questions, feedback, or need support, please don't hesitate to reach out to us. Your input and inquiries are important to us as we strive to enhance your eBarangay Portal experience.</p>
                </div>
            </div>

            <!-- side details -->
            <div class="col col-50">
                <div class="details">
                    <div class="loc">
                        <h2>Location</h2>
                        <h4>Sampaloc, Manila</h4>
                        <hr> <!-- Close the hr tag properly -->
                    </div>
                    <div class="con">
                        <h2>Contact</h2>
                        <h4>ebarangay@gmail.com</h4>
                        <h4>(123) 456-7890</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
    <section id="hotlines" class="hotlines">
        <div class="em">
            <h1> Emergency Hotlines</h1>
            <div class="numbers">
                <table class="emergency">
                    <tr>
                        <th>Agency Name</th>
                        <th>Contact</th>
                        <th>Specialization</th>
                        <th>Area Coverage</th>
                    </tr>
                    <tr>
                        <td>Philippine Red Cross</td>
                        <td>143</td>
                        <td>Humanitarian Aid</td>
                        <td>Nationwide</td>
                    </tr>
                    <tr>
                        <td>Philippine National Police</td>
                        <td>117 / 911</td>
                        <td>Police and Safety</td>
                        <td>Nationwide</td>
                    </tr>
                    <tr>
                        <td>Bureau of Fire Protection</td>
                        <td>180 / 911</td>
                        <td>Firefighting</td>
                        <td>Nationwide</td>
                    </tr>
                    <tr>
                        <td>National Complaint Online</td>
                        <td>8888</td>
                        <td>Public Service</td>
                        <td>Nationwide</td>
                    </tr>
                    <tr>
                        <td>Bantay Bata</td>
                        <td>163</td>
                        <td>Child Protection</td>
                        <td>Nationwide</td>
                    </tr>
                </table>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php require_once('../partials/footer.html'); ?>
</body>

</html>