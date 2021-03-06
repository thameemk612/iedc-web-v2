<div style="background: white;" id="slider" class="inspiro-slider" data-height="380">
    <div class="slide">
        <div class="container">
            <div class="slide-captions text-center text-dark">
                <h3>Events & program</h3>
                <h2>Registration</h2>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <center>
        <img src="https://static.thenounproject.com/png/1197388-200.png">
    </center>

    <p style="font-size:1.4em">Follow the steps to register for an event or program</p>
    <div class="row ml-3 mt-3 mb-3">
        <style>
            li:not(:last-child) {
                margin-bottom: 5px;
            }
        </style>
        <br>
        <ol style="font-size:1.3em !important;letter-spacing:1px;">
            <?php if ($this->session->userdata('sess_logged_in') == 0) { ?>
                <li> Please login or access your profile & Complete the profile if not done
                    <a style="color:#007bff !important;" href="<?php echo $loginURL ?>">[ Click here ]</a>
                </li>
                <li>Go to Events & program section
                    <a style="color:#007bff !important;" href="<?= base_url() ?>user/dashboard/events">[ Click here ]</a>
                </li>
            <?php } else { ?>
                <li>Go to Events & program section
                    <a style="color:#007bff !important;" href="<?= base_url() ?>user/dashboard/events">[ Click here ]</a>
                <?php } ?>
                </li>
                <li>Find the event or program that you want and register</li>
                <li>That's All</li>
        </ol>
    </div>

</div>