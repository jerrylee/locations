<?php
                    // Saving data from form in JSON format 
                    
                    //check to see it all data is submitted, else output error messagte
					$locations = $_POST['location'];
                    if(!empty($locations)) {
 
                            //adds form data into an array
                            /*$formdata = array(
                                'location-name' => $_POST['location-name'],
                                'lat' => $_POST['lat'],
                                'long' => $_POST['long'],
                                'html' => $_POST['html']
                            );
							*/
							$formdata = $locations;
                            
                            //encodes array into json (JSON_PRETTY_PRINT uses whitespace to make more readable)
                            $jsondata = json_encode($formdata, JSON_PRETTY_PRINT);
                            
                            //saves the json string in formdata.txt, outputs error message if cannot be saved
                            if(file_put_contents('fomdata.txt', $jsondata)) echo 'Data successfully saved';
                            else echo 'Unable to save that stuff man';
 
                      }
                    else echo 'Form Fields not Submitted';
