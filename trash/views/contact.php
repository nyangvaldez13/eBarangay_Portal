<style>
 .background-event {
            width: 100vw; /* Full width of the viewport */
            height: 100vh; /* Full height of the viewport */
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(0deg, rgba(45, 22, 116, 0.4) 0%, rgba(45, 22, 116, 0.4) 100%),
                        url('../assets/home/home-bg.png') center/cover no-repeat;
            flex-shrink: 0;
            overflow: hidden; /* Hide content overflow */
        }

        .event-title {
            color: #FFF;
            font-size: 3rem; /* Adjust the font size as needed */
            font-weight: 400;
            text-align: center;
            letter-spacing: -0.55px;
            font-family: Harabara Mais Demo;
        }
        .header1 {
        font-size: larger; 
        font-weight: bolder;
    }

    .header1 br {
        display: none; /* Hide the line break on larger screens */
    }

    @media (max-width: 768px) {
        .header1 br {
            display: block; /* Display the line break on smaller screens */
        }
        .header-text{
            font-size: 40px;
        }
    }
</style>

<section>
        <div class="background-event">
            <div class="event-title">
                <div class="header-text"><span class="header1"> Contact </span></div>
            </div>
        </div>
    </section>