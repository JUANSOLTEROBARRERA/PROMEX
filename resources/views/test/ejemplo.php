<?php 
                    $contador = 0;
                    if(isset($_POST['btnLogA'])) {
                        if (isset($_POST['pregunta36']))
                            {
                                $contador+3;
                            }
                            else
                            {
                                $contador--;
                            }
                            echo $contador;
                    }
                    
                    ?>