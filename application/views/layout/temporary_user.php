<!DOCTYPE html>
<html>
    <head>
        <title><?php echo isset($title) ? "Dropin: $title" : NULL; ?></title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css" type="text/css" />
        <link rel="stylesheet" href="/assets/css/main.css" type="text/css" />
        <script src="<?php echo base_url(); ?>assets/js/jquery-latest.js"></script>
    </head>

    <body spacing="0" marginheight="0" marginwidth="0">

        <script>
            window.onload=function() {

                var radio_professional = document.getElementById('radio_professional');
                var radio_kuliah = document.getElementById('radio_kuliah');
                var radio_sma = document.getElementById('radio_sma');
                var radio_smp = document.getElementById('radio_smp');
                var radio_sd = document.getElementById('radio_sd');
                var radio_hobby = document.getElementById('radio_hobby');
                var radio_other = document.getElementById('radio_other');

                var $sub_professional = $('#subcategory-professional');
                var $sub_kuliah = $('#subcategory-kuliah');
                var $sub_sma = $('#subcategory-sma');
                var $sub_smp = $('#subcategory-smp');
                var $sub_sd = $('#subcategory-sd');
                var $sub_hobby = $('#subcategory-hobby');
                var $sub_other = $('#subcategory-other');
                var $sub_initial = $('#subcategory-initial');

                var $fade_speed = 450;
  
                radio_professional.onclick = handler_professional;
                radio_kuliah.onclick = handler_kuliah;
                radio_sma.onclick = handler_sma;
                radio_smp.onclick = handler_smp;
                radio_sd.onclick = handler_sd;
                radio_hobby.onclick = handler_hobby;
                radio_other.onclick = handler_other;

                function handler_professional(){
                    $sub_initial.addClass('hide');
                    $sub_professional.slideUp(0,function(){
                        $sub_professional.removeClass('hide')
                        .fadeIn($fade_speed);
                    });  
                    $sub_kuliah.addClass('hide');
                    $sub_sma.addClass('hide');
                    $sub_smp.addClass('hide');
                    $sub_sd.addClass('hide');
                    $sub_hobby.addClass('hide');
                    $sub_other.addClass('hide');
  
                };

                function handler_kuliah(){
                    $sub_initial.addClass('hide');
                    $sub_professional.addClass('hide');
                    $sub_kuliah.slideUp(0,function(){
                        $sub_kuliah.removeClass('hide')
                        .fadeIn($fade_speed);
                    });  
                    $sub_sma.addClass('hide');
                    $sub_smp.addClass('hide');
                    $sub_sd.addClass('hide');
                    $sub_hobby.addClass('hide');
                    $sub_other.addClass('hide');
 
                };

                function handler_sma(){
                    $sub_initial.addClass('hide');
                    $sub_professional.addClass('hide');  
                    $sub_kuliah.addClass('hide');
                    $sub_sma.slideUp(0,function(){
                        $sub_sma.removeClass('hide')
                        .fadeIn($fade_speed);
                    });
                    $sub_smp.addClass('hide');
                    $sub_sd.addClass('hide');
                    $sub_hobby.addClass('hide');
                    $sub_other.addClass('hide');
  
                };

                function handler_smp(){
                    $sub_initial.addClass('hide');
                    $sub_professional.addClass('hide');  
                    $sub_kuliah.addClass('hide');
                    $sub_sma.addClass('hide');  
                    $sub_smp.slideUp(0,function(){
                        $sub_smp.removeClass('hide')
                        .fadeIn($fade_speed);
                    });
                    $sub_sd.addClass('hide');
                    $sub_hobby.addClass('hide');
                    $sub_other.addClass('hide');
  
                };

                function handler_sd(){
                    $sub_initial.addClass('hide');
                    $sub_professional.addClass('hide');  
                    $sub_kuliah.addClass('hide');
                    $sub_sma.addClass('hide');
                    $sub_smp.addClass('hide');
                    $sub_sd.slideUp(0,function(){
                        $sub_sd.removeClass('hide')
                        .fadeIn($fade_speed);
                    });
                    $sub_hobby.addClass('hide');
                    $sub_other.addClass('hide');
  
                };

                function handler_hobby(){
                    $sub_initial.addClass('hide');
                    $sub_professional.addClass('hide');  
                    $sub_kuliah.addClass('hide');
                    $sub_sma.addClass('hide');
                    $sub_smp.addClass('hide');
                    $sub_sd.addClass('hide');
                    $sub_hobby.slideUp(0,function(){
                        $sub_hobby.removeClass('hide')
                        .fadeIn($fade_speed);
                    });
                    $sub_other.addClass('hide');
  
                };

                function handler_other(){
                    $sub_initial.addClass('hide');
                    $sub_professional.addClass('hide');  
                    $sub_kuliah.addClass('hide');
                    $sub_sma.addClass('hide');
                    $sub_smp.addClass('hide');
                    $sub_sd.addClass('hide');
                    $sub_hobby.addClass('hide');
                    $sub_other.fadeOut(0,function(){
                        $sub_other.removeClass('hide')
                        .fadeIn($fade_speed);
                    });
  
                };

            }
    </script>

    <?php $this->load->view('layout/navigation'); ?>

    <div style="float:none">
        <img src="<?= base_url('assets/uploads/cover_' . $user['user_id'] . '.png') ?>"></img>            
    </div>    
    
<!--    <div id="footer">
        <hr />
        <p>Copyright &copy; Dropin Inc. 2012</p> Page rendered in <strong>{elapsed_time}</strong> seconds</p>
    </div>-->

</body>
</html>        