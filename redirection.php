
                <?php
                  if (isset($_POST['submit'])) {
                    $vendors=$_POST['vendors'];
                    $location=$_POST['location'];
                    $city=$_POST['city'];
                    switch ($vendors . $location . $city) {

                      case 'choose':
                      header("location:index.php");
                        break;


                        #LAGOS BEGINING
                      # BEGINING PHOTGRAPHER LOCATION
                      case 'photographer'.'ikeja'.'Lagos':
                      header("location:ikejaphotogra.php");
                        break;
                        
                         case 'photographer'.'epe'.'Lagos':
                      header("location:epephotogra.php");
                        break;
                        
                        case 'photographer'.'badagry'.'Lagos':
                      header("location:badagryphotogra.php");
                        break;
                        
                         case 'photographer'.'mushin'.'Lagos':
                      header("location:mushinphotogra.php");
                        break;

                        case 'photographer'.'lekki'.'Lagos':                
                      header("location:lekkiphotogra.php");                     
                        break;
                        
                          case 'photographer'.'ikorodu'.'Lagos':                
                      header("location:ikoroduphotogra.php");                     
                        break;
                        
                          case 'photographer'.'oshodi'.'Lagos':                
                      header("location:oshodiphotogra.php");                     
                        break;
                        
                          case 'photographer'.'shomolu'.'Lagos':                
                      header("location:shomoluphotogra.php");                     
                        break;
                        
                          case 'photographer'.'surulere'.'Lagos':                
                      header("location:surulerephotogra.php");                     
                        break;
                        
                        case 'photographer'.'ijaye'.'Lagos':                
                      header("location:ijayephotogra.php");                     
                        break;
                        
                          case 'photographer'.'abuleegba'.'Lagos':                
                      header("location:abuleegbaphotogra.php");                     
                        break;

                        case 'photographer'.'maryland'.'Lagos':
                      header("location:marylandphotogra.php");                    break;

                        case 'photographer'.'victoria'.'Lagos':
                      header("location:victoriaphotogra.php");                        break;

                        case 'photographer'.'apapa'.'Lagos':
                      header("location:apapaphotogra.php");                       break;

                        case 'photographer'.'ikotun'.'Lagos':
                      header("location:ikotunphotogra.php");                        break;

                        case 'photographer'.'agege'.'Lagos':
                      header("location:agegephotogra.php");                       break;

                        case 'photographer'.'iyanaipaja'.'Lagos':
                      header("location:iyanaipajaphotogra.php");                        break;

                        case 'photographer'.'berger'.'Lagos':
                      header("location:bergerphotogra.php");                        break;

                        case 'photographer'.'egbeda'.'Lagos':
                      header("location:egbedaphotogra.php");                        break;

                        #END PHOTGRAPHER LOCATION



                        #BEGINING VEDIOGRAPHERS LOCATION
                        case 'vediographer'.'ikeja'.'Lagos':
                      header("location:ikejavediographer.php");
                        break;
                        
                        
                         case 'vediographer'.'mushin'.'Lagos':
                      header("location:mushinvediographer.php");
                        break;
                        
                        case 'vediographer'.'ikorodu'.'Lagos':
                      header("location:ikoroduvediographer.php");
                        break;
                        
                        case 'vediographer'.'oshodi'.'Lagos':
                      header("location:oshodivediographer.php");
                        break;
                        
                        case 'vediographer'.'shomolu'.'Lagos':
                      header("location:shomoluvediographer.php");
                        break;
                        
                        case 'vediographer'.'surulere'.'Lagos':
                      header("location:surulerevediographer.php");
                        break;
                        
                         case 'vediographer'.'epe'.'Lagos':
                      header("location:epevediographer.php");
                        break;
                        
                         case 'vediographer'.'badagry'.'Lagos':
                      header("location:badagryvediographer.php");
                        break;

                          case 'vediographer'.'lekki'.'Lagos':                
                      header("location:lekkivediographer.php");                   
                        break;
                        
                          case 'vediographer'.'abuleegba'.'Lagos':                
                      header("location:abuleegbavediographer.php");                   
                        break;
                        
                          case 'vediographer'.'ijaye'.'Lagos':                
                      header("location:ijayevediographer.php");                   
                        break;

                        case 'vediographer'.'maryland'.'Lagos':
                      header("location:marylandvediographer.php");                    break;

                        case 'vediographer'.'victoria'.'Lagos':
                      header("location:victoriavediographer.php");                        break;

                        case 'vediographer'.'apapa'.'Lagos':
                      header("location:apapavediographer.php");                       break;

                        case 'vediographer'.'ikotun'.'Lagos':
                      header("location:ikotunvediographer.php");                        break;

                        case 'vediographer'.'agege'.'Lagos':
                      header("location:agegevediographer.php");                       break;

                        case 'vediographer'.'iyanaipaja'.'Lagos':
                      header("location:iyanaipajavediographer.php");                        break;

                        case 'vediographer'.'berger'.'Lagos':
                      header("location:bergervediographer.php");                        break;

                        case 'vediographer'.'egbeda'.'Lagos':
                      header("location:egbedavediographer.php");                        break;

                        #END VEDIOGRAPHERS LOCATION


                        #BEGINING CATERERS LOCATION
                        case 'caterers'.'ikeja'.'Lagos':
                      header("location:ikejacaterers.php");
                        break;
                        
                         case 'caterers'.'mushin'.'Lagos':
                      header("location:mushincaterers.php");
                        break;
                        
                         case 'caterers'.'ikorodu'.'Lagos':
                      header("location:ikoroducaterers.php");
                        break;
                        
                          case 'caterers'.'abuleegba'.'Lagos':
                      header("location:abuleegbacaterers.php");
                        break;
                        
                          case 'caterers'.'ijaye'.'Lagos':
                      header("location:ijayecaterers.php");
                        break;
                        
                         case 'caterers'.'oshodi'.'Lagos':
                      header("location:oshodicaterers.php");
                        break;
                        
                         case 'caterers'.'shomolu'.'Lagos':
                      header("location:shomolucaterers.php");
                        break;
                        
                         case 'caterers'.'surulere'.'Lagos':
                      header("location:surulerecaterers.php");
                        break;
                        
                          case 'caterers'.'badagry'.'Lagos':
                      header("location:badagrycaterers.php");
                        break;
                        
                           case 'caterers'.'epe'.'Lagos':
                      header("location:epecaterers.php");
                        break;

                          case 'caterers'.'lekki'.'Lagos':                
                      header("location:lekkicaterers.php");                   
                        break;

                        case 'caterers'.'maryland'.'Lagos':
                      header("location:marylandcaterers.php");                    break;

                        case 'caterers'.'victoria'.'Lagos':
                      header("location:victoriacaterers.php");                        break;

                        case 'caterers'.'apapa'.'Lagos':
                      header("location:apapacaterers.php");                       break;

                        case 'caterers'.'ikotun'.'Lagos':
                      header("location:ikotuncaterers.php");                        break;

                        case 'caterers'.'agege'.'Lagos':
                      header("location:agegecaterers.php");                       break;
                     

                        case 'caterers'.'iyanaipaja'.'Lagos':
                      header("location:iyanaipajacaterers.php");                        break;

                        case 'caterers'.'berger'.'Lagos':
                      header("location:bergercaterers.php");                        break;

                        case 'caterers'.'egbeda'.'Lagos':
                      header("location:egbedacaterers.php");                        break;

                        #END CATERERS LOCATION


                        #BEGINING WINESELLER LOCATION
                        case 'wineseller'.'ikeja'.'Lagos':
                      header("location:ikejawineseller.php");
                        break;
                        
                        case 'wineseller'.'mushin'.'Lagos':
                      header("location:mushinwineseller.php");
                        break;
                        
                         case 'wineseller'.'ikorodu'.'Lagos':
                      header("location:ikoroduwineseller.php");
                        break;
                        
                         case 'wineseller'.'oshodi'.'Lagos':
                      header("location:oshodiwineseller.php");
                        break;
                        
                         case 'wineseller'.'shomolu'.'Lagos':
                      header("location:shomoluwineseller.php");
                        break;
                        
                           case 'wineseller'.'abuleegba'.'Lagos':
                      header("location:abuleegbawineseller.php");
                        break;
                        
                           case 'wineseller'.'ijaye'.'Lagos':
                      header("location:ijayewineseller.php");
                        break;
                        
                         case 'wineseller'.'surulere'.'Lagos':
                      header("location:surulerewineseller.php");
                        break;
                        
                         case 'wineseller'.'badagry'.'Lagos':
                      header("location:badagrywineseller.php");
                        break;
                        
                         case 'wineseller'.'epe'.'Lagos':
                      header("location:epewineseller.php");
                        break;

                            case 'wineseller'.'lekki'.'Lagos':                
                      header("location:lekkiwineseller.php");                   
                        break;

                        case 'wineseller'.'maryland'.'Lagos':
                      header("location:marylandwineseller.php");                    break;

                        case 'wineseller'.'victoria'.'Lagos':
                      header("location:victoriawineseller.php");                        break;

                        case 'wineseller'.'apapa'.'Lagos':
                      header("location:apapawineseller.php");                       break;

                        case 'wineseller'.'ikotun'.'Lagos':
                      header("location:ikotunwineseller.php");                        break;

                        case 'wineseller'.'agege'.'Lagos':
                      header("location:agegewineseller.php");                       break;

                        case 'wineseller'.'iyanaipaja'.'Lagos':
                      header("location:iyanaipajawineseller.php");                        break;

                        case 'wineseller'.'berger'.'Lagos':
                      header("location:bergerwineseller.php");                        break;

                        case 'wineseller'.'egbeda'.'Lagos':
                      header("location:egbedawineseller.php");                        break;

                        #END WINESELLER LOCATION


                      #BEGINING OF ENTERTAINER LOCATION
                        case 'entertainer'.'ikeja'.'Lagos':
                        header("location:ikejaentertainer.php");
                        break;
                        
                        case 'entertainer'.'mushin'.'Lagos':
                        header("location:mushinentertainer.php");
                        break;
                        
                        case 'entertainer'.'ikorodu'.'Lagos':
                        header("location:ikoroduentertainer.php");
                        break;
                        
                        case 'entertainer'.'oshodi'.'Lagos':
                        header("location:oshodientertainer.php");
                        break;
                        
                        case 'entertainer'.'shomolu'.'Lagos':
                        header("location:shomoluentertainer.php");
                        break;
                        
                        case 'entertainer'.'surulere'.'Lagos':
                        header("location:surulereentertainer.php");
                        break;
                        
                        case 'entertainer'.'abuleegba'.'Lagos':
                        header("location:abuleegbaentertainer.php");
                        break;
                        
                        
                        case 'entertainer'.'ijaye'.'Lagos':
                        header("location:ijayeentertainer.php");
                        break;
                        
                        case 'entertainer'.'badagry'.'Lagos':
                        header("location:badagryentertainer.php");
                        break;
                        
                        case 'entertainer'.'epe'.'Lagos':
                        header("location:epeentertainer.php");
                        break;

                            case 'entertainer'.'lekki'.'Lagos':               
                      header("location:lekkientertainer.php");                    
                        break;

                        case 'entertainer'.'maryland'.'Lagos':
                      header("location:marylandentertainer.php");                   break;

                        case 'entertainer'.'victoria'.'Lagos':
                      header("location:victoriaentertainer.php");                       break;

                        case 'entertainer'.'apapa'.'Lagos':
                      header("location:apapaentertainer.php");                        break;

                        case 'entertainer'.'ikotun'.'Lagos':
                      header("location:ikotunentertainer.php");                       break;

                        case 'entertainer'.'agege'.'Lagos':
                      header("location:agegeentertainer.php");                        break;

                        case 'entertainer'.'iyanaipaja'.'Lagos':
                      header("location:iyanaipajaentertainer.php");                       break;

                        case 'entertainer'.'berger'.'Lagos':
                      header("location:bergerentertainer.php");                       break;

                        case 'entertainer'.'egbeda'.'Lagos':
                      header("location:egbedaentertainer.php");                       break;
                        #END ENTERTAINER / MC LOCATION


                        #BEGINING MUSIC ARTIST LOCATION
                        case 'music'.'ikeja'.'Lagos':
                      header("location:ikejamusicband.php");
                        break;
                        
                        case 'music'.'mushin'.'Lagos':
                      header("location:mushinmusicband.php");
                        break;
                        
                        case 'music'.'ikorodu'.'Lagos':
                      header("location:ikorodumusicband.php");
                        break;
                        
                        case 'music'.'oshodi'.'Lagos':
                      header("location:oshodimusicband.php");
                        break;
                        
                        case 'music'.'abuleegba'.'Lagos':
                      header("location:abuleegbamusicband.php");
                        break;
                        
                        case 'music'.'ijaye'.'Lagos':
                      header("location:ijayemusicband.php");
                        break;
                        
                        
                        case 'music'.'shomolu'.'Lagos':
                      header("location:shomolumusicband.php");
                        break;
                        
                        case 'music'.'surulere'.'Lagos':
                      header("location:suruleremusicband.php");
                        break;
                        
                          case 'music'.'badagry'.'Lagos':
                      header("location:badagrymusicband.php");
                        break;
                        
                           case 'music'.'epe'.'Lagos':
                      header("location:epemusicband.php");
                        break;

                        case 'music'.'lekki'.'Lagos':               
                      header("location:lekkimusicband.php");                    
                        break;

                        case 'music'.'maryland'.'Lagos':
                      header("location:marylandmusicband.php");                   break;

                        case 'music'.'victoria'.'Lagos':
                      header("location:victoriamusicband.php");                       break;

                        case 'music'.'apapa'.'Lagos':
                      header("location:apapamusicband.php");                        break;

                        case 'music'.'ikotun'.'Lagos':
                      header("location:ikotunmusicband.php");                       break;

                        case 'music'.'agege'.'Lagos':
                      header("location:agegemusicband.php");                        break;

                        case 'music'.'iyanaipaja'.'Lagos':
                      header("location:iyanaipajamusicband.php");                       break;

                        case 'music'.'berger'.'Lagos':
                      header("location:bergermusicband.php");                       break;

                        case 'music'.'egbeda'.'Lagos':
                      header("location:egbedamusicband.php");                       break;
                        #END MUSIC ARTIST LOCATION


                      #BEGINING HALL DECORATORS LOCATION
                        case 'halldecorators'.'ikeja'.'Lagos':
                      header("location:ikejahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'mushin'.'Lagos':
                      header("location:mushinhalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'ikorodu'.'Lagos':
                      header("location:ikoroduhalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'abuleegba'.'Lagos':
                      header("location:abuleegbahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'ijaye'.'Lagos':
                      header("location:ijayehalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'oshodi'.'Lagos':
                      header("location:oshodihalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'shomolu'.'Lagos':
                      header("location:shomoluhalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'surulere'.'Lagos':
                      header("location:surulerehalldecorators.php");
                        break;
                        
                         case 'halldecorators'.'badagry'.'Lagos':
                      header("location:badagryhalldecorators.php");
                        break;
                        
                          case 'halldecorators'.'epe'.'Lagos':
                      header("location:epehalldecorators.php");
                        break;

                          case 'halldecorators'.'lekki'.'Lagos':                
                      header("location:lekkihalldecorators.php");                   
                        break;

                        case 'halldecorators'.'maryland'.'Lagos':
                      header("location:marylandhalldecorators.php");                    break;

                        case 'halldecorators'.'victoria'.'Lagos':
                      header("location:victoriahalldecorators.php");                        break;

                        case 'halldecorators'.'apapa'.'Lagos':
                      header("location:apapahalldecorators.php");                       break;

                        case 'halldecorators'.'ikotun'.'Lagos':
                      header("location:ikotunhalldecorators.php");                        break;

                        case 'halldecorators'.'agege'.'Lagos':
                      header("location:agegehalldecorators.php");                       break;

                        case 'halldecorators'.'iyanaipaja'.'Lagos':
                      header("location:iyanaipajahalldecorators.php");                        break;

                        case 'halldecorators'.'berger'.'Lagos':
                      header("location:bergerhalldecorators.php");                        break;

                        case 'halldecorators'.'egbeda'.'Lagos':
                      header("location:egbedahalldecorators.php");                        break;
                        #END HALL DECORATORS LOCATION


                        #BEGINING Djs LOCATION
                        case 'dj'.'ikeja'.'Lagos':
                      header("location:ikejadj.php");
                        break;
                        
                         case 'dj'.'mushin'.'Lagos':
                      header("location:mushindj.php");
                        break;
                        
                        case 'dj'.'ikorodu'.'Lagos':
                      header("location:ikorodudj.php");
                        break;
                        
                        case 'dj'.'oshodi'.'Lagos':
                      header("location:oshodidj.php");
                        break;
                        
                        case 'dj'.'abuleegba'.'Lagos':
                      header("location:abuleegbadj.php");
                        break;
                        
                        case 'dj'.'ijaye'.'Lagos':
                      header("location:ijayedj.php");
                        break;
                        
                        case 'dj'.'shomolu'.'Lagos':
                      header("location:shomoludj.php");
                        break;
                        
                        case 'dj'.'surulere'.'Lagos':
                      header("location:suruleredj.php");
                        break;
                        
                        case 'dj'.'badagry'.'Lagos':
                      header("location:badagrydj.php");
                        break;
                        
                        case 'dj'.'epe'.'Lagos':
                      header("location:epedj.php");
                        break;

                            case 'dj'.'lekki'.'Lagos':                
                      header("location:lekkidj.php");                   
                        break;

                        case 'dj'.'maryland'.'Lagos':
                      header("location:marylanddj.php");                    
                        break;

                        case 'dj'.'victoria'.'Lagos':
                      header("location:victoriadj.php");                        break;

                        case 'dj'.'apapa'.'Lagos':
                      header("location:apapadj.php");                       break;

                        case 'dj'.'ikotun'.'Lagos':
                      header("location:ikotundj.php");                        break;

                        case 'dj'.'agege'.'Lagos':
                      header("location:agegedj.php");                       
                      break;

                        case 'dj'.'iyanaipaja'.'Lagos':
                      header("location:iyanaipajadj.php");                        break;

                        case 'dj'.'berger'.'Lagos':
                      header("location:bergerdj.php");                        break;

                        case 'dj'.'egbeda'.'Lagos':
                      header("location:egbedadj.php");                        break;
                        #END Djs LOCATION
                      

                        #BEGINING MARKUP LOCATION
                        case 'markup'.'ikeja'.'Lagos':
                      header("location:ikejamarkup.php");
                        break;
                        
                         case 'markup'.'mushin'.'Lagos':
                      header("location:mushinmarkup.php");
                        break;
                        
                        case 'markup'.'abuleegba'.'Lagos':
                      header("location:abuleegbamarkup.php");
                        break;
                        
                        case 'markup'.'ijaye'.'Lagos':
                      header("location:ijayemarkup.php");
                        break;
                        
                          case 'markup'.'ikorodu'.'Lagos':
                      header("location:ikorodumarkup.php");
                        break;
                        
                          case 'markup'.'oshodi'.'Lagos':
                      header("location:oshodimarkup.php");
                        break;
                        
                          case 'markup'.'shomolu'.'Lagos':
                      header("location:shomolumarkup.php");
                        break;
                        
                          case 'markup'.'surulere'.'Lagos':
                      header("location:suruleremarkup.php");
                        break;
                        
                        
                        case 'markup'.'badagry'.'Lagos':
                      header("location:badagrymarkup.php");
                        break;
                        
                        case 'markup'.'epe'.'Lagos':
                      header("location:epemarkup.php");
                        break;


                        case 'markup'.'lekki'.'Lagos':                
                      header("location:lekkimarkup.php");                   
                        break;

                        case 'markup'.'maryland'.'Lagos':
                      header("location:marylandmarkup.php");                    
                      break;

                        case 'markup'.'victoria'.'Lagos':
                      header("location:victoriamarkup.php");                        break;

                        case 'markup'.'apapa'.'Lagos':
                      header("location:apapamarkup.php");                       break;

                        case 'markup'.'ikotun'.'Lagos':
                      header("location:ikotunmarkup.php");                        break;

                        case 'markup'.'agege'.'Lagos':
                      header("location:agegemarkup.php");                       break;

                        case 'markup'.'iyanaipaja'.'Lagos':
                      header("location:iyanaipajamarkup.php");                        break;

                        case 'markup'.'berger'.'Lagos':
                      header("location:bergermarkup.php");                        break;

                        case 'markup'.'egbeda'.'Lagos':
                      header("location:egbedamarkup.php");                        break;
                        #END MARKUP LOCATION

                               #LAGOS ENDING








                        #OSUN STATE BEGINING
                      # BEGINING PHOTGRAPHER LOCATION

                                              case 'photographer'.'atakumosa'.'Osun':
                      header("location:atakumosaphotogra.php");
                        break;
                        
                         case 'photographer'.'ayeda-ade'.'Osun':
                      header("location:ayeda-adephotogra.php");
                        break;
                        
                        case 'photographer'.'ayedire'.'Osun':
                      header("location:ayedirephotogra.php");
                        break;
                        
                         case 'photographer'.'boluwaduro'.'Osun':
                      header("location:boluwadurophotogra.php");
                        break;

                        case 'photographer'.'boripe'.'Osun':                
                      header("location:boripephotogra.php");                     
                        break;
                        
                          case 'photographer'.'ede'.'Osun':                
                      header("location:edephotogra.php");                     
                        break;
                        
                          case 'photographer'.'egbedore'.'Osun':                
                      header("location:egbedorephotogra.php");                     
                        break;
                        
                          case 'photographer'.'ejigbo'.'Osun':                
                      header("location:ejigbophotogra.php");                     
                        break;
                        
                          case 'photographer'.'ife'.'Osun':                
                      header("location:ifephotogra.php");                     
                        break;
                        
                        case 'photographer'.'ifedayo'.'Osun':                
                      header("location:ifedayophotogra.php");                     
                        break;
                        
                          case 'photographer'.'ifelodun'.'Osun':                
                      header("location:ifelodunphotogra.php");                     
                        break;

                        case 'photographer'.'ilesha'.'Osun':
                      header("location:ileshaphotogra.php");                    break;

                        case 'photographer'.'ila-orangun'.'Osun':
                      header("location:ila-orangunphotogra.php");                        break;

                        case 'photographer'.'irepodun'.'Osun':
                      header("location:irepodunphotogra.php");                       break;

                        case 'photographer'.'irewole'.'Osun':
                      header("location:irewolephotogra.php");                        break;

                        case 'photographer'.'isokan'.'Osun':
                      header("location:isokanphotogra.php");                       break;

                        case 'photographer'.'iwo'.'Osun':
                      header("location:iwophotogra.php");                        break;

                        case 'photographer'.'obokun'.'Osun':
                      header("location:obokunphotogra.php");                        break;

                        case 'photographer'.'odo-otin'.'Osun':
                      header("location:odo-otinphotogra.php");                        break;

                        case 'photographer'.'ola-oluwa'.'Osun':
                      header("location:ola-oluwaphotogra.php");                        break;

                        case 'photographer'.'olorunda'.'Osun':
                      header("location:olorundaphotogra.php");                       break;

                        case 'photographer'.'oriade'.'Osun':
                      header("location:oriadephotogra.php");                        break;

                        case 'photographer'.'orolu'.'Osun':
                      header("location:oroluphotogra.php");                        break;

                        case 'photographer'.'osogbo'.'Osun':
                      header("location:osogbophotogra.php");                        break;

                        #END PHOTGRAPHER LOCATION



                        #BEGINING VEDIOGRAPHERS LOCATION
                        case 'vediographer'.'atakumosa'.'Osun':
                      header("location:atakumosavediographer.php");
                        break;
                        
                        
                         case 'vediographer'.'ayeda-ade'.'Osun':
                      header("location:ayeda-adevediographer.php");
                        break;
                        
                        case 'vediographer'.'ayedire'.'Osun':
                      header("location:ayedirevediographer.php");
                        break;
                        
                        case 'vediographer'.'boluwaduro'.'Osun':
                      header("location:boluwadurovediographer.php");
                        break;
                        
                        case 'vediographer'.'boripe'.'Osun':
                      header("location:boripevediographer.php");
                        break;
                        
                        case 'vediographer'.'ede'.'Osun':
                      header("location:edevediographer.php");
                        break;
                        
                         case 'vediographer'.'egbedore'.'Osun':
                      header("location:egbedorevediographer.php");
                        break;
                        
                         case 'vediographer'.'ejigbo'.'Osun':
                      header("location:ejigbovediographer.php");
                        break;

                          case 'vediographer'.'ife'.'Osun':                
                      header("location:ifevediographer.php");                   
                        break;
                        
                          case 'vediographer'.'ifedayo'.'Osun':                
                      header("location:ifedayovediographer.php");                   
                        break;
                        
                          case 'vediographer'.'ifelodun'.'Osun':                
                      header("location:ifelodunvediographer.php");                   
                        break;

                        case 'vediographer'.'ilesha'.'Osun':
                      header("location:ileshavediographer.php");                    break;

                        case 'vediographer'.'ila-orangun'.'Osun':
                      header("location:ila-orangunvediographer.php");                        break;

                        case 'vediographer'.'irepodun'.'Osun':
                      header("location:irepodunvediographer.php");                       break;

                        case 'vediographer'.'irewole'.'Osun':
                      header("location:irewolevediographer.php");                        break;

                        case 'vediographer'.'isokan'.'Osun':
                      header("location:isokanvediographer.php");                       break;

                        case 'vediographer'.'iwo'.'Osun':
                      header("location:iwovediographer.php");                        break;

                        case 'vediographer'.'obokun'.'Osun':
                      header("location:obokunvediographer.php");                        break;

                        case 'vediographer'.'odo-otin'.'Osun':
                      header("location:odo-otinvediographer.php");                        break;


                        case 'vediographer'.'ola-oluwa'.'Osun':
                      header("location:ola-oluwavediographer.php");                        break;

                        case 'vediographer'.'olorunda'.'Osun':
                      header("location:olorundavediographer.php");                       break;

                        case 'vediographer'.'oriade'.'Osun':
                      header("location:oriadevediographer.php");                        break;

                        case 'vediographer'.'orolu'.'Osun':
                      header("location:oroluvediographer.php");                        break;

                        case 'vediographer'.'osogbo'.'Osun':
                      header("location:osogbovediographer.php");                        break;

                        #END VEDIOGRAPHERS LOCATION


                        #BEGINING CATERERS LOCATION
                        case 'caterers'.'atakumosa'.'Osun':
                      header("location:atakumosacaterers.php");
                        break;
                        
                         case 'caterers'.'ayeda-ade'.'Osun':
                      header("location:ayeda-adecaterers.php");
                        break;
                        
                         case 'caterers'.'ayedire'.'Osun':
                      header("location:ayedirecaterers.php");
                        break;
                        
                          case 'caterers'.'ifedayo'.'Osun':
                      header("location:ifedayocaterers.php");
                        break;
                        
                          case 'caterers'.'ifelodun'.'Osun':
                      header("location:ifeloduncaterers.php");
                        break;
                        
                         case 'caterers'.'boluwaduro'.'Osun':
                      header("location:boluwadurocaterers.php");
                        break;
                        
                         case 'caterers'.'boripe'.'Osun':
                      header("location:boripecaterers.php");
                        break;
                        
                         case 'caterers'.'ede'.'Osun':
                      header("location:edecaterers.php");
                        break;
                        
                          case 'caterers'.'ejigbo'.'Osun':
                      header("location:ejigbocaterers.php");
                        break;
                        
                           case 'caterers'.'egbedore'.'Osun':
                      header("location:egbedorecaterers.php");
                        break;

                          case 'caterers'.'ife'.'Osun':                
                      header("location:ifecaterers.php");                   
                        break;

                        case 'caterers'.'ilesha'.'Osun':
                      header("location:ileshacaterers.php");                    break;

                        case 'caterers'.'ila-orangun'.'Osun':
                      header("location:ila-oranguncaterers.php");                        break;

                        case 'caterers'.'irepodun'.'Osun':
                      header("location:irepoduncaterers.php");                       break;

                        case 'caterers'.'irewole'.'Osun':
                      header("location:irewolecaterers.php");                        break;

                        case 'caterers'.'isokan'.'Osun':
                      header("location:isokancaterers.php");                       break;
                     

                        case 'caterers'.'iwo'.'Osun':
                      header("location:iwocaterers.php");                        break;

                        case 'caterers'.'obokun'.'Osun':
                      header("location:obokuncaterers.php");                        break;

                        case 'caterers'.'odo-otin'.'Osun':
                      header("location:odo-otincaterers.php");                        break;


                        case 'caterers'.'ola-oluwa'.'Osun':
                      header("location:ola-oluwacaterers.php");                        break;

                        case 'caterers'.'olorunda'.'Osun':
                      header("location:olorundacaterers.php");                       break;
                     

                        case 'caterers'.'oriade'.'Osun':
                      header("location:oriadecaterers.php");                        break;

                        case 'caterers'.'orolu'.'Osun':
                      header("location:orolucaterers.php");                        break;

                        case 'caterers'.'osogbo'.'Osun':
                      header("location:osogbocaterers.php");                        break;

                        #END CATERERS LOCATION


                        #BEGINING WINESELLER LOCATION
                        case 'wineseller'.'atakumosa'.'Osun':
                      header("location:atakumosawineseller.php");
                        break;
                        
                        case 'wineseller'.'ayeda-ade'.'Osun':
                      header("location:ayeda-adewineseller.php");
                        break;
                        
                         case 'wineseller'.'ayedire'.'Osun':
                      header("location:ayedirewineseller.php");
                        break;
                        
                         case 'wineseller'.'boluwaduro'.'Osun':
                      header("location:boluwadurowineseller.php");
                        break;
                        
                         case 'wineseller'.'boripe'.'Osun':
                      header("location:boripewineseller.php");
                        break;
                        
                           case 'wineseller'.'ifedayo'.'Osun':
                      header("location:ifedayowineseller.php");
                        break;
                        
                           case 'wineseller'.'ifelodun'.'Osun':
                      header("location:ifelodunwineseller.php");
                        break;
                        
                         case 'wineseller'.'ede'.'Osun':
                      header("location:edewineseller.php");
                        break;
                        
                         case 'wineseller'.'ejigbo'.'Osun':
                      header("location:ejigbowineseller.php");
                        break;
                        
                         case 'wineseller'.'egbedore'.'Osun':
                      header("location:egbedorewineseller.php");
                        break;

                            case 'wineseller'.'ife'.'Osun':                
                      header("location:ifewineseller.php");                   
                        break;

                        case 'wineseller'.'ilesha'.'Osun':
                      header("location:ileshawineseller.php");                    break;

                        case 'wineseller'.'ila-orangun'.'Osun':
                      header("location:ila-orangunwineseller.php");                        break;

                        case 'wineseller'.'irepodun'.'Osun':
                      header("location:irepodunwineseller.php");                       break;

                        case 'wineseller'.'irewole'.'Osun':
                      header("location:irewolewineseller.php");                        break;

                        case 'wineseller'.'isokan'.'Osun':
                      header("location:isokanwineseller.php");                       break;

                        case 'wineseller'.'iwo'.'Osun':
                      header("location:iwowineseller.php");                        break;

                        case 'wineseller'.'obokun'.'Osun':
                      header("location:obokunwineseller.php");                        break;

                        case 'wineseller'.'odo-otin'.'Osun':
                      header("location:odo-otinwineseller.php");                        break;

                      case 'wineseller'.'ola-oluwa'.'Osun':
                      header("locationola-oluwaewineseller.php");                        break;

                        case 'wineseller'.'olorunda'.'Osun':
                      header("location:olorundawineseller.php");                       break;

                        case 'wineseller'.'oriade'.'Osun':
                      header("location:oriadewineseller.php");                        break;

                        case 'wineseller'.'orolu'.'Osun':
                      header("location:oroluwineseller.php");                        break;

                        case 'wineseller'.'osogbo'.'Osun':
                      header("location:osogbowineseller.php");                        break;

                        #END WINESELLERLOCATION


                      #BEGINING OF ENTERTAINER LOCATION
                        case 'entertainer'.'atakumosa'.'Osun':
                        header("location:atakumosaentertainer.php");
                        break;
                        
                        case 'entertainer'.'ayeda-ade'.'Osun':
                        header("location:ayeda-adeentertainer.php");
                        break;
                        
                        case 'entertainer'.'ayedire'.'Osun':
                        header("location:ayedireentertainer.php");
                        break;
                        
                        case 'entertainer'.'boluwaduro'.'Osun':
                        header("location:boluwaduroentertainer.php");
                        break;
                        
                        case 'entertainer'.'boripe'.'Osun':
                        header("location:boripeentertainer.php");
                        break;
                        
                        case 'entertainer'.'ede'.'Osun':
                        header("location:edeentertainer.php");
                        break;
                        
                        case 'entertainer'.'ifedayo'.'Osun':
                        header("location:ifedayoentertainer.php");
                        break;
                        
                        
                        case 'entertainer'.'ifelodun'.'Osun':
                        header("location:ifelodunentertainer.php");
                        break;
                        
                        case 'entertainer'.'ejigbo'.'Osun':
                        header("location:ejigboentertainer.php");
                        break;
                        
                        case 'entertainer'.'egbedore'.'Osun':
                        header("location:egbedoreentertainer.php");
                        break;

                            case 'entertainer'.'ife'.'Osun':               
                      header("location:ifeentertainer.php");                    
                        break;

                        case 'entertainer'.'ilesha'.'Osun':
                      header("location:ileshaentertainer.php");                   break;

                        case 'entertainer'.'ila-orangun'.'Osun':
                      header("location:ila-orangunentertainer.php");                       break;

                        case 'entertainer'.'irepodun'.'Osun':
                      header("location:irepodunentertainer.php");                        break;

                        case 'entertainer'.'irewole'.'Osun':
                      header("location:irewoleentertainer.php");                       break;

                        case 'entertainer'.'isokan'.'Osun':
                      header("location:isokanentertainer.php");                        break;

                        case 'entertainer'.'iwo'.'Osun':
                      header("location:iwoentertainer.php");                       break;

                        case 'entertainer'.'obokun'.'Osun':
                      header("location:obokunentertainer.php");                       break;

                        case 'entertainer'.'odo-otin'.'Osun':
                      header("location:odo-otinentertainer.php");                       break;

                        case 'entertainer'.'ola-oluwa'.'Osun':
                      header("location:ola-oluwaentertainer.php");                       break;

                        case 'entertainer'.'olorunda'.'Osun':
                      header("location:olorundaentertainer.php");                        break;

                        case 'entertainer'.'oriade'.'Osun':
                      header("location:oriadeentertainer.php");                       break;

                        case 'entertainer'.'orolu'.'Osun':
                      header("location:oroluentertainer.php");                       break;

                        case 'entertainer'.'osogbo'.'Osun':
                      header("location:osogboentertainer.php");                       break;
                        #END ENTERTAINER / MC LOCATION


                        #BEGINING MUSIC ARTIST LOCATION
                        case 'music'.'atakumosa'.'Osun':
                      header("location:atakumosamusicband.php");
                        break;
                        
                        case 'music'.'ayeda-ade'.'Osun':
                      header("location:ayeda-ademusicband.php");
                        break;
                        
                        case 'music'.'ayedire'.'Osun':
                      header("location:ayediremusicband.php");
                        break;
                        
                        case 'music'.'boluwaduro'.'Osun':
                      header("location:boluwaduromusicband.php");
                        break;
                        
                        case 'music'.'ifedayo'.'Osun':
                      header("location:ifedayomusicband.php");
                        break;
                        
                        case 'music'.'ifelodun'.'Osun':
                      header("location:ifelodunmusicband.php");
                        break;
                        
                        
                        case 'music'.'boripe'.'Osun':
                      header("location:boripemusicband.php");
                        break;
                        
                        case 'music'.'ede'.'Osun':
                      header("location:edemusicband.php");
                        break;
                        
                          case 'music'.'ejigbo'.'Osun':
                      header("location:ejigbomusicband.php");
                        break;
                        
                           case 'music'.'egbedore'.'Osun':
                      header("location:egbedoremusicband.php");
                        break;

                        case 'music'.'ife'.'Osun':               
                      header("location:ifemusicband.php");                    
                        break;

                        case 'music'.'ilesha'.'Osun':
                      header("location:ileshamusicband.php");                   break;

                        case 'music'.'ila-orangun'.'Osun':
                      header("location:ila-orangunmusicband.php");                       break;

                        case 'music'.'irepodun'.'Osun':
                      header("location:irepodunmusicband.php");                        break;

                        case 'music'.'irewole'.'Osun':
                      header("location:irewolemusicband.php");                       break;

                        case 'music'.'isokan'.'Osun':
                      header("location:isokanmusicband.php");                        break;

                        case 'music'.'iwo'.'Osun':
                      header("location:iwomusicband.php");                       break;

                        case 'music'.'obokun'.'Osun':
                      header("location:obokunmusicband.php");                       break;

                        case 'music'.'odo-otin'.'Osun':
                      header("location:odo-otinmusicband.php");                       break;

                        case 'music'.'ola-oluwa'.'Osun':
                      header("location:ola-oluwamusicband.php");                       break;

                        case 'music'.'olorunda'.'Osun':
                      header("location:olorundamusicband.php");                        break;

                        case 'music'.'oriade'.'Osun':
                      header("location:oriademusicband.php");                       break;

                        case 'music'.'orolu'.'Osun':
                      header("location:orolumusicband.php");                       break;

                        case 'music'.'osogbo'.'Osun':
                      header("location:osogbomusicband.php");                       break;
                        #END MUSIC ARTIST LOCATION


                      #BEGINING HALL DECORATORS LOCATION
                        case 'halldecorators'.'atakumosa'.'Osun':
                      header("location:atakumosahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'ayeda-ade'.'Osun':
                      header("location:ayeda-adehalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'ayedire'.'Osun':
                      header("location:ayedirehalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'ifedayo'.'Osun':
                      header("location:ifedayohalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'ifelodun'.'Osun':
                      header("location:ifelodunhalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'boluwaduro'.'Osun':
                      header("location:boluwadurohalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'boripe'.'Osun':
                      header("location:boripehalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'ede'.'Osun':
                      header("location:edehalldecorators.php");
                        break;
                        
                         case 'halldecorators'.'ejigbo'.'Osun':
                      header("location:ejigbohalldecorators.php");
                        break;
                        
                          case 'halldecorators'.'egbedore'.'Osun':
                      header("location:egbedorehalldecorators.php");
                        break;

                          case 'halldecorators'.'ife'.'Osun':                
                      header("location:ifehalldecorators.php");                   
                        break;

                        case 'halldecorators'.'ilesha'.'Osun':
                      header("location:ileshahalldecorators.php");                    break;

                        case 'halldecorators'.'ila-orangun'.'Osun':
                      header("location:ila-orangunhalldecorators.php");                        break;

                        case 'halldecorators'.'irepodun'.'Osun':
                      header("location:irepodunhalldecorators.php");                       break;

                        case 'halldecorators'.'irewole'.'Osun':
                      header("location:irewolehalldecorators.php");                        break;

                        case 'halldecorators'.'isokan'.'Osun':
                      header("location:isokanhalldecorators.php");                       break;

                        case 'halldecorators'.'iwo'.'Osun':
                      header("location:iwohalldecorators.php");                        break;

                        case 'halldecorators'.'obokun'.'Osun':
                      header("location:obokunhalldecorators.php");                        break;

                        case 'halldecorators'.'odo-otin'.'Osun':
                      header("location:odo-otinhalldecorators.php");                        break;

                       case 'halldecorators'.'ola-oluwa'.'Osun':
                      header("location:ola-oluwahalldecorators.php");                        break;

                        case 'halldecorators'.'olorunda'.'Osun':
                      header("location:olorundahalldecorators.php");                       break;

                        case 'halldecorators'.'oriade'.'Osun':
                      header("location:oriadehalldecorators.php");                        break;

                        case 'halldecorators'.'orolu'.'Osun':
                      header("location:oroluhalldecorators.php");                        break;

                        case 'halldecorators'.'osogbo'.'Osun':
                      header("location:osogbohalldecorators.php");                        break;
                        #END HALL DECORATORS LOCATION


                        #BEGINING Djs LOCATION
                        case 'dj'.'atakumosa'.'Osun':
                      header("location:atakumosadj.php");
                        break;
                        
                         case 'dj'.'ayeda-ade'.'Osun':
                      header("location:ayeda-adedj.php");
                        break;
                        
                        case 'dj'.'ayedire'.'Osun':
                      header("location:ayediredj.php");
                        break;
                        
                        case 'dj'.'boluwaduro'.'Osun':
                      header("location:boluwadurodj.php");
                        break;
                        
                        case 'dj'.'ifedayo'.'Osun':
                      header("location:ifedayodj.php");
                        break;
                        
                        case 'dj'.'ifelodun'.'Osun':
                      header("location:ifelodundj.php");
                        break;
                        
                        case 'dj'.'boripe'.'Osun':
                      header("location:boripedj.php");
                        break;
                        
                        case 'dj'.'ede'.'Osun':
                      header("location:ededj.php");
                        break;
                        
                        case 'dj'.'ejigbo'.'Osun':
                      header("location:ejigbodj.php");
                        break;
                        
                        case 'dj'.'egbedore'.'Osun':
                      header("location:egbedoredj.php");
                        break;

                            case 'dj'.'ife'.'Osun':                
                      header("location:ifedj.php");                   
                        break;

                        case 'dj'.'ilesha'.'Osun':
                      header("location:ileshadj.php");                    
                        break;

                        case 'dj'.'ila-orangun'.'Osun':
                      header("location:ila-orangundj.php");                        break;

                        case 'dj'.'irepodun'.'Osun':
                      header("location:irepodundj.php");                       break;

                        case 'dj'.'irewole'.'Osun':
                      header("location:irewoledj.php");                        break;

                        case 'dj'.'isokan'.'Osun':
                      header("location:isokandj.php");                       
                      break;

                        case 'dj'.'iwo'.'Osun':
                      header("location:iwodj.php");                        break;

                        case 'dj'.'obokun'.'Osun':
                      header("location:obokundj.php");                        break;

                        case 'dj'.'odo-otin'.'Osun':
                      header("location:odo-otindj.php");                        break;



                        case 'dj'.'ola-oluwa'.'Osun':
                      header("location:ola-oluwadj.php");                        break;

                        case 'dj'.'olorunda'.'Osun':
                      header("location:olorundadj.php");                       
                      break;

                        case 'dj'.'oriade'.'Osun':
                      header("location:oriadedj.php");                        break;

                        case 'dj'.'orolu'.'Osun':
                      header("location:oroludj.php");                        break;

                        case 'dj'.'osogbo'.'Osun':
                      header("location:osogbodj.php");                        break;
                        #END Djs LOCATION
                      

                        #BEGINING MARKUP LOCATION
                        case 'markup'.'atakumosa'.'Osun':
                      header("location:atakumosamarkup.php");
                        break;
                        
                         case 'markup'.'ayeda-ade'.'Osun':
                      header("location:ayeda-ademarkup.php");
                        break;
                        
                        case 'markup'.'ifedayo'.'Osun':
                      header("location:ifedayomarkup.php");
                        break;
                        
                        case 'markup'.'ifelodun'.'Osun':
                      header("location:ifelodunmarkup.php");
                        break;
                        
                          case 'markup'.'ayedire'.'Osun':
                      header("location:ayediremarkup.php");
                        break;
                        
                          case 'markup'.'boluwaduro'.'Osun':
                      header("location:boluwaduromarkup.php");
                        break;
                        
                          case 'markup'.'boripe'.'Osun':
                      header("location:boripemarkup.php");
                        break;
                        
                          case 'markup'.'ede'.'Osun':
                      header("location:edemarkup.php");
                        break;
                        
                        
                        case 'markup'.'ejigbo'.'Osun':
                      header("location:ejigbomarkup.php");
                        break;
                        
                        case 'markup'.'egbedore'.'Osun':
                      header("location:egbedoremarkup.php");
                        break;


                        case 'markup'.'ife'.'Osun':                
                      header("location:ifemarkup.php");                   
                        break;

                        case 'markup'.'ilesha'.'Osun':
                      header("location:ileshamarkup.php");                    
                      break;

                        case 'markup'.'ila-orangun'.'Osun':
                      header("location:ila-orangunmarkup.php");                        break;

                        case 'markup'.'irepodun'.'Osun':
                      header("location:irepodunmarkup.php");                       break;

                        case 'markup'.'irewole'.'Osun':
                      header("location:irewolemarkup.php");                        break;

                        case 'markup'.'isokan'.'Osun':
                      header("location:isokanmarkup.php");                       break;

                        case 'markup'.'iwo'.'Osun':
                      header("location:iwomarkup.php");                        break;

                        case 'markup'.'obokun'.'Osun':
                      header("location:obokunmarkup.php");                        break;

                        case 'markup'.'odo-otin'.'Osun':
                      header("location:odo-otinmarkup.php");                        break;

                        case 'markup'.'ola-oluwa'.'Osun':
                      header("location:ola-oluwamarkup.php");                        break;

                        case 'markup'.'olorunda'.'Osun':
                      header("location:olorundamarkup.php");                       break;

                        case 'markup'.'oriade'.'Osun':
                      header("location:oriademarkup.php");                        break;

                        case 'markup'.'orolu'.'Osun':
                      header("location:orolumarkup.php");                        break;

                        case 'markup'.'osogbo'.'Osun':
                      header("location:osogbomarkup.php");                        break;
                        #END MARKUP LOCATION
                               #OSUN STATE ENDING






                      #OYO STATE BEGINING

                                              case 'photographer'.'afijio'.'Oyo':
                      header("location:afijiophotogra.php");
                        break;
                        
                         case 'photographer'.'akinyele'.'Oyo':
                      header("location:akinyelephotogra.php");
                        break;
                        
                        case 'photographer'.'atiba'.'Oyo':
                      header("location:atibaphotogra.php");
                        break;
                        
                         case 'photographer'.'atigbo'.'Oyo':
                      header("location:atigbophotogra.php");
                        break;

                        case 'photographer'.'egbeda-oyo'.'Oyo':                
                      header("location:egbeda-oyophotogra.php");                     
                        break;
                        
                          case 'photographer'.'ibadan'.'Oyo':                
                      header("location:ibadanphotogra.php");                     
                        break;
                        
                          case 'photographer'.'ibarapa'.'Oyo':                
                      header("location:ibarapaphotogra.php");                     
                        break;
                        
                          case 'photographer'.'ido'.'Oyo':                
                      header("location:idophotogra.php");                     
                        break;
                        
                          case 'photographer'.'ifedapo'.'Oyo':                
                      header("location:ifedapophotogra.php");                     
                        break;
                        
                        case 'photographer'.'ifeloju'.'Oyo':                
                      header("location:ifelojuphotogra.php");                     
                        break;
                        
                          case 'photographer'.'irepo'.'Oyo':                
                      header("location:irepophotogra.php");                     
                        break;

                        case 'photographer'.'iseyin'.'Oyo':
                      header("location:iseyinphotogra.php");                    break;

                        case 'photographer'.'itesiwaju'.'Oyo':
                      header("location:itesiwajuphotogra.php");                        break;

                        case 'photographer'.'iwajowa'.'Oyo':
                      header("location:iwajowaphotogra.php");                       break;

                        case 'photographer'.'iwajowa-olorunsogo'.'Oyo':
                      header("location:iwajowa-olorunsogophotogra.php");                        break;

                        case 'photographer'.'kajola'.'Oyo':
                      header("location:kajolaphotogra.php");                       break;

                        case 'photographer'.'lagelu'.'Oyo':
                      header("location:lageluphotogra.php");                        break;

                        case 'photographer'.'ogbomoso'.'Oyo':
                      header("location:ogbomosophotogra.php");                        break;

                        case 'photographer'.'ogo-oluwa'.'Oyo':
                      header("location:ogo-oluwaphotogra.php");                        break;

                        case 'photographer'.'oluyole'.'Oyo':
                      header("location:oluyolephotogra.php");                        break;

                        case 'photographer'.'ona-ara'.'Oyo':
                      header("location:ona-araphotogra.php");                       break;

                        case 'photographer'.'ore-lope'.'Oyo':
                      header("location:ore-lopephotogra.php");                        break;

                        case 'photographer'.'orire'.'Oyo':
                      header("location:orirephotogra.php");                        break;

                        case 'photographer'.'oyo'.'Oyo':
                      header("location:oyophotogra.php");                        break;

                      case 'photographer'.'saki'.'Oyo':
                      header("location:sakiphotogra.php");                        break;

                        case 'photographer'.'surulere-oyo'.'Oyo':
                      header("location:surule-oyorephotogra.php");                        break;

                        #END PHOTGRAPHER LOCATION



                        #BEGINING VEDIOGRAPHERS LOCATION
                        case 'vediographer'.'afijio'.'Oyo':
                      header("location:afijiovediographer.php");
                        break;
                        
                        
                         case 'vediographer'.'akinyele'.'Oyo':
                      header("location:akinyelevediographer.php");
                        break;
                        
                        case 'vediographer'.'atiba'.'Oyo':
                      header("location:atibavediographer.php");
                        break;
                        
                        case 'vediographer'.'atigbo'.'Oyo':
                      header("location:atigbovediographer.php");
                        break;
                        
                        case 'vediographer'.'egbeda-oyo'.'Oyo':
                      header("location:egbeda-oyovediographer.php");
                        break;
                        
                        case 'vediographer'.'ibadan'.'Oyo':
                      header("location:ibadanvediographer.php");
                        break;
                        
                         case 'vediographer'.'ibarapa'.'Oyo':
                      header("location:ibarapavediographer.php");
                        break;
                        
                         case 'vediographer'.'ido'.'Oyo':
                      header("location:idovediographer.php");
                        break;

                          case 'vediographer'.'ifedapo'.'Oyo':                
                      header("location:ifedapovediographer.php");                   
                        break;
                        
                          case 'vediographer'.'ifeloju'.'Oyo':                
                      header("location:ifelojuvediographer.php");                   
                        break;
                        
                          case 'vediographer'.'irepo'.'Oyo':                
                      header("location:irepovediographer.php");                   
                        break;

                        case 'vediographer'.'iseyin'.'Oyo':
                      header("location:iseyinvediographer.php");                    break;

                        case 'vediographer'.'itesiwaju'.'Oyo':
                      header("location:itesiwajuvediographer.php");                        break;

                        case 'vediographer'.'iwajowa'.'Oyo':
                      header("location:iwajowavediographer.php");                       break;

                        case 'vediographer'.'iwajowa-olorunsogo'.'Oyo':
                      header("location:iwajowa-olorunsogovediographer.php");                        break;

                        case 'vediographer'.'kajola'.'Oyo':
                      header("location:kajolavediographer.php");                       break;

                        case 'vediographer'.'lagelu'.'Oyo':
                      header("location:lageluvediographer.php");                        break;

                        case 'vediographer'.'ogbomoso'.'Oyo':
                      header("location:ogbomosovediographer.php");                        break;

                        case 'vediographer'.'ogo-oluwa'.'Oyo':
                      header("location:ogo-oluwavediographer.php");                        break;


                        case 'vediographer'.'oluyole'.'Oyo':
                      header("location:oluyolevediographer.php");                        break;

                        case 'vediographer'.'ona-ara'.'Oyo':
                      header("location:ona-aravediographer.php");                       break;

                        case 'vediographer'.'ore-lope'.'Oyo':
                      header("location:ore-lopevediographer.php");                        break;

                        case 'vediographer'.'orire'.'Oyo':
                      header("location:orirevediographer.php");                        break;

                        case 'vediographer'.'oyo'.'Oyo':
                      header("location:oyovediographer.php");                        break;

                       case 'vediographer'.'saki'.'Oyo':
                      header("location:sakivediographer.php");                        break;

                        case 'vediographer'.'surulere-oyo'.'Oyo':
                      header("location:surulere-oyovediographer.php");                        break;

                        #END VEDIOGRAPHERS LOCATION


                        #BEGINING CATERERS LOCATION
                        case 'caterers'.'afijio'.'Oyo':
                      header("location:afijiocaterers.php");
                        break;
                        
                         case 'caterers'.'akinyele'.'Oyo':
                      header("location:akinyelecaterers.php");
                        break;
                        
                         case 'caterers'.'atiba'.'Oyo':
                      header("location:atibacaterers.php");
                        break;
                        
                          case 'caterers'.'ifeloju'.'Oyo':
                      header("location:ifelojucaterers.php");
                        break;
                        
                          case 'caterers'.'irepo'.'Oyo':
                      header("location:irepocaterers.php");
                        break;
                        
                         case 'caterers'.'atigbo'.'Oyo':
                      header("location:atigbocaterers.php");
                        break;
                        
                         case 'caterers'.'egbeda-oyo'.'Oyo':
                      header("location:egbeda-oyocaterers.php");
                        break;
                        
                         case 'caterers'.'ibadan'.'Oyo':
                      header("location:ibadancaterers.php");
                        break;
                        
                          case 'caterers'.'ido'.'Oyo':
                      header("location:idocaterers.php");
                        break;
                        
                           case 'caterers'.'ibarapa'.'Oyo':
                      header("location:ibarapacaterers.php");
                        break;

                          case 'caterers'.'ifedapo'.'Oyo':                
                      header("location:ifedapocaterers.php");                   
                        break;

                        case 'caterers'.'iseyin'.'Oyo':
                      header("location:iseyincaterers.php");                    break;

                        case 'caterers'.'itesiwaju'.'Oyo':
                      header("location:itesiwajucaterers.php");                        break;

                        case 'caterers'.'iwajowa'.'Oyo':
                      header("location:iwajowacaterers.php");                       break;

                        case 'caterers'.'iwajowa-olorunsogo'.'Oyo':
                      header("location:iwajowa-olorunsogocaterers.php");                        break;

                        case 'caterers'.'kajola'.'Oyo':
                      header("location:kajolacaterers.php");                       break;
                     

                        case 'caterers'.'lagelu'.'Oyo':
                      header("location:lagelucaterers.php");                        break;

                        case 'caterers'.'ogbomoso'.'Oyo':
                      header("location:ogbomosocaterers.php");                        break;

                        case 'caterers'.'ogo-oluwa'.'Oyo':
                      header("location:ogo-oluwacaterers.php");                        break;


                        case 'caterers'.'oluyole'.'Oyo':
                      header("location:oluyolecaterers.php");                        break;

                        case 'caterers'.'ona-ara'.'Oyo':
                      header("location:ona-aracaterers.php");                       break;
                     

                        case 'caterers'.'ore-lope'.'Oyo':
                      header("location:ore-lopecaterers.php");                        break;

                        case 'caterers'.'orire'.'Oyo':
                      header("location:orirecaterers.php");                        break;

                        case 'caterers'.'oyo'.'Oyo':
                      header("location:oyocaterers.php");                        break;

                        case 'caterers'.'saki'.'Oyo':
                      header("location:sakicaterers.php");                        break;

                        case 'caterers'.'surulere-oyo'.'Oyo':
                      header("location:surulere-oyocaterers.php");                        break;

                        #END CATERERS LOCATION


                        #BEGINING WINESELLER LOCATION
                        case 'wineseller'.'afijio'.'Oyo':
                      header("location:afijiowineseller.php");
                        break;
                        
                        case 'wineseller'.'akinyele'.'Oyo':
                      header("location:akinyelewineseller.php");
                        break;
                        
                         case 'wineseller'.'atiba'.'Oyo':
                      header("location:atibawineseller.php");
                        break;
                        
                         case 'wineseller'.'atigbo'.'Oyo':
                      header("location:atigbowineseller.php");
                        break;
                        
                         case 'wineseller'.'egbeda-oyo'.'Oyo':
                      header("location:egbeda-oyowineseller.php");
                        break;
                        
                           case 'wineseller'.'ifeloju'.'Oyo':
                      header("location:ifelojuwineseller.php");
                        break;
                        
                           case 'wineseller'.'irepo'.'Oyo':
                      header("location:irepowineseller.php");
                        break;
                        
                         case 'wineseller'.'ibadan'.'Oyo':
                      header("location:ibadanwineseller.php");
                        break;
                        
                         case 'wineseller'.'ido'.'Oyo':
                      header("location:idowineseller.php");
                        break;
                        
                         case 'wineseller'.'ibarapa'.'Oyo':
                      header("location:ibarapawineseller.php");
                        break;

                            case 'wineseller'.'ifedapo'.'Oyo':                
                      header("location:ifedapowineseller.php");                   
                        break;

                        case 'wineseller'.'iseyin'.'Oyo':
                      header("location:iseyinwineseller.php");                    break;

                        case 'wineseller'.'itesiwaju'.'Oyo':
                      header("location:itesiwajuwineseller.php");                        break;

                        case 'wineseller'.'iwajowa'.'Oyo':
                      header("location:iwajowawineseller.php");                       break;

                        case 'wineseller'.'iwajowa-olorunsogo'.'Oyo':
                      header("location:iwajowa-olorunsogowineseller.php");                        break;

                        case 'wineseller'.'kajola'.'Oyo':
                      header("location:kajolawineseller.php");                       break;

                        case 'wineseller'.'lagelu'.'Oyo':
                      header("location:lageluwineseller.php");                        break;

                        case 'wineseller'.'ogbomoso'.'Oyo':
                      header("location:ogbomosowineseller.php");                        break;

                        case 'wineseller'.'ogo-oluwa'.'Oyo':
                      header("location:ogo-oluwawineseller.php");                        break;

                      case 'wineseller'.'oluyole'.'Oyo':
                      header("locationoluyoleewineseller.php");                        break;

                        case 'wineseller'.'ona-ara'.'Oyo':
                      header("location:ona-arawineseller.php");                       break;

                        case 'wineseller'.'ore-lope'.'Oyo':
                      header("location:ore-lopewineseller.php");                        break;

                        case 'wineseller'.'orire'.'Oyo':
                      header("location:orirewineseller.php");                        break;

                        case 'wineseller'.'oyo'.'Oyo':
                      header("location:oyowineseller.php");                        break;

                      case 'wineseller'.'saki'.'Oyo':
                      header("location:sakiwineseller.php");                        break;

                        case 'wineseller'.'surulere-oyo'.'Oyo':
                      header("location:surulere-oyowineseller.php");                        break;

                        #END WINESELLER LOCATION


                      #BEGINING OF ENTERTAINER LOCATION
                        case 'entertainer'.'afijio'.'Oyo':
                        header("location:afijioentertainer.php");
                        break;
                        
                        case 'entertainer'.'akinyele'.'Oyo':
                        header("location:akinyeleentertainer.php");
                        break;
                        
                        case 'entertainer'.'atiba'.'Oyo':
                        header("location:atibaentertainer.php");
                        break;
                        
                        case 'entertainer'.'atigbo'.'Oyo':
                        header("location:atigboentertainer.php");
                        break;
                        
                        case 'entertainer'.'egbeda-oyo'.'Oyo':
                        header("location:egbeda-oyoentertainer.php");
                        break;
                        
                        case 'entertainer'.'ibadan'.'Oyo':
                        header("location:ibadanentertainer.php");
                        break;
                        
                        case 'entertainer'.'ifeloju'.'Oyo':
                        header("location:ifelojuentertainer.php");
                        break;
                        
                        
                        case 'entertainer'.'irepo'.'Oyo':
                        header("location:irepoentertainer.php");
                        break;
                        
                        case 'entertainer'.'ido'.'Oyo':
                        header("location:idoentertainer.php");
                        break;
                        
                        case 'entertainer'.'ibarapa'.'Oyo':
                        header("location:ibarapaentertainer.php");
                        break;

                            case 'entertainer'.'ifedapo'.'Oyo':               
                      header("location:ifedapoentertainer.php");                    
                        break;

                        case 'entertainer'.'iseyin'.'Oyo':
                      header("location:iseyinentertainer.php");                   break;

                        case 'entertainer'.'itesiwaju'.'Oyo':
                      header("location:itesiwajuentertainer.php");                       break;

                        case 'entertainer'.'iwajowa'.'Oyo':
                      header("location:iwajowaentertainer.php");                        break;

                        case 'entertainer'.'iwajowa-olorunsogo'.'Oyo':
                      header("location:iwajowa-olorunsogoentertainer.php");                       break;

                        case 'entertainer'.'kajola'.'Oyo':
                      header("location:kajolaentertainer.php");                        break;

                        case 'entertainer'.'lagelu'.'Oyo':
                      header("location:lageluentertainer.php");                       break;

                        case 'entertainer'.'ogbomoso'.'Oyo':
                      header("location:ogbomosoentertainer.php");                       break;

                        case 'entertainer'.'ogo-oluwa'.'Oyo':
                      header("location:ogo-oluwaentertainer.php");                       break;

                        case 'entertainer'.'oluyole'.'Oyo':
                      header("location:oluyoleentertainer.php");                       break;

                        case 'entertainer'.'ona-ara'.'Oyo':
                      header("location:ona-araentertainer.php");                        break;

                        case 'entertainer'.'ore-lope'.'Oyo':
                      header("location:ore-lopeentertainer.php");                       break;

                        case 'entertainer'.'orire'.'Oyo':
                      header("location:orireentertainer.php");                       break;

                        case 'entertainer'.'oyo'.'Oyo':
                      header("location:oyoentertainer.php");                       break;

                       case 'entertainer'.'saki'.'Oyo':
                      header("location:sakientertainer.php");                       break;

                        case 'entertainer'.'surulere-oyo'.'Oyo':
                      header("location:surulere-oyoentertainer.php");                       break;
                        #END ENTERTAINER / MC LOCATION


                        #BEGINING MUSIC ARTIST LOCATION
                        case 'music'.'afijio'.'Oyo':
                      header("location:afijiomusicband.php");
                        break;
                        
                        case 'music'.'akinyele'.'Oyo':
                      header("location:akinyelemusicband.php");
                        break;
                        
                        case 'music'.'atiba'.'Oyo':
                      header("location:atibamusicband.php");
                        break;
                        
                        case 'music'.'atigbo'.'Oyo':
                      header("location:atigbomusicband.php");
                        break;
                        
                        case 'music'.'ifeloju'.'Oyo':
                      header("location:ifelojumusicband.php");
                        break;
                        
                        case 'music'.'irepo'.'Oyo':
                      header("location:irepomusicband.php");
                        break;
                        
                        
                        case 'music'.'egbeda-oyo'.'Oyo':
                      header("location:egbeda-oyomusicband.php");
                        break;
                        
                        case 'music'.'ibadan'.'Oyo':
                      header("location:ibadanmusicband.php");
                        break;
                        
                          case 'music'.'ido'.'Oyo':
                      header("location:idomusicband.php");
                        break;
                        
                           case 'music'.'ibarapa'.'Oyo':
                      header("location:ibarapamusicband.php");
                        break;

                        case 'music'.'ifedapo'.'Oyo':               
                      header("location:ifedapomusicband.php");                    
                        break;

                        case 'music'.'iseyin'.'Oyo':
                      header("location:iseyinmusicband.php");                   break;

                        case 'music'.'itesiwaju'.'Oyo':
                      header("location:itesiwajumusicband.php");                       break;

                        case 'music'.'iwajowa'.'Oyo':
                      header("location:iwajowamusicband.php");                        break;

                        case 'music'.'iwajowa-olorunsogo'.'Oyo':
                      header("location:iwajowa-olorunsogomusicband.php");                       break;

                        case 'music'.'kajola'.'Oyo':
                      header("location:kajolamusicband.php");                        break;

                        case 'music'.'lagelu'.'Oyo':
                      header("location:lagelumusicband.php");                       break;

                        case 'music'.'ogbomoso'.'Oyo':
                      header("location:ogbomosomusicband.php");                       break;

                        case 'music'.'ogo-oluwa'.'Oyo':
                      header("location:ogo-oluwamusicband.php");                       break;

                        case 'music'.'oluyole'.'Oyo':
                      header("location:oluyolemusicband.php");                       break;

                        case 'music'.'ona-ara'.'Oyo':
                      header("location:ona-aramusicband.php");                        break;

                        case 'music'.'ore-lope'.'Oyo':
                      header("location:ore-lopemusicband.php");                       break;

                        case 'music'.'orire'.'Oyo':
                      header("location:oriremusicband.php");                       break;

                        case 'music'.'oyo'.'Oyo':
                      header("location:oyomusicband.php");                       break;

                      case 'music'.'saki'.'Oyo':
                      header("location:sakimusicband.php");                       break;

                        case 'music'.'surulere-oyo'.'Oyo':
                      header("location:surulere-oyomusicband.php");                       break;
                        #END MUSIC ARTIST LOCATION


                      #BEGINING HALL DECORATORS LOCATION
                        case 'halldecorators'.'afijio'.'Oyo':
                      header("location:afijiohalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'akinyele'.'Oyo':
                      header("location:akinyelehalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'atiba'.'Oyo':
                      header("location:atibahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'ifeloju'.'Oyo':
                      header("location:ifelojuhalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'irepo'.'Oyo':
                      header("location:irepohalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'atigbo'.'Oyo':
                      header("location:atigbohalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'egbeda-oyo'.'Oyo':
                      header("location:egbeda-oyohalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'ibadan'.'Oyo':
                      header("location:ibadanhalldecorators.php");
                        break;
                        
                         case 'halldecorators'.'ido'.'Oyo':
                      header("location:idohalldecorators.php");
                        break;
                        
                          case 'halldecorators'.'ibarapa'.'Oyo':
                      header("location:ibarapahalldecorators.php");
                        break;

                          case 'halldecorators'.'ifedapo'.'Oyo':                
                      header("location:ifedapohalldecorators.php");                   
                        break;

                        case 'halldecorators'.'iseyin'.'Oyo':
                      header("location:iseyinhalldecorators.php");                    break;

                        case 'halldecorators'.'itesiwaju'.'Oyo':
                      header("location:itesiwajuhalldecorators.php");                        break;

                        case 'halldecorators'.'iwajowa'.'Oyo':
                      header("location:iwajowahalldecorators.php");                       break;

                        case 'halldecorators'.'iwajowa-olorunsogo'.'Oyo':
                      header("location:iwajowa-olorunsogohalldecorators.php");                        break;

                        case 'halldecorators'.'kajola'.'Oyo':
                      header("location:kajolahalldecorators.php");                       break;

                        case 'halldecorators'.'lagelu'.'Oyo':
                      header("location:lageluhalldecorators.php");                        break;

                        case 'halldecorators'.'ogbomoso'.'Oyo':
                      header("location:ogbomosohalldecorators.php");                        break;

                        case 'halldecorators'.'ogo-oluwa'.'Oyo':
                      header("location:ogo-oluwahalldecorators.php");                        break;

                       case 'halldecorators'.'oluyole'.'Oyo':
                      header("location:oluyolehalldecorators.php");                        break;

                        case 'halldecorators'.'ona-ara'.'Oyo':
                      header("location:ona-arahalldecorators.php");                       break;

                        case 'halldecorators'.'ore-lope'.'Oyo':
                      header("location:ore-lopehalldecorators.php");                        break;

                        case 'halldecorators'.'orire'.'Oyo':
                      header("location:orirehalldecorators.php");                        break;

                        case 'halldecorators'.'oyo'.'Oyo':
                      header("location:oyohalldecorators.php");                        break;

                        case 'halldecorators'.'saki'.'Oyo':
                      header("location:sakihalldecorators.php");                        break;

                        case 'halldecorators'.'surulere-oyo'.'Oyo':
                      header("location:surulere-oyohalldecorators.php");                        break;
                        #END HALL DECORATORS LOCATION


                        #BEGINING Djs LOCATION
                        case 'dj'.'afijio'.'Oyo':
                      header("location:afijiodj.php");
                        break;
                        
                         case 'dj'.'akinyele'.'Oyo':
                      header("location:akinyeledj.php");
                        break;
                        
                        case 'dj'.'atiba'.'Oyo':
                      header("location:atibadj.php");
                        break;
                        
                        case 'dj'.'atigbo'.'Oyo':
                      header("location:atigbodj.php");
                        break;
                        
                        case 'dj'.'ifeloju'.'Oyo':
                      header("location:ifelojudj.php");
                        break;
                        
                        case 'dj'.'irepo'.'Oyo':
                      header("location:irepodj.php");
                        break;
                        
                        case 'dj'.'egbeda-oyo'.'Oyo':
                      header("location:egbeda-oyodj.php");
                        break;
                        
                        case 'dj'.'ibadan'.'Oyo':
                      header("location:ibadandj.php");
                        break;
                        
                        case 'dj'.'ido'.'Oyo':
                      header("location:idodj.php");
                        break;
                        
                        case 'dj'.'ibarapa'.'Oyo':
                      header("location:ibarapadj.php");
                        break;

                            case 'dj'.'ifedapo'.'Oyo':                
                      header("location:ifedapodj.php");                   
                        break;

                        case 'dj'.'iseyin'.'Oyo':
                      header("location:iseyindj.php");                    
                        break;

                        case 'dj'.'itesiwaju'.'Oyo':
                      header("location:itesiwajudj.php");                        break;

                        case 'dj'.'iwajowa'.'Oyo':
                      header("location:iwajowadj.php");                       break;

                        case 'dj'.'iwajowa-olorunsogo'.'Oyo':
                      header("location:iwajowa-olorunsogodj.php");                        break;

                        case 'dj'.'kajola'.'Oyo':
                      header("location:kajoladj.php");                       
                      break;

                        case 'dj'.'lagelu'.'Oyo':
                      header("location:lageludj.php");                        break;

                        case 'dj'.'ogbomoso'.'Oyo':
                      header("location:ogbomosodj.php");                        break;

                        case 'dj'.'ogo-oluwa'.'Oyo':
                      header("location:ogo-oluwadj.php");                        break;



                        case 'dj'.'oluyole'.'Oyo':
                      header("location:oluyoledj.php");                        break;

                        case 'dj'.'ona-ara'.'Oyo':
                      header("location:ona-aradj.php");                       
                      break;

                        case 'dj'.'ore-lope'.'Oyo':
                      header("location:ore-lopedj.php");                        break;

                        case 'dj'.'orire'.'Oyo':
                      header("location:oriredj.php");                        break;

                        case 'dj'.'oyo'.'Oyo':
                      header("location:oyodj.php");                        break;

                         case 'dj'.'saki'.'Oyo':
                      header("location:sakidj.php");                        break;

                        case 'dj'.'surulere-oyo'.'Oyo':
                      header("location:surulere-oyodj.php");                        break;
                        #END Djs LOCATION
                      

                        #BEGINING MARKUP LOCATION
                        case 'markup'.'afijio'.'Oyo':
                      header("location:afijiomarkup.php");
                        break;
                        
                         case 'markup'.'akinyele'.'Oyo':
                      header("location:akinyelemarkup.php");
                        break;
                        
                        case 'markup'.'ifeloju'.'Oyo':
                      header("location:ifelojumarkup.php");
                        break;
                        
                        case 'markup'.'irepo'.'Oyo':
                      header("location:irepomarkup.php");
                        break;
                        
                          case 'markup'.'atiba'.'Oyo':
                      header("location:atibamarkup.php");
                        break;
                        
                          case 'markup'.'atigbo'.'Oyo':
                      header("location:atigbomarkup.php");
                        break;
                        
                          case 'markup'.'egbeda-oyo'.'Oyo':
                      header("location:egbeda-oyomarkup.php");
                        break;
                        
                          case 'markup'.'ibadan'.'Oyo':
                      header("location:ibadanmarkup.php");
                        break;
                        
                        
                        case 'markup'.'ido'.'Oyo':
                      header("location:idomarkup.php");
                        break;
                        
                        case 'markup'.'ibarapa'.'Oyo':
                      header("location:ibarapamarkup.php");
                        break;


                        case 'markup'.'ifedapo'.'Oyo':                
                      header("location:ifedapomarkup.php");                   
                        break;

                        case 'markup'.'iseyin'.'Oyo':
                      header("location:iseyinmarkup.php");                    
                      break;

                        case 'markup'.'itesiwaju'.'Oyo':
                      header("location:itesiwajumarkup.php");                        break;

                        case 'markup'.'iwajowa'.'Oyo':
                      header("location:iwajowamarkup.php");                       break;

                        case 'markup'.'iwajowa-olorunsogo'.'Oyo':
                      header("location:iwajowa-olorunsogomarkup.php");                        break;

                        case 'markup'.'kajola'.'Oyo':
                      header("location:kajolamarkup.php");                       break;

                        case 'markup'.'lagelu'.'Oyo':
                      header("location:lagelumarkup.php");                        break;

                        case 'markup'.'ogbomoso'.'Oyo':
                      header("location:ogbomosomarkup.php");                        break;

                        case 'markup'.'ogo-oluwa'.'Oyo':
                      header("location:ogo-oluwamarkup.php");                        break;

                        case 'markup'.'oluyole'.'Oyo':
                      header("location:oluyolemarkup.php");                        break;

                        case 'markup'.'ona-ara'.'Oyo':
                      header("location:ona-aramarkup.php");                       break;

                        case 'markup'.'ore-lope'.'Oyo':
                      header("location:ore-lopemarkup.php");                        break;

                        case 'markup'.'orire'.'Oyo':
                      header("location:oriremarkup.php");                        break;

                        case 'markup'.'oyo'.'Oyo':
                      header("location:oyomarkup.php");                        break;

                      case 'markup'.'saki'.'Oyo':
                      header("location:sakimarkup.php");                        break;

                        case 'markup'.'surulere-oyo'.'Oyo':
                      header("location:surulere-oyomarkup.php");                        break;
                        #END MARKUP LOCATION

                      #OYO STATE ENDING





                                              #Ondo STATE BEGINING

                         case 'photographer'.'akure'.'Ondo':
                      header("location:akurephotogra.php");
                        break;
                        
                         case 'photographer'.'idanre'.'Ondo':
                      header("location:idanrephotogra.php");
                        break;
                        
                        case 'photographer'.'ilaje-oke-igbo'.'Ondo':
                      header("location:ilaje-oke-igbophotogra.php");
                        break;
                        
                         case 'photographer'.'irele'.'Ondo':
                      header("location:irelephotogra.php");
                        break;

                        case 'photographer'.'ese-odo'.'Ondo':                
                      header("location:ese-odophotogra.php");                     
                        break;
                        
                          case 'photographer'.'odigbo'.'Ondo':                
                      header("location:odigbophotogra.php");                     
                        break;
                        
                          case 'photographer'.'ondo'.'Ondo':                
                      header("location:ondophotogra.php");                     
                        break;
                        
                          case 'photographer'.'okitipupa'.'Ondo':                
                      header("location:okitipupaphotogra.php");                     
                        break;
                        
                          case 'photographer'.'ose'.'Ondo':                
                      header("location:osephotogra.php");                     
                        break;
                        
                        case 'photographer'.'ifedore'.'Ondo':                
                      header("location:ifedorephotogra.php");                     
                        break;
                        
                          case 'photographer'.'ilaje'.'Ondo':                
                      header("location:ilajephotogra.php");                     
                        break;

                        case 'photographer'.'owo'.'Ondo':
                      header("location:owophotogra.php");                    
                    break;

                

                        #END PHOTGRAPHER LOCATION



                        #BEGINING VEDIOGRAPHERS LOCATION
                        case 'vediographer'.'akure'.'Ondo':
                      header("location:akurevediographer.php");
                        break;
                        
                        
                         case 'vediographer'.'idanre'.'Ondo':
                      header("location:idanrevediographer.php");
                        break;
                        
                        case 'vediographer'.'ilaje-oke-igbo'.'Ondo':
                      header("location:ilaje-oke-igbovediographer.php");
                        break;
                        
                        case 'vediographer'.'irele'.'Ondo':
                      header("location:irelevediographer.php");
                        break;
                        
                        case 'vediographer'.'ese-odo'.'Ondo':
                      header("location:ese-odovediographer.php");
                        break;
                        
                        case 'vediographer'.'odigbo'.'Ondo':
                      header("location:odigbovediographer.php");
                        break;
                        
                         case 'vediographer'.'ondo'.'Ondo':
                      header("location:ondovediographer.php");
                        break;
                        
                         case 'vediographer'.'okitipupa'.'Ondo':
                      header("location:okitipupavediographer.php");
                        break;

                          case 'vediographer'.'ose'.'Ondo':                
                      header("location:osevediographer.php");                   
                        break;
                        
                          case 'vediographer'.'ifedore'.'Ondo':                
                      header("location:ifedorevediographer.php");                   
                        break;
                        
                          case 'vediographer'.'ilaje'.'Ondo':                
                      header("location:ilajevediographer.php");                   
                        break;

                        case 'vediographer'.'owo'.'Ondo':
                      header("location:owovediographer.php");                   
                       break;

                

                        #END VEDIOGRAPHERS LOCATION


                        #BEGINING CATERERS LOCATION
                        case 'caterers'.'akure'.'Ondo':
                      header("location:akurecaterers.php");
                        break;
                        
                         case 'caterers'.'idanre'.'Ondo':
                      header("location:idanrecaterers.php");
                        break;
                        
                         case 'caterers'.'ilaje-oke-igbo'.'Ondo':
                      header("location:ilaje-oke-igbocaterers.php");
                        break;
                        
                          case 'caterers'.'ifedore'.'Ondo':
                      header("location:ifedorecaterers.php");
                        break;
                        
                          case 'caterers'.'ilaje'.'Ondo':
                      header("location:ilajecaterers.php");
                        break;
                        
                         case 'caterers'.'irele'.'Ondo':
                      header("location:irelecaterers.php");
                        break;
                        
                         case 'caterers'.'ese-odo'.'Ondo':
                      header("location:ese-odocaterers.php");
                        break;
                        
                         case 'caterers'.'odigbo'.'Ondo':
                      header("location:odigbocaterers.php");
                        break;
                        
                          case 'caterers'.'okitipupa'.'Ondo':
                      header("location:okitipupacaterers.php");
                        break;
                        
                           case 'caterers'.'ondo'.'Ondo':
                      header("location:ondocaterers.php");
                        break;

                          case 'caterers'.'ose'.'Ondo':                
                      header("location:osecaterers.php");                   
                        break;

                        case 'caterers'.'owo'.'Ondo':
                      header("location:owocaterers.php");                   
                       break;

                        

                        #END CATERERS LOCATION


                        #BEGINING WINESELLER LOCATION
                        case 'wineseller'.'akure'.'Ondo':
                      header("location:akurewineseller.php");
                        break;
                        
                        case 'wineseller'.'idanre'.'Ondo':
                      header("location:idanrewineseller.php");
                        break;
                        
                         case 'wineseller'.'ilaje-oke-igbo'.'Ondo':
                      header("location:ilaje-oke-igbowineseller.php");
                        break;
                        
                         case 'wineseller'.'irele'.'Ondo':
                      header("location:irelewineseller.php");
                        break;
                        
                         case 'wineseller'.'ese-odo'.'Ondo':
                      header("location:ese-odowineseller.php");
                        break;
                        
                           case 'wineseller'.'ifedore'.'Ondo':
                      header("location:ifedorewineseller.php");
                        break;
                        
                           case 'wineseller'.'ilaje'.'Ondo':
                      header("location:ilajewineseller.php");
                        break;
                        
                         case 'wineseller'.'odigbo'.'Ondo':
                      header("location:odigbowineseller.php");
                        break;
                        
                         case 'wineseller'.'okitipupa'.'Ondo':
                      header("location:okitipupawineseller.php");
                        break;
                        
                         case 'wineseller'.'ondo'.'Ondo':
                      header("location:ondowineseller.php");
                        break;

                            case 'wineseller'.'ose'.'Ondo':                
                      header("location:osewineseller.php");                   
                        break;

                        case 'wineseller'.'owo'.'Ondo':
                      header("location:owowineseller.php");                    
                      break;

                     

                        #END WINESELLER LOCATION


                      #BEGINING OF ENTERTAINER LOCATION
                        case 'entertainer'.'akure'.'Ondo':
                        header("location:akureentertainer.php");
                        break;
                        
                        case 'entertainer'.'idanre'.'Ondo':
                        header("location:idanreentertainer.php");
                        break;
                        
                        case 'entertainer'.'ilaje-oke-igbo'.'Ondo':
                        header("location:ilaje-oke-igboentertainer.php");
                        break;
                        
                        case 'entertainer'.'irele'.'Ondo':
                        header("location:ireleentertainer.php");
                        break;
                        
                        case 'entertainer'.'ese-odo'.'Ondo':
                        header("location:ese-odoentertainer.php");
                        break;
                        
                        case 'entertainer'.'odigbo'.'Ondo':
                        header("location:odigboentertainer.php");
                        break;
                        
                        case 'entertainer'.'ifedore'.'Ondo':
                        header("location:ifedoreentertainer.php");
                        break;
                        
                        
                        case 'entertainer'.'ilaje'.'Ondo':
                        header("location:ilajeentertainer.php");
                        break;
                        
                        case 'entertainer'.'okitipupa'.'Ondo':
                        header("location:okitipupaentertainer.php");
                        break;
                        
                        case 'entertainer'.'ondo'.'Ondo':
                        header("location:ondoentertainer.php");
                        break;

                            case 'entertainer'.'ose'.'Ondo':               
                      header("location:oseentertainer.php");                    
                        break;

                        case 'entertainer'.'owo'.'Ondo':
                      header("location:owoentertainer.php");             
                            break;

                    
                        #END ENTERTAINER / MC LOCATION


                        #BEGINING MUSIC ARTIST LOCATION
                        case 'music'.'akure'.'Ondo':
                      header("location:akuremusicband.php");
                        break;
                        
                        case 'music'.'idanre'.'Ondo':
                      header("location:idanremusicband.php");
                        break;
                        
                        case 'music'.'ilaje-oke-igbo'.'Ondo':
                      header("location:ilaje-oke-igbomusicband.php");
                        break;
                        
                        case 'music'.'irele'.'Ondo':
                      header("location:irelemusicband.php");
                        break;
                        
                        case 'music'.'ifedore'.'Ondo':
                      header("location:ifedoremusicband.php");
                        break;
                        
                        case 'music'.'ilaje'.'Ondo':
                      header("location:ilajemusicband.php");
                        break;
                        
                        
                        case 'music'.'ese-odo'.'Ondo':
                      header("location:ese-odomusicband.php");
                        break;
                        
                        case 'music'.'odigbo'.'Ondo':
                      header("location:odigbomusicband.php");
                        break;
                        
                          case 'music'.'okitipupa'.'Ondo':
                      header("location:okitipupamusicband.php");
                        break;
                        
                           case 'music'.'ondo'.'Ondo':
                      header("location:ondomusicband.php");
                        break;

                        case 'music'.'ose'.'Ondo':               
                      header("location:osemusicband.php");                    
                        break;

                        case 'music'.'owo'.'Ondo':
                      header("location:owomusicband.php");                   
                      break;

                      
                        #END MUSIC ARTIST LOCATION


                      #BEGINING HALL DECORATORS LOCATION
                        case 'halldecorators'.'akure'.'Ondo':
                      header("location:akurehalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'idanre'.'Ondo':
                      header("location:idanrehalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'ilaje-oke-igbo'.'Ondo':
                      header("location:ilaje-oke-igbohalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'ifedore'.'Ondo':
                      header("location:ifedorehalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'ilaje'.'Ondo':
                      header("location:ilajehalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'irele'.'Ondo':
                      header("location:irelehalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'ese-odo'.'Ondo':
                      header("location:ese-odohalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'odigbo'.'Ondo':
                      header("location:odigbohalldecorators.php");
                        break;
                        
                         case 'halldecorators'.'okitipupa'.'Ondo':
                      header("location:okitipupahalldecorators.php");
                        break;
                        
                          case 'halldecorators'.'ondo'.'Ondo':
                      header("location:ondohalldecorators.php");
                        break;

                          case 'halldecorators'.'ose'.'Ondo':                
                      header("location:osehalldecorators.php");                   
                        break;

                        case 'halldecorators'.'owo'.'Ondo':
                      header("location:owohalldecorators.php");                    
                      break;

                        #END HALL DECORATORS LOCATION


                        #BEGINING Djs LOCATION
                        case 'dj'.'akure'.'Ondo':
                      header("location:akuredj.php");
                        break;
                        
                         case 'dj'.'idanre'.'Ondo':
                      header("location:idanredj.php");
                        break;
                        
                        case 'dj'.'ilaje-oke-igbo'.'Ondo':
                      header("location:ilaje-oke-igbodj.php");
                        break;
                        
                        case 'dj'.'irele'.'Ondo':
                      header("location:ireledj.php");
                        break;
                        
                        case 'dj'.'ifedore'.'Ondo':
                      header("location:ifedoredj.php");
                        break;
                        
                        case 'dj'.'ilaje'.'Ondo':
                      header("location:ilajedj.php");
                        break;
                        
                        case 'dj'.'ese-odo'.'Ondo':
                      header("location:ese-ododj.php");
                        break;
                        
                        case 'dj'.'odigbo'.'Ondo':
                      header("location:odigbodj.php");
                        break;
                        
                        case 'dj'.'okitipupa'.'Ondo':
                      header("location:okitipupadj.php");
                        break;
                        
                        case 'dj'.'ondo'.'Ondo':
                      header("location:ondodj.php");
                        break;

                            case 'dj'.'ose'.'Ondo':                
                      header("location:osedj.php");                   
                        break;

                        case 'dj'.'owo'.'Ondo':
                      header("location:owodj.php");                    
                        break;

                        #END Djs LOCATION
                      

                        #BEGINING MARKUP LOCATION
                        case 'markup'.'akure'.'Ondo':
                      header("location:akuremarkup.php");
                        break;
                        
                         case 'markup'.'idanre'.'Ondo':
                      header("location:idanremarkup.php");
                        break;
                        
                        case 'markup'.'ifedore'.'Ondo':
                      header("location:ifedoremarkup.php");
                        break;
                        
                        case 'markup'.'ilaje'.'Ondo':
                      header("location:ilajemarkup.php");
                        break;
                        
                          case 'markup'.'ilaje-oke-igbo'.'Ondo':
                      header("location:ilaje-oke-igbomarkup.php");
                        break;
                        
                          case 'markup'.'irele'.'Ondo':
                      header("location:irelemarkup.php");
                        break;
                        
                          case 'markup'.'ese-odo'.'Ondo':
                      header("location:ese-odomarkup.php");
                        break;
                        
                          case 'markup'.'odigbo'.'Ondo':
                      header("location:odigbomarkup.php");
                        break;
                        
                        
                        case 'markup'.'okitipupa'.'Ondo':
                      header("location:okitipupamarkup.php");
                        break;
                        
                        case 'markup'.'ondo'.'Ondo':
                      header("location:ondomarkup.php");
                        break;


                        case 'markup'.'ose'.'Ondo':                
                      header("location:osemarkup.php");                   
                        break;

                        case 'markup'.'owo'.'Ondo':
                      header("location:owomarkup.php");                    
                      break;



                        #END MARKUP LOCATION

                      #Ondo STATE ENDING







                                              #Ekiti STATE BEGINING

                         case 'photographer'.'ado-ekiti'.'Ekiti':
                      header("location:ado-ekitiphotogra.php");
                        break;
                        
                         case 'photographer'.'effon-alaye-ekiti'.'Ekiti':
                      header("location:effon-alaye-ekitiphotogra.php");
                        break;
                        
                        case 'photographer'.'emure-ise-ekiti'.'Ekiti':
                      header("location:emure-ise-ekitiphotogra.php");
                        break;
                        
                         case 'photographer'.'ido-ekiti'.'Ekiti':
                      header("location:ido-ekitiphotogra.php");
                        break;

                        case 'photographer'.'ijero-ekiti'.'Ekiti':                
                      header("location:ijero-ekitiphotogra.php");                     
                        break;
                        
                          case 'photographer'.'ikere-ekiti'.'Ekiti':                
                      header("location:ikere-ekitiphotogra.php");                     
                        break;
                        
                          case 'photographer'.'ikole-ekiti'.'Ekiti':                
                      header("location:ikole-ekitiphotogra.php");                     
                        break;
                        
                          case 'photographer'.'ilejemeje-ekiti'.'Ekiti':                
                      header("location:ilejemeje-ekitiphotogra.php");                     
                        break;
                        
                          case 'photographer'.'ise-orun-ekiti'.'Ekiti':                
                      header("location:ise-orun-ekitiphotogra.php");                     
                        break;
                        
                        case 'photographer'.'moba-ekiti'.'Ekiti':                
                      header("location:moba-ekitiphotogra.php");                     
                        break;
                        
                          case 'photographer'.'osi-ekiti'.'Ekiti':                
                      header("location:osi-ekitiphotogra.php");                     
                        break;

                        case 'photographer'.'oye-ekiti'.'Ekiti':
                      header("location:oye-ekitiphotogra.php");                    
                    break;

                

                        #END PHOTGRAPHER LOCATION



                        #BEGINING VEDIOGRAPHERS LOCATION
                        case 'vediographer'.'ado-ekiti'.'Ekiti':
                      header("location:ado-ekitivediographer.php");
                        break;
                        
                        
                         case 'vediographer'.'effon-alaye-ekiti'.'Ekiti':
                      header("location:effon-alaye-ekitivediographer.php");
                        break;
                        
                        case 'vediographer'.'emure-ise-ekiti'.'Ekiti':
                      header("location:emure-ise-ekitivediographer.php");
                        break;
                        
                        case 'vediographer'.'ido-ekiti'.'Ekiti':
                      header("location:ido-ekitivediographer.php");
                        break;
                        
                        case 'vediographer'.'ijero-ekiti'.'Ekiti':
                      header("location:ijero-ekitivediographer.php");
                        break;
                        
                        case 'vediographer'.'ikere-ekiti'.'Ekiti':
                      header("location:ikere-ekitivediographer.php");
                        break;
                        
                         case 'vediographer'.'ikole-ekiti'.'Ekiti':
                      header("location:ikole-ekitivediographer.php");
                        break;
                        
                         case 'vediographer'.'ilejemeje-ekiti'.'Ekiti':
                      header("location:ilejemeje-ekitivediographer.php");
                        break;

                          case 'vediographer'.'ise-orun-ekiti'.'Ekiti':                
                      header("location:ise-orun-ekitivediographer.php");                   
                        break;
                        
                          case 'vediographer'.'moba-ekiti'.'Ekiti':                
                      header("location:moba-ekitivediographer.php");                   
                        break;
                        
                          case 'vediographer'.'osi-ekiti'.'Ekiti':                
                      header("location:osi-ekitivediographer.php");                   
                        break;

                        case 'vediographer'.'oye-ekiti'.'Ekiti':
                      header("location:oye-ekitivediographer.php");                   
                       break;

                

                        #END VEDIOGRAPHERS LOCATION


                        #BEGINING CATERERS LOCATION
                        case 'caterers'.'ado-ekiti'.'Ekiti':
                      header("location:ado-ekiticaterers.php");
                        break;
                        
                         case 'caterers'.'effon-alaye-ekiti'.'Ekiti':
                      header("location:effon-alaye-ekiticaterers.php");
                        break;
                        
                         case 'caterers'.'emure-ise-ekiti'.'Ekiti':
                      header("location:emure-ise-ekiticaterers.php");
                        break;
                        
                          case 'caterers'.'moba-ekiti'.'Ekiti':
                      header("location:moba-ekiticaterers.php");
                        break;
                        
                          case 'caterers'.'osi-ekiti'.'Ekiti':
                      header("location:osi-ekiticaterers.php");
                        break;
                        
                         case 'caterers'.'ido-ekiti'.'Ekiti':
                      header("location:ido-ekiticaterers.php");
                        break;
                        
                         case 'caterers'.'ijero-ekiti'.'Ekiti':
                      header("location:ijero-ekiticaterers.php");
                        break;
                        
                         case 'caterers'.'ikere-ekiti'.'Ekiti':
                      header("location:ikere-ekiticaterers.php");
                        break;
                        
                          case 'caterers'.'ilejemeje-ekiti'.'Ekiti':
                      header("location:ilejemeje-ekiticaterers.php");
                        break;
                        
                           case 'caterers'.'ikole-ekiti'.'Ekiti':
                      header("location:ikole-ekiticaterers.php");
                        break;

                          case 'caterers'.'ise-orun-ekiti'.'Ekiti':                
                      header("location:ise-orun-ekiticaterers.php");                   
                        break;

                        case 'caterers'.'oye-ekiti'.'Ekiti':
                      header("location:oye-ekiticaterers.php");                   
                       break;

                        

                        #END CATERERS LOCATION


                        #BEGINING WINESELLER LOCATION
                        case 'wineseller'.'ado-ekiti'.'Ekiti':
                      header("location:ado-ekitiwineseller.php");
                        break;
                        
                        case 'wineseller'.'effon-alaye-ekiti'.'Ekiti':
                      header("location:effon-alaye-ekitiwineseller.php");
                        break;
                        
                         case 'wineseller'.'emure-ise-ekiti'.'Ekiti':
                      header("location:emure-ise-ekitiwineseller.php");
                        break;
                        
                         case 'wineseller'.'ido-ekiti'.'Ekiti':
                      header("location:ido-ekitiwineseller.php");
                        break;
                        
                         case 'wineseller'.'ijero-ekiti'.'Ekiti':
                      header("location:ijero-ekitiwineseller.php");
                        break;
                        
                           case 'wineseller'.'moba-ekiti'.'Ekiti':
                      header("location:moba-ekitiwineseller.php");
                        break;
                        
                           case 'wineseller'.'osi-ekiti'.'Ekiti':
                      header("location:osi-ekitiwineseller.php");
                        break;
                        
                         case 'wineseller'.'ikere-ekiti'.'Ekiti':
                      header("location:ikere-ekitiwineseller.php");
                        break;
                        
                         case 'wineseller'.'ilejemeje-ekiti'.'Ekiti':
                      header("location:ilejemeje-ekitiwineseller.php");
                        break;
                        
                         case 'wineseller'.'ikole-ekiti'.'Ekiti':
                      header("location:ikole-ekitiwineseller.php");
                        break;

                            case 'wineseller'.'ise-orun-ekiti'.'Ekiti':                
                      header("location:ise-orun-ekitiwineseller.php");                   
                        break;

                        case 'wineseller'.'oye-ekiti'.'Ekiti':
                      header("location:oye-ekitiwineseller.php");                    
                      break;

                     

                        #END WINESELLER LOCATION


                      #BEGINING OF ENTERTAINER LOCATION
                        case 'entertainer'.'ado-ekiti'.'Ekiti':
                        header("location:ado-ekitientertainer.php");
                        break;
                        
                        case 'entertainer'.'effon-alaye-ekiti'.'Ekiti':
                        header("location:effon-alaye-ekitientertainer.php");
                        break;
                        
                        case 'entertainer'.'emure-ise-ekiti'.'Ekiti':
                        header("location:emure-ise-ekitientertainer.php");
                        break;
                        
                        case 'entertainer'.'ido-ekiti'.'Ekiti':
                        header("location:ido-ekitientertainer.php");
                        break;
                        
                        case 'entertainer'.'ijero-ekiti'.'Ekiti':
                        header("location:ijero-ekitientertainer.php");
                        break;
                        
                        case 'entertainer'.'ikere-ekiti'.'Ekiti':
                        header("location:ikere-ekitientertainer.php");
                        break;
                        
                        case 'entertainer'.'moba-ekiti'.'Ekiti':
                        header("location:moba-ekitientertainer.php");
                        break;
                        
                        
                        case 'entertainer'.'osi-ekiti'.'Ekiti':
                        header("location:osi-ekitientertainer.php");
                        break;
                        
                        case 'entertainer'.'ilejemeje-ekiti'.'Ekiti':
                        header("location:ilejemeje-ekitientertainer.php");
                        break;
                        
                        case 'entertainer'.'ikole-ekiti'.'Ekiti':
                        header("location:ikole-ekitientertainer.php");
                        break;

                            case 'entertainer'.'ise-orun-ekiti'.'Ekiti':               
                      header("location:ise-orun-ekitientertainer.php");                    
                        break;

                        case 'entertainer'.'oye-ekiti'.'Ekiti':
                      header("location:oye-ekitientertainer.php");             
                            break;

                    
                        #END ENTERTAINER / MC LOCATION


                        #BEGINING MUSIC ARTIST LOCATION
                        case 'music'.'ado-ekiti'.'Ekiti':
                      header("location:ado-ekitimusicband.php");
                        break;
                        
                        case 'music'.'effon-alaye-ekiti'.'Ekiti':
                      header("location:effon-alaye-ekitimusicband.php");
                        break;
                        
                        case 'music'.'emure-ise-ekiti'.'Ekiti':
                      header("location:emure-ise-ekitimusicband.php");
                        break;
                        
                        case 'music'.'ido-ekiti'.'Ekiti':
                      header("location:ido-ekitimusicband.php");
                        break;
                        
                        case 'music'.'moba-ekiti'.'Ekiti':
                      header("location:moba-ekitimusicband.php");
                        break;
                        
                        case 'music'.'osi-ekiti'.'Ekiti':
                      header("location:osi-ekitimusicband.php");
                        break;
                        
                        
                        case 'music'.'ijero-ekiti'.'Ekiti':
                      header("location:ijero-ekitimusicband.php");
                        break;
                        
                        case 'music'.'ikere-ekiti'.'Ekiti':
                      header("location:ikere-ekitimusicband.php");
                        break;
                        
                          case 'music'.'ilejemeje-ekiti'.'Ekiti':
                      header("location:ilejemeje-ekitimusicband.php");
                        break;
                        
                           case 'music'.'ikole-ekiti'.'Ekiti':
                      header("location:ikole-ekitimusicband.php");
                        break;

                        case 'music'.'ise-orun-ekiti'.'Ekiti':               
                      header("location:ise-orun-ekitimusicband.php");                    
                        break;

                        case 'music'.'oye-ekiti'.'Ekiti':
                      header("location:oye-ekitimusicband.php");                   
                      break;

                      
                        #END MUSIC ARTIST LOCATION


                      #BEGINING HALL DECORATORS LOCATION
                        case 'halldecorators'.'ado-ekiti'.'Ekiti':
                      header("location:ado-ekitihalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'effon-alaye-ekiti'.'Ekiti':
                      header("location:effon-alaye-ekitihalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'emure-ise-ekiti'.'Ekiti':
                      header("location:emure-ise-ekitihalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'moba-ekiti'.'Ekiti':
                      header("location:moba-ekitihalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'osi-ekiti'.'Ekiti':
                      header("location:osi-ekitihalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'ido-ekiti'.'Ekiti':
                      header("location:ido-ekitihalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'ijero-ekiti'.'Ekiti':
                      header("location:ijero-ekitihalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'ikere-ekiti'.'Ekiti':
                      header("location:ikere-ekitihalldecorators.php");
                        break;
                        
                         case 'halldecorators'.'ilejemeje-ekiti'.'Ekiti':
                      header("location:ilejemeje-ekitihalldecorators.php");
                        break;
                        
                          case 'halldecorators'.'ikole-ekiti'.'Ekiti':
                      header("location:ikole-ekitihalldecorators.php");
                        break;

                          case 'halldecorators'.'ise-orun-ekiti'.'Ekiti':                
                      header("location:ise-orun-ekitihalldecorators.php");                   
                        break;

                        case 'halldecorators'.'oye-ekiti'.'Ekiti':
                      header("location:oye-ekitihalldecorators.php");                    
                      break;

                        #END HALL DECORATORS LOCATION


                        #BEGINING Djs LOCATION
                        case 'dj'.'ado-ekiti'.'Ekiti':
                      header("location:ado-ekitidj.php");
                        break;
                        
                         case 'dj'.'effon-alaye-ekiti'.'Ekiti':
                      header("location:effon-alaye-ekitidj.php");
                        break;
                        
                        case 'dj'.'emure-ise-ekiti'.'Ekiti':
                      header("location:emure-ise-ekitidj.php");
                        break;
                        
                        case 'dj'.'ido-ekiti'.'Ekiti':
                      header("location:ido-ekitidj.php");
                        break;
                        
                        case 'dj'.'moba-ekiti'.'Ekiti':
                      header("location:moba-ekitidj.php");
                        break;
                        
                        case 'dj'.'osi-ekiti'.'Ekiti':
                      header("location:osi-ekitidj.php");
                        break;
                        
                        case 'dj'.'ijero-ekiti'.'Ekiti':
                      header("location:ijero-ekitidj.php");
                        break;
                        
                        case 'dj'.'ikere-ekiti'.'Ekiti':
                      header("location:ikere-ekitidj.php");
                        break;
                        
                        case 'dj'.'ilejemeje-ekiti'.'Ekiti':
                      header("location:ilejemeje-ekitidj.php");
                        break;
                        
                        case 'dj'.'ikole-ekiti'.'Ekiti':
                      header("location:ikole-ekitidj.php");
                        break;

                            case 'dj'.'ise-orun-ekiti'.'Ekiti':                
                      header("location:ise-orun-ekitidj.php");                   
                        break;

                        case 'dj'.'oye-ekiti'.'Ekiti':
                      header("location:oye-ekitidj.php");                    
                        break;

                        #END Djs LOCATION
                      

                        #BEGINING MARKUP LOCATION
                        case 'markup'.'ado-ekiti'.'Ekiti':
                      header("location:ado-ekitimarkup.php");
                        break;
                        
                         case 'markup'.'effon-alaye-ekiti'.'Ekiti':
                      header("location:effon-alaye-ekitimarkup.php");
                        break;
                        
                        case 'markup'.'moba-ekiti'.'Ekiti':
                      header("location:moba-ekitimarkup.php");
                        break;
                        
                        case 'markup'.'osi-ekiti'.'Ekiti':
                      header("location:osi-ekitimarkup.php");
                        break;
                        
                          case 'markup'.'emure-ise-ekiti'.'Ekiti':
                      header("location:emure-ise-ekitimarkup.php");
                        break;
                        
                          case 'markup'.'ido-ekiti'.'Ekiti':
                      header("location:ido-ekitimarkup.php");
                        break;
                        
                          case 'markup'.'ijero-ekiti'.'Ekiti':
                      header("location:ijero-ekitimarkup.php");
                        break;
                        
                          case 'markup'.'ikere-ekiti'.'Ekiti':
                      header("location:ikere-ekitimarkup.php");
                        break;
                        
                        
                        case 'markup'.'ilejemeje-ekiti'.'Ekiti':
                      header("location:ilejemeje-ekitimarkup.php");
                        break;
                        
                        case 'markup'.'ikole-ekiti'.'Ekiti':
                      header("location:ikole-ekitimarkup.php");
                        break;


                        case 'markup'.'ise-orun-ekiti'.'Ekiti':                
                      header("location:ise-orun-ekitimarkup.php");                   
                        break;

                        case 'markup'.'oye-ekiti'.'Ekiti':
                      header("location:oye-ekitimarkup.php");                    
                      break;



                        #END MARKUP LOCATION

                      #Ekiti STATE ENDING





                                              #Bayelsa STATE BEGINING

                         case 'photographer'.'brass'.'Bayelsa':
                      header("location:brassphotogra.php");
                        break;
                        
                         case 'photographer'.'ekeremor'.'Bayelsa':
                      header("location:ekeremorphotogra.php");
                        break;
                        
                        
                         case 'photographer'.'kolok-opokuma'.'Bayelsa':
                      header("location:kolok-opokumaphotogra.php");
                        break;

                        
                          case 'photographer'.'nembe'.'Bayelsa':                
                      header("location:nembephotogra.php");                     
                        break;
                        
                          case 'photographer'.'ogbia'.'Bayelsa':                
                      header("location:ogbiaphotogra.php");                     
                        break;
                        
                          case 'photographer'.'sagbama'.'Bayelsa':                
                      header("location:sagbamaphotogra.php");                     
                        break;
                        
                          case 'photographer'.'southern-ijaw'.'Bayelsa':                
                      header("location:southern-ijawphotogra.php");                     
                        break;
                        
                        
                          case 'photographer'.'yenagoa'.'Bayelsa':                
                      header("location:yenagoaphotogra.php");                     
                        break;


                           case 'photographer'.'membe'.'Bayelsa':                
                      header("location:membephotogra.php");                     
                        break;

                       

                

                        #END PHOTGRAPHER LOCATION



                        #BEGINING VEDIOGRAPHERS LOCATION
                        case 'vediographer'.'brass'.'Bayelsa':
                      header("location:brassvediographer.php");
                        break;
                        
                        
                         case 'vediographer'.'ekeremor'.'Bayelsa':
                      header("location:ekeremorvediographer.php");
                        break;
                        
                     
                        
                        case 'vediographer'.'kolok-opokuma'.'Bayelsa':
                      header("location:kolok-opokumavediographer.php");
                        break;
                        
                     
                        
                        case 'vediographer'.'nembe'.'Bayelsa':
                      header("location:nembevediographer.php");
                        break;
                        
                         case 'vediographer'.'ogbia'.'Bayelsa':
                      header("location:ogbiavediographer.php");
                        break;
                        
                         case 'vediographer'.'sagbama'.'Bayelsa':
                      header("location:sagbamavediographer.php");
                        break;

                          case 'vediographer'.'southern-ijaw'.'Bayelsa':                
                      header("location:southern-ijawvediographer.php");                   
                        break;
                        
                         
                        
                          case 'vediographer'.'yenagoa'.'Bayelsa':                
                      header("location:yenagoavediographer.php");                   
                        break;



                          case 'vediographer'.'membe'.'Bayelsa':                
                      header("location:membevediographer.php");                   
                        break;

                     

                

                        #END VEDIOGRAPHERS LOCATION


                        #BEGINING CATERERS LOCATION
                        case 'caterers'.'brass'.'Bayelsa':
                      header("location:brasscaterers.php");
                        break;
                        
                         case 'caterers'.'ekeremor'.'Bayelsa':
                      header("location:ekeremorcaterers.php");
                        break;
                        
                      
                        
                          case 'caterers'.'yenagoa'.'Bayelsa':
                      header("location:yenagoacaterers.php");
                        break;


                         case 'caterers'.'membe'.'Bayelsa':
                      header("location:membecaterers.php");
                        break;
                        
                         case 'caterers'.'kolok-opokuma'.'Bayelsa':
                      header("location:kolok-opokumacaterers.php");
                        break;
                      
                        
                         case 'caterers'.'nembe'.'Bayelsa':
                      header("location:nembecaterers.php");
                        break;
                        
                          case 'caterers'.'sagbama'.'Bayelsa':
                      header("location:sagbamacaterers.php");
                        break;
                        
                           case 'caterers'.'ogbia'.'Bayelsa':
                      header("location:ogbiacaterers.php");
                        break;

                          case 'caterers'.'southern-ijaw'.'Bayelsa':                
                      header("location:southern-ijawcaterers.php");                   
                        break;

                  
                        

                        #END CATERERS LOCATION


                        #BEGINING WINESELLER LOCATION
                        case 'wineseller'.'brass'.'Bayelsa':
                      header("location:brasswineseller.php");
                        break;
                        
                        case 'wineseller'.'ekeremor'.'Bayelsa':
                      header("location:ekeremorwineseller.php");
                        break;
                        
                       
                        
                         case 'wineseller'.'kolok-opokuma'.'Bayelsa':
                      header("location:kolok-opokumawineseller.php");
                        break;
                        
                  
                      
                        
                           case 'wineseller'.'yenagoa'.'Bayelsa':
                      header("location:yenagoawineseller.php");
                        break;


                         case 'wineseller'.'membe'.'Bayelsa':
                      header("location:membewineseller.php");
                        break;
                        
                         case 'wineseller'.'nembe'.'Bayelsa':
                      header("location:nembewineseller.php");
                        break;
                        
                         case 'wineseller'.'sagbama'.'Bayelsa':
                      header("location:sagbamawineseller.php");
                        break;
                        
                         case 'wineseller'.'ogbia'.'Bayelsa':
                      header("location:ogbiawineseller.php");
                        break;

                            case 'wineseller'.'southern-ijaw'.'Bayelsa':                
                      header("location:southern-ijawwineseller.php");                   
                        break;

                       

                     

                        #END WINESELLER LOCATION


                      #BEGINING OF ENTERTAINER LOCATION
                        case 'entertainer'.'brass'.'Bayelsa':
                        header("location:brassentertainer.php");
                        break;
                        
                        case 'entertainer'.'ekeremor'.'Bayelsa':
                        header("location:ekeremorentertainer.php");
                        break;
                     
                        case 'entertainer'.'kolok-opokuma'.'Bayelsa':
                        header("location:kolok-opokumaentertainer.php");
                        break;
                        
                     
                        
                        case 'entertainer'.'nembe'.'Bayelsa':
                        header("location:nembeentertainer.php");
                        break;
                      
                        
                        
                        case 'entertainer'.'yenagoa'.'Bayelsa':
                        header("location:yenagoaentertainer.php");
                        break;


                         case 'entertainer'.'membe'.'Bayelsa':
                        header("location:membeentertainer.php");
                        break;


                        
                        case 'entertainer'.'sagbama'.'Bayelsa':
                        header("location:sagbamaentertainer.php");
                        break;
                        
                        case 'entertainer'.'ogbia'.'Bayelsa':
                        header("location:ogbiaentertainer.php");
                        break;

                            case 'entertainer'.'southern-ijaw'.'Bayelsa':               
                      header("location:southern-ijawentertainer.php");                    
                        break;


                    
                        #END ENTERTAINER / MC LOCATION


                        #BEGINING MUSIC ARTIST LOCATION
                        case 'music'.'brass'.'Bayelsa':
                      header("location:brassmusicband.php");
                        break;
                        
                        case 'music'.'ekeremor'.'Bayelsa':
                      header("location:ekeremormusicband.php");
                        break;
                        
                    
                        case 'music'.'kolok-opokuma'.'Bayelsa':
                      header("location:kolok-opokumamusicband.php");
                        break;
                 
                        
                        case 'music'.'yenagoa'.'Bayelsa':
                      header("location:yenagoamusicband.php");
                        break;



                            case 'music'.'membe'.'Bayelsa':
                      header("location:membemusicband.php");
                        break;
                        
                        
                        
                     
                        
                        case 'music'.'nembe'.'Bayelsa':
                      header("location:nembemusicband.php");
                        break;
                        
                          case 'music'.'sagbama'.'Bayelsa':
                      header("location:sagbamamusicband.php");
                        break;
                        
                           case 'music'.'ogbia'.'Bayelsa':
                      header("location:ogbiamusicband.php");
                        break;

                        case 'music'.'southern-ijaw'.'Bayelsa':               
                      header("location:southern-ijawmusicband.php");                    
                        break;

                       

                      
                        #END MUSIC ARTIST LOCATION


                      #BEGINING HALL DECORATORS LOCATION
                        case 'halldecorators'.'brass'.'Bayelsa':
                      header("location:brasshalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'ekeremor'.'Bayelsa':
                      header("location:ekeremorhalldecorators.php");
                        break;
                        
                   
                        
                        case 'halldecorators'.'yenagoa'.'Bayelsa':
                      header("location:yenagoahalldecorators.php");
                        break;


                          case 'halldecorators'.'membe'.'Bayelsa':
                      header("location:membehalldecorators.php");
                        break;

                        
                        case 'halldecorators'.'kolok-opokuma'.'Bayelsa':
                      header("location:kolok-opokumahalldecorators.php");
                        break;
                        
                      
                        
                        case 'halldecorators'.'nembe'.'Bayelsa':
                      header("location:nembehalldecorators.php");
                        break;
                        
                         case 'halldecorators'.'sagbama'.'Bayelsa':
                      header("location:sagbamahalldecorators.php");
                        break;
                        
                          case 'halldecorators'.'ogbia'.'Bayelsa':
                      header("location:ogbiahalldecorators.php");
                        break;

                          case 'halldecorators'.'southern-ijaw'.'Bayelsa':                
                      header("location:southern-ijawhalldecorators.php");                   
                        break;


                        #END HALL DECORATORS LOCATION


                        #BEGINING Djs LOCATION
                        case 'dj'.'brass'.'Bayelsa':
                      header("location:brassdj.php");
                        break;
                        
                         case 'dj'.'ekeremor'.'Bayelsa':
                      header("location:ekeremordj.php");
                        break;
                        
                       
                        case 'dj'.'kolok-opokuma'.'Bayelsa':
                      header("location:kolok-opokumadj.php");
                        break;
                        
                      
                        
                        case 'dj'.'yenagoa'.'Bayelsa':
                      header("location:yenagoadj.php");
                        break;


                          case 'dj'.'membe'.'Bayelsa':
                      header("location:membedj.php");
                        break;
                        
                      
                        
                        case 'dj'.'nembe'.'Bayelsa':
                      header("location:nembedj.php");
                        break;
                        
                        case 'dj'.'sagbama'.'Bayelsa':
                      header("location:sagbamadj.php");
                        break;
                        
                        case 'dj'.'ogbia'.'Bayelsa':
                      header("location:ogbiadj.php");
                        break;

                            case 'dj'.'southern-ijaw'.'Bayelsa':                
                      header("location:southern-ijawdj.php");                   
                        break;


                        #END Djs LOCATION
                      

                        #BEGINING MARKUP LOCATION
                        case 'markup'.'brass'.'Bayelsa':
                      header("location:brassmarkup.php");
                        break;
                        
                         case 'markup'.'ekeremor'.'Bayelsa':
                      header("location:ekeremormarkup.php");
                        break;
                        
                       
                        case 'markup'.'yenagoa'.'Bayelsa':
                      header("location:yenagoamarkup.php");
                        break;


                        case 'markup'.'membe'.'Bayelsa':
                      header("location:membemarkup.php");
                        break;
                        
                         
                        
                          case 'markup'.'kolok-opokuma'.'Bayelsa':
                      header("location:kolok-opokumamarkup.php");
                        break;
                        
                       
                          case 'markup'.'nembe'.'Bayelsa':
                      header("location:nembemarkup.php");
                        break;
                        
                        
                        case 'markup'.'sagbama'.'Bayelsa':
                      header("location:sagbamamarkup.php");
                        break;
                        
                        case 'markup'.'ogbia'.'Bayelsa':
                      header("location:ogbiamarkup.php");
                        break;


                        case 'markup'.'southern-ijaw'.'Bayelsa':                
                      header("location:southern-ijawmarkup.php");                   
                        break;
                        #END MARKUP LOCATION

                      #Bayelsa STATE ENDING



                                              #Anambra STATE BEGINING

                         case 'photographer'.'aguata-anambra'.'Anambra':
                      header("location:aguata-anambraphotogra.php");
                        break;
                        
                         case 'photographer'.'anambra'.'Anambra':
                      header("location:anambraphotogra.php");
                        break;
                        
                        
                         case 'photographer'.'anaocha-anambra'.'Anambra':
                      header("location:anaocha-anambraphotogra.php");
                        break;

                        
                          case 'photographer'.'awka-anambra'.'Anambra':                
                      header("location:awka-anambraphotogra.php");                     
                        break;
                        
                          case 'photographer'.'ogbaru-anambra'.'Anambra':                
                      header("location:ogbaru-anambraphotogra.php");                     
                        break;
                        
                          case 'photographer'.'onitsha-anambra'.'Anambra':                
                      header("location:onitsha-anambraphotogra.php");                     
                        break;
                        
                          case 'photographer'.'orumba-anambra'.'Anambra':                
                      header("location:orumba-anambraphotogra.php");                     
                        break;
                        
                        
                          case 'photographer'.'oyi-anambra'.'Anambra':                
                      header("location:oyi-anambraphotogra.php");                     
                        break;

                       

                

                        #END PHOTGRAPHER LOCATION



                        #BEGINING VEDIOGRAPHERS LOCATION
                        case 'vediographer'.'aguata-anambra'.'Anambra':
                      header("location:aguata-anambravediographer.php");
                        break;
                        
                        
                         case 'vediographer'.'anambra'.'Anambra':
                      header("location:anambravediographer.php");
                        break;
                        
                     
                        
                        case 'vediographer'.'anaocha-anambra'.'Anambra':
                      header("location:anaocha-anambravediographer.php");
                        break;
                        
                     
                        
                        case 'vediographer'.'awka-anambra'.'Anambra':
                      header("location:awka-anambravediographer.php");
                        break;
                        
                         case 'vediographer'.'ogbaru-anambra'.'Anambra':
                      header("location:ogbaru-anambravediographer.php");
                        break;
                        
                         case 'vediographer'.'onitsha-anambra'.'Anambra':
                      header("location:onitsha-anambravediographer.php");
                        break;

                          case 'vediographer'.'orumba-anambra'.'Anambra':                
                      header("location:orumba-anambravediographer.php");                   
                        break;
                        
                         
                        
                          case 'vediographer'.'oyi-anambra'.'Anambra':                
                      header("location:oyi-anambravediographer.php");                   
                        break;

                     

                

                        #END VEDIOGRAPHERS LOCATION


                        #BEGINING CATERERS LOCATION
                        case 'caterers'.'aguata-anambra'.'Anambra':
                      header("location:aguata-anambracaterers.php");
                        break;
                        
                         case 'caterers'.'anambra'.'Anambra':
                      header("location:anambracaterers.php");
                        break;
                        
                      
                        
                          case 'caterers'.'oyi-anambra'.'Anambra':
                      header("location:oyi-anambracaterers.php");
                        break;
                        
                         case 'caterers'.'anaocha-anambra'.'Anambra':
                      header("location:anaocha-anambracaterers.php");
                        break;
                      
                        
                         case 'caterers'.'awka-anambra'.'Anambra':
                      header("location:awka-anambracaterers.php");
                        break;
                        
                          case 'caterers'.'onitsha-anambra'.'Anambra':
                      header("location:onitsha-anambracaterers.php");
                        break;
                        
                           case 'caterers'.'ogbaru-anambra'.'Anambra':
                      header("location:ogbaru-anambracaterers.php");
                        break;

                          case 'caterers'.'orumba-anambra'.'Anambra':                
                      header("location:orumba-anambracaterers.php");                   
                        break;

                  
                        

                        #END CATERERS LOCATION


                        #BEGINING WINESELLER LOCATION
                        case 'wineseller'.'aguata-anambra'.'Anambra':
                      header("location:aguata-anambrawineseller.php");
                        break;
                        
                        case 'wineseller'.'anambra'.'Anambra':
                      header("location:anambrawineseller.php");
                        break;
                        
                       
                        
                         case 'wineseller'.'anaocha-anambra'.'Anambra':
                      header("location:anaocha-anambrawineseller.php");
                        break;
                        
                  
                      
                        
                           case 'wineseller'.'oyi-anambra'.'Anambra':
                      header("location:oyi-anambrawineseller.php");
                        break;
                        
                         case 'wineseller'.'awka-anambra'.'Anambra':
                      header("location:awka-anambrawineseller.php");
                        break;
                        
                         case 'wineseller'.'onitsha-anambra'.'Anambra':
                      header("location:onitsha-anambrawineseller.php");
                        break;
                        
                         case 'wineseller'.'ogbaru-anambra'.'Anambra':
                      header("location:ogbaru-anambrawineseller.php");
                        break;

                            case 'wineseller'.'orumba-anambra'.'Anambra':                
                      header("location:orumba-anambrawineseller.php");                   
                        break;

                       

                     

                        #END WINESELLER LOCATION


                      #BEGINING OF ENTERTAINER LOCATION
                        case 'entertainer'.'aguata-anambra'.'Anambra':
                        header("location:aguata-anambraentertainer.php");
                        break;
                        
                        case 'entertainer'.'anambra'.'Anambra':
                        header("location:anambraentertainer.php");
                        break;
                     
                        case 'entertainer'.'anaocha-anambra'.'Anambra':
                        header("location:anaocha-anambraentertainer.php");
                        break;
                        
                     
                        
                        case 'entertainer'.'awka-anambra'.'Anambra':
                        header("location:awka-anambraentertainer.php");
                        break;
                      
                        
                        
                        case 'entertainer'.'oyi-anambra'.'Anambra':
                        header("location:oyi-anambraentertainer.php");
                        break;
                        
                        case 'entertainer'.'onitsha-anambra'.'Anambra':
                        header("location:onitsha-anambraentertainer.php");
                        break;
                        
                        case 'entertainer'.'ogbaru-anambra'.'Anambra':
                        header("location:ogbaru-anambraentertainer.php");
                        break;

                            case 'entertainer'.'orumba-anambra'.'Anambra':               
                      header("location:orumba-anambraentertainer.php");                    
                        break;


                    
                        #END ENTERTAINER / MC LOCATION


                        #BEGINING MUSIC ARTIST LOCATION
                        case 'music'.'aguata-anambra'.'Anambra':
                      header("location:aguata-anambramusicband.php");
                        break;
                        
                        case 'music'.'anambra'.'Anambra':
                      header("location:anambramusicband.php");
                        break;
                        
                    
                        case 'music'.'anaocha-anambra'.'Anambra':
                      header("location:anaocha-anambramusicband.php");
                        break;
                 
                        
                        case 'music'.'oyi-anambra'.'Anambra':
                      header("location:oyi-anambramusicband.php");
                        break;
                        
                        
                     
                        
                        case 'music'.'awka-anambra'.'Anambra':
                      header("location:awka-anambramusicband.php");
                        break;
                        
                          case 'music'.'onitsha-anambra'.'Anambra':
                      header("location:onitsha-anambramusicband.php");
                        break;
                        
                           case 'music'.'ogbaru-anambra'.'Anambra':
                      header("location:ogbaru-anambramusicband.php");
                        break;

                        case 'music'.'orumba-anambra'.'Anambra':               
                      header("location:orumba-anambramusicband.php");                    
                        break;

                       

                      
                        #END MUSIC ARTIST LOCATION


                      #BEGINING HALL DECORATORS LOCATION
                        case 'halldecorators'.'aguata-anambra'.'Anambra':
                      header("location:aguata-anambrahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'anambra'.'Anambra':
                      header("location:anambrahalldecorators.php");
                        break;
                        
                   
                        
                        case 'halldecorators'.'oyi-anambra'.'Anambra':
                      header("location:oyi-anambrahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'anaocha-anambra'.'Anambra':
                      header("location:anaocha-anambrahalldecorators.php");
                        break;
                        
                      
                        
                        case 'halldecorators'.'awka-anambra'.'Anambra':
                      header("location:awka-anambrahalldecorators.php");
                        break;
                        
                         case 'halldecorators'.'onitsha-anambra'.'Anambra':
                      header("location:onitsha-anambrahalldecorators.php");
                        break;
                        
                          case 'halldecorators'.'ogbaru-anambra'.'Anambra':
                      header("location:ogbaru-anambrahalldecorators.php");
                        break;

                          case 'halldecorators'.'orumba-anambra'.'Anambra':                
                      header("location:orumba-anambrahalldecorators.php");                   
                        break;


                        #END HALL DECORATORS LOCATION


                        #BEGINING Djs LOCATION
                        case 'dj'.'aguata-anambra'.'Anambra':
                      header("location:aguata-anambradj.php");
                        break;
                        
                         case 'dj'.'anambra'.'Anambra':
                      header("location:anambradj.php");
                        break;
                        
                       
                        case 'dj'.'anaocha-anambra'.'Anambra':
                      header("location:anaocha-anambradj.php");
                        break;
                        
                      
                        
                        case 'dj'.'oyi-anambra'.'Anambra':
                      header("location:oyi-anambradj.php");
                        break;
                        
                      
                        
                        case 'dj'.'awka-anambra'.'Anambra':
                      header("location:awka-anambradj.php");
                        break;
                        
                        case 'dj'.'onitsha-anambra'.'Anambra':
                      header("location:onitsha-anambradj.php");
                        break;
                        
                        case 'dj'.'ogbaru-anambra'.'Anambra':
                      header("location:ogbaru-anambradj.php");
                        break;

                            case 'dj'.'orumba-anambra'.'Anambra':                
                      header("location:orumba-anambradj.php");                   
                        break;


                        #END Djs LOCATION
                      

                        #BEGINING MARKUP LOCATION
                        case 'markup'.'aguata-anambra'.'Anambra':
                      header("location:aguata-anambramarkup.php");
                        break;
                        
                         case 'markup'.'anambra'.'Anambra':
                      header("location:anambramarkup.php");
                        break;
                        
                       
                        case 'markup'.'oyi-anambra'.'Anambra':
                      header("location:oyi-anambramarkup.php");
                        break;
                        
                         
                        
                          case 'markup'.'anaocha-anambra'.'Anambra':
                      header("location:anaocha-anambramarkup.php");
                        break;
                        
                       
                          case 'markup'.'awka-anambra'.'Anambra':
                      header("location:awka-anambramarkup.php");
                        break;
                        
                        
                        case 'markup'.'onitsha-anambra'.'Anambra':
                      header("location:onitsha-anambramarkup.php");
                        break;
                        
                        case 'markup'.'ogbaru-anambra'.'Anambra':
                      header("location:ogbaru-anambramarkup.php");
                        break;


                        case 'markup'.'orumba-anambra'.'Anambra':                
                      header("location:orumba-anambramarkup.php");                   
                        break;
                        #END MARKUP LOCATION

                      #Anambra STATE ENDING



                                              #Bayelsa STATE BEGINING

                         case 'photographer'.'brass'.'Bayelsa':
                      header("location:brassphotogra.php");
                        break;
                        
                         case 'photographer'.'ekeremor'.'Bayelsa':
                      header("location:ekeremorphotogra.php");
                        break;
                        
                        case 'photographer'.'kolok-opokuma'.'Bayelsa':
                      header("location:kolok-opokumaphotogra.php");
                        break;
                        
                         case 'photographer'.'nembe'.'Bayelsa':
                      header("location:nembephotogra.php");
                        break;

                        case 'photographer'.'ogbia'.'Bayelsa':                
                      header("location:ogbiaphotogra.php");                     
                        break;
                        
                          case 'photographer'.'sagbama'.'Bayelsa':                
                      header("location:sagbamaphotogra.php");                     
                        break;
                        
                          case 'photographer'.'southern-ijaw'.'Bayelsa':                
                      header("location:southern-ijawphotogra.php");                     
                        break;
                        
                          case 'photographer'.'yenagoa'.'Bayelsa':                
                      header("location:yenagoaphotogra.php");                     
                        break;
                        
                          case 'photographer'.'membe'.'Bayelsa':                
                      header("location:membephotogra.php");                     
                        break;
                        
                       

                

                        #END PHOTGRAPHER LOCATION



                        #BEGINING VEDIOGRAPHERS LOCATION
                        case 'vediographer'.'brass'.'Bayelsa':
                      header("location:brassvediographer.php");
                        break;
                        
                        
                         case 'vediographer'.'ekeremor'.'Bayelsa':
                      header("location:ekeremorvediographer.php");
                        break;
                        
                        case 'vediographer'.'kolok-opokuma'.'Bayelsa':
                      header("location:kolok-opokumavediographer.php");
                        break;
                        
                        case 'vediographer'.'nembe'.'Bayelsa':
                      header("location:nembevediographer.php");
                        break;
                        
                        case 'vediographer'.'ogbia'.'Bayelsa':
                      header("location:ogbiavediographer.php");
                        break;
                        
                        case 'vediographer'.'sagbama'.'Bayelsa':
                      header("location:sagbamavediographer.php");
                        break;
                        
                         case 'vediographer'.'southern-ijaw'.'Bayelsa':
                      header("location:southern-ijawvediographer.php");
                        break;
                        
                         case 'vediographer'.'yenagoa'.'Bayelsa':
                      header("location:yenagoavediographer.php");
                        break;

                          case 'vediographer'.'membe'.'Bayelsa':                
                      header("location:membevediographer.php");                   
                        break;
                      

                

                        #END VEDIOGRAPHERS LOCATION


                        #BEGINING CATERERS LOCATION
                        case 'caterers'.'brass'.'Bayelsa':
                      header("location:brasscaterers.php");
                        break;
                        
                         case 'caterers'.'ekeremor'.'Bayelsa':
                      header("location:ekeremorcaterers.php");
                        break;
                        
                         case 'caterers'.'kolok-opokuma'.'Bayelsa':
                      header("location:kolok-opokumacaterers.php");
                        break;
                        
                        
                         case 'caterers'.'nembe'.'Bayelsa':
                      header("location:nembecaterers.php");
                        break;
                        
                         case 'caterers'.'ogbia'.'Bayelsa':
                      header("location:ogbiacaterers.php");
                        break;
                        
                         case 'caterers'.'sagbama'.'Bayelsa':
                      header("location:sagbamacaterers.php");
                        break;
                        
                          case 'caterers'.'yenagoa'.'Bayelsa':
                      header("location:yenagoacaterers.php");
                        break;
                        
                           case 'caterers'.'southern-ijaw'.'Bayelsa':
                      header("location:southern-ijawcaterers.php");
                        break;

                          case 'caterers'.'membe'.'Bayelsa':                
                      header("location:membecaterers.php");                   
                        break;

                      
                        

                        #END CATERERS LOCATION


                        #BEGINING WINESELLER LOCATION
                        case 'wineseller'.'brass'.'Bayelsa':
                      header("location:brasswineseller.php");
                        break;
                        
                        case 'wineseller'.'ekeremor'.'Bayelsa':
                      header("location:ekeremorwineseller.php");
                        break;
                        
                         case 'wineseller'.'kolok-opokuma'.'Bayelsa':
                      header("location:kolok-opokumawineseller.php");
                        break;
                        
                         case 'wineseller'.'nembe'.'Bayelsa':
                      header("location:nembewineseller.php");
                        break;
                        
                         case 'wineseller'.'ogbia'.'Bayelsa':
                      header("location:ogbiawineseller.php");
                        break;
                        
                    
                        
                         case 'wineseller'.'sagbama'.'Bayelsa':
                      header("location:sagbamawineseller.php");
                        break;
                        
                         case 'wineseller'.'yenagoa'.'Bayelsa':
                      header("location:yenagoawineseller.php");
                        break;
                        
                         case 'wineseller'.'southern-ijaw'.'Bayelsa':
                      header("location:southern-ijawwineseller.php");
                        break;

                            case 'wineseller'.'membe'.'Bayelsa':                
                      header("location:membewineseller.php");                   
                        break;

                       
                     

                        #END WINESELLER LOCATION


                      #BEGINING OF ENTERTAINER LOCATION
                        case 'entertainer'.'brass'.'Bayelsa':
                        header("location:brassentertainer.php");
                        break;
                        
                        case 'entertainer'.'ekeremor'.'Bayelsa':
                        header("location:ekeremorentertainer.php");
                        break;
                        
                        case 'entertainer'.'kolok-opokuma'.'Bayelsa':
                        header("location:kolok-opokumaentertainer.php");
                        break;
                        
                        case 'entertainer'.'nembe'.'Bayelsa':
                        header("location:nembeentertainer.php");
                        break;
                        
                        case 'entertainer'.'ogbia'.'Bayelsa':
                        header("location:ogbiaentertainer.php");
                        break;
                        
                        case 'entertainer'.'sagbama'.'Bayelsa':
                        header("location:sagbamaentertainer.php");
                        break;
                   
                        
                        case 'entertainer'.'yenagoa'.'Bayelsa':
                        header("location:yenagoaentertainer.php");
                        break;
                        
                        case 'entertainer'.'southern-ijaw'.'Bayelsa':
                        header("location:southern-ijawentertainer.php");
                        break;

                            case 'entertainer'.'membe'.'Bayelsa':               
                      header("location:membeentertainer.php");                    
                        break;

                       

                    
                        #END ENTERTAINER / MC LOCATION


                        #BEGINING MUSIC ARTIST LOCATION
                        case 'music'.'brass'.'Bayelsa':
                      header("location:brassmusicband.php");
                        break;
                        
                        case 'music'.'ekeremor'.'Bayelsa':
                      header("location:ekeremormusicband.php");
                        break;
                        
                        case 'music'.'kolok-opokuma'.'Bayelsa':
                      header("location:kolok-opokumamusicband.php");
                        break;
                        
                        case 'music'.'nembe'.'Bayelsa':
                      header("location:nembemusicband.php");
                        break;
                        
                        
                        case 'music'.'ogbia'.'Bayelsa':
                      header("location:ogbiamusicband.php");
                        break;
                        
                        case 'music'.'sagbama'.'Bayelsa':
                      header("location:sagbamamusicband.php");
                        break;
                        
                          case 'music'.'yenagoa'.'Bayelsa':
                      header("location:yenagoamusicband.php");
                        break;
                        
                           case 'music'.'southern-ijaw'.'Bayelsa':
                      header("location:southern-ijawmusicband.php");
                        break;

                        case 'music'.'membe'.'Bayelsa':               
                      header("location:membemusicband.php");                    
                        break;

                        #END MUSIC ARTIST LOCATION


                      #BEGINING HALL DECORATORS LOCATION
                        case 'halldecorators'.'brass'.'Bayelsa':
                      header("location:brasshalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'ekeremor'.'Bayelsa':
                      header("location:ekeremorhalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'kolok-opokuma'.'Bayelsa':
                      header("location:kolok-opokumahalldecorators.php");
                        break;
                        
                        
                        case 'halldecorators'.'nembe'.'Bayelsa':
                      header("location:nembehalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'ogbia'.'Bayelsa':
                      header("location:ogbiahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'sagbama'.'Bayelsa':
                      header("location:sagbamahalldecorators.php");
                        break;
                        
                         case 'halldecorators'.'yenagoa'.'Bayelsa':
                      header("location:yenagoahalldecorators.php");
                        break;
                        
                          case 'halldecorators'.'southern-ijaw'.'Bayelsa':
                      header("location:southern-ijawhalldecorators.php");
                        break;

                          case 'halldecorators'.'membe'.'Bayelsa':                
                      header("location:membehalldecorators.php");                   
                        break;

                      

                        #END HALL DECORATORS LOCATION


                        #BEGINING Djs LOCATION
                        case 'dj'.'brass'.'Bayelsa':
                      header("location:brassdj.php");
                        break;
                        
                         case 'dj'.'ekeremor'.'Bayelsa':
                      header("location:ekeremordj.php");
                        break;
                        
                        case 'dj'.'kolok-opokuma'.'Bayelsa':
                      header("location:kolok-opokumadj.php");
                        break;
                        
                        case 'dj'.'nembe'.'Bayelsa':
                      header("location:nembedj.php");
                        break;
                        
                    
                        
                        case 'dj'.'ogbia'.'Bayelsa':
                      header("location:ogbiadj.php");
                        break;
                        
                        case 'dj'.'sagbama'.'Bayelsa':
                      header("location:sagbamadj.php");
                        break;
                        
                        case 'dj'.'yenagoa'.'Bayelsa':
                      header("location:yenagoadj.php");
                        break;
                        
                        case 'dj'.'southern-ijaw'.'Bayelsa':
                      header("location:southern-ijawdj.php");
                        break;

                            case 'dj'.'membe'.'Bayelsa':                
                      header("location:membedj.php");                   
                        break;

                       

                        #END Djs LOCATION
                      

                        #BEGINING MARKUP LOCATION
                        case 'markup'.'brass'.'Bayelsa':
                      header("location:brassmarkup.php");
                        break;
                        
                         case 'markup'.'ekeremor'.'Bayelsa':
                      header("location:ekeremormarkup.php");
                        break;
                        
                   
                        
                          case 'markup'.'kolok-opokuma'.'Bayelsa':
                      header("location:kolok-opokumamarkup.php");
                        break;
                        
                          case 'markup'.'nembe'.'Bayelsa':
                      header("location:nembemarkup.php");
                        break;
                        
                          case 'markup'.'ogbia'.'Bayelsa':
                      header("location:ogbiamarkup.php");
                        break;
                        
                          case 'markup'.'sagbama'.'Bayelsa':
                      header("location:sagbamamarkup.php");
                        break;
                        
                        
                        case 'markup'.'yenagoa'.'Bayelsa':
                      header("location:yenagoamarkup.php");
                        break;
                        
                        case 'markup'.'southern-ijaw'.'Bayelsa':
                      header("location:southern-ijawmarkup.php");
                        break;


                        case 'markup'.'membe'.'Bayelsa':                
                      header("location:membemarkup.php");                   
                        break;

           
                        #END MARKUP LOCATION

                      #Bayelsa STATE ENDING



                        

                            #Ogun STATE BEGINING

                         case 'photographer'.'abeokuta'.'Ogun':
                      header("location:abeokutaphotogra.php");
                        break;
                        
                         case 'photographer'.'ado-odo-otta'.'Ogun':
                      header("location:ado-odo-ottaphotogra.php");
                        break;
                        
                        case 'photographer'.'agbado-ogun'.'Ogun':
                      header("location:agbado-ogunphotogra.php");
                        break;
                        
                         case 'photographer'.'ewekoro'.'Ogun':
                      header("location:ewekorophotogra.php");
                        break;

                        case 'photographer'.'idarapo'.'Ogun':                
                      header("location:idarapophotogra.php");                     
                        break;
                        
                          case 'photographer'.'ijebu'.'Ogun':                
                      header("location:ijebuphotogra.php");                     
                        break;
                        
                          case 'photographer'.'ikenne'.'Ogun':                
                      header("location:ikennephotogra.php");                     
                        break;
                        
                          case 'photographer'.'ilugun-alaro'.'Ogun':                
                      header("location:ilugun-alarophotogra.php");                     
                        break;
                        
                          case 'photographer'.'imeko-afon'.'Ogun':                
                      header("location:imeko-afonphotogra.php");                     
                        break;

                         case 'photographer'.'ipokia'.'Ogun':                
                      header("location:ipokiaphotogra.php");                     
                        break;

                         case 'photographer'.'obafemi-owode'.'Ogun':                
                      header("location:obafemi-owodephotogra.php");                     
                        break;

                         case 'photographer'.'odeda'.'Ogun':                
                      header("location:odedaphotogra.php");                     
                        break;

                         case 'photographer'.'odogbolu'.'Ogun':                
                      header("location:odogboluphotogra.php");                     
                        break;

                         case 'photographer'.'ogun-waterside'.'Ogun':                
                      header("location:ogun-watersidephotogra.php");                     
                        break;


                         case 'photographer'.'sagamu'.'Ogun':                
                      header("location:sagamuphotogra.php");                     
                        break;
                     
                        
                       

                

                        #END PHOTGRAPHER LOCATION



                        #BEGINING VEDIOGRAPHERS LOCATION
                        case 'vediographer'.'abeokuta'.'Ogun':
                      header("location:abeokutavediographer.php");
                        break;
                        
                        
                         case 'vediographer'.'ado-odo-otta'.'Ogun':
                      header("location:ado-odo-ottavediographer.php");
                        break;
                        
                        case 'vediographer'.'agbado-ogun'.'Ogun':
                      header("location:agbado-ogunvediographer.php");
                        break;
                        
                        case 'vediographer'.'ewekoro'.'Ogun':
                      header("location:ewekorovediographer.php");
                        break;
                        
                        case 'vediographer'.'idarapo'.'Ogun':
                      header("location:idarapovediographer.php");
                        break;
                        
                        case 'vediographer'.'ijebu'.'Ogun':
                      header("location:ijebuvediographer.php");
                        break;
                        
                         case 'vediographer'.'ikenne'.'Ogun':
                      header("location:ikennevediographer.php");
                        break;
                        
                         case 'vediographer'.'ilugun-alaro'.'Ogun':
                      header("location:ilugun-alarovediographer.php");
                        break;

                          case 'vediographer'.'imeko-afon'.'Ogun':                
                      header("location:imeko-afonvediographer.php");                   
                        break;

                         case 'vediographer'.'ipokia'.'Ogun':                
                      header("location:ipokiavediographer.php");                   
                        break;

                         case 'vediographer'.'obafemi-owode'.'Ogun':                
                      header("location:obafemi-owodevediographer.php");                   
                        break;

                         case 'vediographer'.'odeda'.'Ogun':                
                      header("location:odedavediographer.php");                   
                        break;

                         case 'vediographer'.'odogbolu'.'Ogun':                
                      header("location:odogboluvediographer.php");                   
                        break;

                         case 'vediographer'.'ogun-waterside'.'Ogun':                
                      header("location:ogun-watersidevediographer.php");                   
                        break;

                        case 'vediographer'.'sagamu'.'Ogun':                
                      header("location:sagamuvediographer.php");                   
                        break;

                      
                      

                

                        #END VEDIOGRAPHERS LOCATION


                        #BEGINING CATERERS LOCATION
                        case 'caterers'.'abeokuta'.'Ogun':
                      header("location:abeokutacaterers.php");
                        break;
                        
                         case 'caterers'.'ado-odo-otta'.'Ogun':
                      header("location:ado-odo-ottacaterers.php");
                        break;
                        
                         case 'caterers'.'agbado-ogun'.'Ogun':
                      header("location:agbado-oguncaterers.php");
                        break;
                        
                        
                         case 'caterers'.'ewekoro'.'Ogun':
                      header("location:ewekorocaterers.php");
                        break;
                        
                         case 'caterers'.'idarapo'.'Ogun':
                      header("location:idarapocaterers.php");
                        break;
                        
                         case 'caterers'.'ijebu'.'Ogun':
                      header("location:ijebucaterers.php");
                        break;
                        
                          case 'caterers'.'ilugun-alaro'.'Ogun':
                      header("location:ilugun-alarocaterers.php");
                        break;
                        
                           case 'caterers'.'ikenne'.'Ogun':
                      header("location:ikennecaterers.php");
                        break;

                          case 'caterers'.'imeko-afon'.'Ogun':                
                      header("location:imeko-afoncaterers.php");                   
                        break;

                          case 'caterers'.'ipokia'.'Ogun':                
                      header("location:ipokiacaterers.php");                   
                        break;

                          case 'caterers'.'obafemi-owode'.'Ogun':                
                      header("location:obafemi-owodecaterers.php");                   
                        break;

                          case 'caterers'.'odeda'.'Ogun':                
                      header("location:odedacaterers.php");                   
                        break;

                          case 'caterers'.'odogbolu'.'Ogun':                
                      header("location:odogbolucaterers.php");                   
                        break;

                          case 'caterers'.'ogun-waterside'.'Ogun':                
                      header("location:ogun-watersidecaterers.php");                   
                        break;

                        case 'caterers'.'sagamu'.'Ogun':                
                      header("location:sagamucaterers.php");                   
                        break;


                      
                        

                        #END CATERERS LOCATION


                        #BEGINING WINESELLER LOCATION
                        case 'wineseller'.'abeokuta'.'Ogun':
                      header("location:abeokutawineseller.php");
                        break;
                        
                        case 'wineseller'.'ado-odo-otta'.'Ogun':
                      header("location:ado-odo-ottawineseller.php");
                        break;
                        
                         case 'wineseller'.'agbado-ogun'.'Ogun':
                      header("location:agbado-ogunwineseller.php");
                        break;
                        
                         case 'wineseller'.'ewekoro'.'Ogun':
                      header("location:ewekorowineseller.php");
                        break;
                        
                         case 'wineseller'.'idarapo'.'Ogun':
                      header("location:idarapowineseller.php");
                        break;
                        
                    
                        
                         case 'wineseller'.'ijebu'.'Ogun':
                      header("location:ijebuwineseller.php");
                        break;
                        
                         case 'wineseller'.'ilugun-alaro'.'Ogun':
                      header("location:ilugun-alarowineseller.php");
                        break;
                        
                         case 'wineseller'.'ikenne'.'Ogun':
                      header("location:ikennewineseller.php");
                        break;

                            case 'wineseller'.'imeko-afon'.'Ogun':                
                      header("location:imeko-afonwineseller.php");                   
                        break;

                         case 'wineseller'.'ipokia'.'Ogun':                
                      header("location:ipokiawineseller.php");                   
                        break;

                         case 'wineseller'.'obafemi-owode'.'Ogun':                
                      header("location:obafemi-owodewineseller.php");                   
                        break;

                         case 'wineseller'.'odeda'.'Ogun':                
                      header("location:odedawineseller.php");                   
                        break;

                         case 'wineseller'.'odogbolu'.'Ogun':                
                      header("location:odogboluwineseller.php");                   
                        break;

                         case 'wineseller'.'ogun-waterside'.'Ogun':                
                      header("location:ogun-watersidewineseller.php");                   
                        break;

                         case 'wineseller'.'sagamu'.'Ogun':                
                      header("location:sagamuwineseller.php");                   
                        break;

                        

                       
                     

                        #END WINESELLER LOCATION


                      #BEGINING OF ENTERTAINER LOCATION
                        case 'entertainer'.'abeokuta'.'Ogun':
                        header("location:abeokutaentertainer.php");
                        break;
                        
                        case 'entertainer'.'ado-odo-otta'.'Ogun':
                        header("location:ado-odo-ottaentertainer.php");
                        break;
                        
                        case 'entertainer'.'agbado-ogun'.'Ogun':
                        header("location:agbado-ogunentertainer.php");
                        break;
                        
                        case 'entertainer'.'ewekoro'.'Ogun':
                        header("location:ewekoroentertainer.php");
                        break;
                        
                        case 'entertainer'.'idarapo'.'Ogun':
                        header("location:idarapoentertainer.php");
                        break;
                        
                        case 'entertainer'.'ijebu'.'Ogun':
                        header("location:ijebuentertainer.php");
                        break;
                   
                        
                        case 'entertainer'.'ilugun-alaro'.'Ogun':
                        header("location:ilugun-alaroentertainer.php");
                        break;
                        
                        case 'entertainer'.'ikenne'.'Ogun':
                        header("location:ikenneentertainer.php");
                        break;

                            case 'entertainer'.'imeko-afon'.'Ogun':               
                      header("location:imeko-afonentertainer.php");                    
                        break;

                           case 'entertainer'.'ipokia'.'Ogun':               
                      header("location:ipokiaentertainer.php");                    
                        break;

                           case 'entertainer'.'obafemi-owode'.'Ogun':               
                      header("location:obafemi-owodeentertainer.php");                    
                        break;

                           case 'entertainer'.'odeda'.'Ogun':               
                      header("location:odedaentertainer.php");                    
                        break;

                           case 'entertainer'.'odogbolu'.'Ogun':               
                      header("location:odogboluentertainer.php");                    
                        break;

                           case 'entertainer'.'ogun-waterside'.'Ogun':               
                      header("location:ogun-watersideentertainer.php");                    
                        break;

                          case 'entertainer'.'sagamu'.'Ogun':               
                      header("location:sagamuentertainer.php");                    
                        break;

                     

                       

                    
                        #END ENTERTAINER / MC LOCATION


                        #BEGINING MUSIC ARTIST LOCATION
                        case 'music'.'abeokuta'.'Ogun':
                      header("location:abeokutamusicband.php");
                        break;
                        
                        case 'music'.'ado-odo-otta'.'Ogun':
                      header("location:ado-odo-ottamusicband.php");
                        break;
                        
                        case 'music'.'agbado-ogun'.'Ogun':
                      header("location:agbado-ogunmusicband.php");
                        break;
                        
                        case 'music'.'ewekoro'.'Ogun':
                      header("location:ewekoromusicband.php");
                        break;
                        
                        
                        case 'music'.'idarapo'.'Ogun':
                      header("location:idarapomusicband.php");
                        break;
                        
                        case 'music'.'ijebu'.'Ogun':
                      header("location:ijebumusicband.php");
                        break;
                        
                          case 'music'.'ilugun-alaro'.'Ogun':
                      header("location:ilugun-alaromusicband.php");
                        break;
                        
                           case 'music'.'ikenne'.'Ogun':
                      header("location:ikennemusicband.php");
                        break;

                        case 'music'.'imeko-afon'.'Ogun':               
                      header("location:imeko-afonmusicband.php");                    
                        break;

                        case 'music'.'ipokia'.'Ogun':               
                      header("location:ipokiamusicband.php");                    
                        break;

                        case 'music'.'obafemi-owode'.'Ogun':               
                      header("location:obafemi-owodemusicband.php");                    
                        break;

                        case 'music'.'odeda'.'Ogun':               
                      header("location:odedamusicband.php");                    
                        break;

                        case 'music'.'odogbolu'.'Ogun':               
                      header("location:odogbolumusicband.php");                    
                        break;

                        case 'music'.'ogun-waterside'.'Ogun':               
                      header("location:ogun-watersidemusicband.php");                    
                        break;

                        case 'music'.'sagamu'.'Ogun':               
                      header("location:sagamumusicband.php");                    
                        break;

                  
                        #END MUSIC ARTIST LOCATION


                      #BEGINING HALL DECORATORS LOCATION
                        case 'halldecorators'.'abeokuta'.'Ogun':
                      header("location:abeokutahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'ado-odo-otta'.'Ogun':
                      header("location:ado-odo-ottahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'agbado-ogun'.'Ogun':
                      header("location:agbado-ogunhalldecorators.php");
                        break;
                        
                        
                        case 'halldecorators'.'ewekoro'.'Ogun':
                      header("location:ewekorohalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'idarapo'.'Ogun':
                      header("location:idarapohalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'ijebu'.'Ogun':
                      header("location:ijebuhalldecorators.php");
                        break;
                        
                         case 'halldecorators'.'ilugun-alaro'.'Ogun':
                      header("location:ilugun-alarohalldecorators.php");
                        break;
                        
                          case 'halldecorators'.'ikenne'.'Ogun':
                      header("location:ikennehalldecorators.php");
                        break;

                          case 'halldecorators'.'imeko-afon'.'Ogun':                
                      header("location:imeko-afonhalldecorators.php");                   
                        break;

                         case 'halldecorators'.'ipokia'.'Ogun':                
                      header("location:ipokiahalldecorators.php");                   
                        break;

                         case 'halldecorators'.'obafemi-owode'.'Ogun':                
                      header("location:obafemi-owodehalldecorators.php");                   
                        break;

                         case 'halldecorators'.'odeda'.'Ogun':                
                      header("location:odedahalldecorators.php");                   
                        break;

                         case 'halldecorators'.'odogbolu'.'Ogun':                
                      header("location:odogboluhalldecorators.php");                   
                        break;

                         case 'halldecorators'.'ogun-waterside'.'Ogun':                
                      header("location:ogun-watersidehalldecorators.php");                   
                        break;

                        case 'halldecorators'.'sagamu'.'Ogun':                
                      header("location:sagamuhalldecorators.php");                   
                        break;

                      
                      

                        #END HALL DECORATORS LOCATION


                        #BEGINING Djs LOCATION
                        case 'dj'.'abeokuta'.'Ogun':
                      header("location:abeokutadj.php");
                        break;
                        
                         case 'dj'.'ado-odo-otta'.'Ogun':
                      header("location:ado-odo-ottadj.php");
                        break;
                        
                        case 'dj'.'agbado-ogun'.'Ogun':
                      header("location:agbado-ogundj.php");
                        break;
                        
                        case 'dj'.'ewekoro'.'Ogun':
                      header("location:ewekorodj.php");
                        break;
                        
                    
                        
                        case 'dj'.'idarapo'.'Ogun':
                      header("location:idarapodj.php");
                        break;
                        
                        case 'dj'.'ijebu'.'Ogun':
                      header("location:ijebudj.php");
                        break;
                        
                        case 'dj'.'ilugun-alaro'.'Ogun':
                      header("location:ilugun-alarodj.php");
                        break;
                        
                        case 'dj'.'ikenne'.'Ogun':
                      header("location:ikennedj.php");
                        break;

                            case 'dj'.'imeko-afon'.'Ogun':                
                      header("location:imeko-afondj.php");                   
                        break;

                             case 'dj'.'ipokia'.'Ogun':                
                      header("location:ipokiadj.php");                   
                        break;

                             case 'dj'.'obafemi-owode'.'Ogun':                
                      header("location:obafemi-owodedj.php");                   
                        break;

                             case 'dj'.'odeda'.'Ogun':                
                      header("location:odedadj.php");                   
                        break;

                             case 'dj'.'odogbolu'.'Ogun':                
                      header("location:odogboludj.php");                   
                        break;

                             case 'dj'.'ogun-waterside'.'Ogun':                
                      header("location:ogun-watersidedj.php");                   
                        break;


                            case 'dj'.'sagamu'.'Ogun':                
                      header("location:sagamudj.php");                   
                        break;

                     
                       

                        #END Djs LOCATION
                      

                        #BEGINING MARKUP LOCATION
                        case 'markup'.'abeokuta'.'Ogun':
                      header("location:abeokutamarkup.php");
                        break;
                        
                         case 'markup'.'ado-odo-otta'.'Ogun':
                      header("location:ado-odo-ottamarkup.php");
                        break;
                        
                   
                        
                          case 'markup'.'agbado-ogun'.'Ogun':
                      header("location:agbado-ogunmarkup.php");
                        break;
                        
                          case 'markup'.'ewekoro'.'Ogun':
                      header("location:ewekoromarkup.php");
                        break;
                        
                          case 'markup'.'idarapo'.'Ogun':
                      header("location:idarapomarkup.php");
                        break;
                        
                          case 'markup'.'ijebu'.'Ogun':
                      header("location:ijebumarkup.php");
                        break;
                        
                        
                        case 'markup'.'ilugun-alaro'.'Ogun':
                      header("location:ilugun-alaromarkup.php");
                        break;
                        
                        case 'markup'.'ikenne'.'Ogun':
                      header("location:ikennemarkup.php");
                        break;


                        case 'markup'.'imeko-afon'.'Ogun':                
                      header("location:imeko-afonmarkup.php");                   
                        break;

                        case 'markup'.'ipokia'.'Ogun':                
                      header("location:ipokiamarkup.php");                   
                        break;


                        case 'markup'.'obafemi-owode'.'Ogun':                
                      header("location:obafemi-owodemarkup.php");                   
                        break;

                        case 'markup'.'odeda'.'Ogun':                
                      header("location:odedamarkup.php");                   
                        break;

                        case 'markup'.'odogbolu'.'Ogun':                
                      header("location:odogbolumarkup.php");                   
                        break;


                        case 'markup'.'ogun-waterside'.'Ogun':                
                      header("location:ogun-watersidemarkup.php");                   
                        break;

                        case 'markup'.'sagamu'.'Ogun':                
                      header("location:sagamumarkup.php");                   
                        break;

                        #END MARKUP LOCATION

                      #Ogun STATE ENDING






                            #Kwara STATE BEGINING

                         case 'photographer'.'asa-kwara'.'Kwara':
                      header("location:asa-kwaraphotogra.php");
                        break;
                        
                         case 'photographer'.'baruten'.'Kwara':
                      header("location:barutenphotogra.php");
                        break;
                        
                        case 'photographer'.'ede-kwara'.'Kwara':
                      header("location:ede-kwaraphotogra.php");
                        break;
                        
                         case 'photographer'.'ekiti-kwara'.'Kwara':
                      header("location:ekiti-kwaraphotogra.php");
                        break;

                        case 'photographer'.'ifelodun-kwara'.'Kwara':                
                      header("location:ifelodun-kwaraphotogra.php");                     
                        break;
                        
                          case 'photographer'.'ilorin'.'Kwara':                
                      header("location:ilorinphotogra.php");                     
                        break;
                        
                          case 'photographer'.'irepodun-kwara'.'Kwara':                
                      header("location:irepodun-kwaraphotogra.php");                     
                        break;
                        
                          case 'photographer'.'isin'.'Kwara':                
                      header("location:isinphotogra.php");                     
                        break;
                        
                          case 'photographer'.'kaiama'.'Kwara':                
                      header("location:kaiamaphotogra.php");                     
                        break;

                         case 'photographer'.'moro'.'Kwara':                
                      header("location:morophotogra.php");                     
                        break;

                         case 'photographer'.'offa'.'Kwara':                
                      header("location:offaphotogra.php");                     
                        break;

                         case 'photographer'.'oke-ero'.'Kwara':                
                      header("location:oke-erophotogra.php");                     
                        break;

                         case 'photographer'.'oyun'.'Kwara':                
                      header("location:oyunphotogra.php");                     
                        break;

                         case 'photographer'.'pategi'.'Kwara':                
                      header("location:pategiphotogra.php");                     
                        break;

                     
                        
                       

                

                        #END PHOTGRAPHER LOCATION



                        #BEGINING VEDIOGRAPHERS LOCATION
                        case 'vediographer'.'asa-kwara'.'Kwara':
                      header("location:asa-kwaravediographer.php");
                        break;
                        
                        
                         case 'vediographer'.'baruten'.'Kwara':
                      header("location:barutenvediographer.php");
                        break;
                        
                        case 'vediographer'.'ede-kwara'.'Kwara':
                      header("location:ede-kwaravediographer.php");
                        break;
                        
                        case 'vediographer'.'ekiti-kwara'.'Kwara':
                      header("location:ekiti-kwaravediographer.php");
                        break;
                        
                        case 'vediographer'.'ifelodun-kwara'.'Kwara':
                      header("location:ifelodun-kwaravediographer.php");
                        break;
                        
                        case 'vediographer'.'ilorin'.'Kwara':
                      header("location:ilorinvediographer.php");
                        break;
                        
                         case 'vediographer'.'irepodun-kwara'.'Kwara':
                      header("location:irepodun-kwaravediographer.php");
                        break;
                        
                         case 'vediographer'.'isin'.'Kwara':
                      header("location:isinvediographer.php");
                        break;

                          case 'vediographer'.'kaiama'.'Kwara':                
                      header("location:kaiamavediographer.php");                   
                        break;

                         case 'vediographer'.'moro'.'Kwara':                
                      header("location:morovediographer.php");                   
                        break;

                         case 'vediographer'.'offa'.'Kwara':                
                      header("location:offavediographer.php");                   
                        break;

                         case 'vediographer'.'oke-ero'.'Kwara':                
                      header("location:oke-erovediographer.php");                   
                        break;

                         case 'vediographer'.'oyun'.'Kwara':                
                      header("location:oyunvediographer.php");                   
                        break;

                         case 'vediographer'.'pategi'.'Kwara':                
                      header("location:pategivediographer.php");                   
                        break;

                      
                      

                

                        #END VEDIOGRAPHERS LOCATION


                        #BEGINING CATERERS LOCATION
                        case 'caterers'.'asa-kwara'.'Kwara':
                      header("location:asa-kwaracaterers.php");
                        break;
                        
                         case 'caterers'.'baruten'.'Kwara':
                      header("location:barutencaterers.php");
                        break;
                        
                         case 'caterers'.'ede-kwara'.'Kwara':
                      header("location:ede-kwaracaterers.php");
                        break;
                        
                        
                         case 'caterers'.'ekiti-kwara'.'Kwara':
                      header("location:ekiti-kwaracaterers.php");
                        break;
                        
                         case 'caterers'.'ifelodun-kwara'.'Kwara':
                      header("location:ifelodun-kwaracaterers.php");
                        break;
                        
                         case 'caterers'.'ilorin'.'Kwara':
                      header("location:ilorincaterers.php");
                        break;
                        
                          case 'caterers'.'isin'.'Kwara':
                      header("location:isincaterers.php");
                        break;
                        
                           case 'caterers'.'irepodun-kwara'.'Kwara':
                      header("location:irepodun-kwaracaterers.php");
                        break;

                          case 'caterers'.'kaiama'.'Kwara':                
                      header("location:kaiamacaterers.php");                   
                        break;

                          case 'caterers'.'moro'.'Kwara':                
                      header("location:morocaterers.php");                   
                        break;

                          case 'caterers'.'offa'.'Kwara':                
                      header("location:offacaterers.php");                   
                        break;

                          case 'caterers'.'oke-ero'.'Kwara':                
                      header("location:oke-erocaterers.php");                   
                        break;

                          case 'caterers'.'oyun'.'Kwara':                
                      header("location:oyuncaterers.php");                   
                        break;

                          case 'caterers'.'pategi'.'Kwara':                
                      header("location:pategicaterers.php");                   
                        break;


                      
                        

                        #END CATERERS LOCATION


                        #BEGINING WINESELLER LOCATION
                        case 'wineseller'.'asa-kwara'.'Kwara':
                      header("location:asa-kwarawineseller.php");
                        break;
                        
                        case 'wineseller'.'baruten'.'Kwara':
                      header("location:barutenwineseller.php");
                        break;
                        
                         case 'wineseller'.'ede-kwara'.'Kwara':
                      header("location:ede-kwarawineseller.php");
                        break;
                        
                         case 'wineseller'.'ekiti-kwara'.'Kwara':
                      header("location:ekiti-kwarawineseller.php");
                        break;
                        
                         case 'wineseller'.'ifelodun-kwara'.'Kwara':
                      header("location:ifelodun-kwarawineseller.php");
                        break;
                        
                    
                        
                         case 'wineseller'.'ilorin'.'Kwara':
                      header("location:ilorinwineseller.php");
                        break;
                        
                         case 'wineseller'.'isin'.'Kwara':
                      header("location:isinwineseller.php");
                        break;
                        
                         case 'wineseller'.'irepodun-kwara'.'Kwara':
                      header("location:irepodun-kwarawineseller.php");
                        break;

                            case 'wineseller'.'kaiama'.'Kwara':                
                      header("location:kaiamawineseller.php");                   
                        break;

                         case 'wineseller'.'moro'.'Kwara':                
                      header("location:morowineseller.php");                   
                        break;

                         case 'wineseller'.'offa'.'Kwara':                
                      header("location:offawineseller.php");                   
                        break;

                         case 'wineseller'.'oke-ero'.'Kwara':                
                      header("location:oke-erowineseller.php");                   
                        break;

                         case 'wineseller'.'oyun'.'Kwara':                
                      header("location:oyunwineseller.php");                   
                        break;

                         case 'wineseller'.'pategi'.'Kwara':                
                      header("location:pategiwineseller.php");                   
                        break;

                        

                       
                     

                        #END WINESELLER LOCATION


                      #BEGINING OF ENTERTAINER LOCATION
                        case 'entertainer'.'asa-kwara'.'Kwara':
                        header("location:asa-kwaraentertainer.php");
                        break;
                        
                        case 'entertainer'.'baruten'.'Kwara':
                        header("location:barutenentertainer.php");
                        break;
                        
                        case 'entertainer'.'ede-kwara'.'Kwara':
                        header("location:ede-kwaraentertainer.php");
                        break;
                        
                        case 'entertainer'.'ekiti-kwara'.'Kwara':
                        header("location:ekiti-kwaraentertainer.php");
                        break;
                        
                        case 'entertainer'.'ifelodun-kwara'.'Kwara':
                        header("location:ifelodun-kwaraentertainer.php");
                        break;
                        
                        case 'entertainer'.'ilorin'.'Kwara':
                        header("location:ilorinentertainer.php");
                        break;
                   
                        
                        case 'entertainer'.'isin'.'Kwara':
                        header("location:isinentertainer.php");
                        break;
                        
                        case 'entertainer'.'irepodun-kwara'.'Kwara':
                        header("location:irepodun-kwaraentertainer.php");
                        break;

                            case 'entertainer'.'kaiama'.'Kwara':               
                      header("location:kaiamaentertainer.php");                    
                        break;

                           case 'entertainer'.'moro'.'Kwara':               
                      header("location:moroentertainer.php");                    
                        break;

                           case 'entertainer'.'offa'.'Kwara':               
                      header("location:offaentertainer.php");                    
                        break;

                           case 'entertainer'.'oke-ero'.'Kwara':               
                      header("location:oke-eroentertainer.php");                    
                        break;

                           case 'entertainer'.'oyun'.'Kwara':               
                      header("location:oyunentertainer.php");                    
                        break;

                           case 'entertainer'.'pategi'.'Kwara':               
                      header("location:pategientertainer.php");                    
                        break;

                     

                       

                    
                        #END ENTERTAINER / MC LOCATION


                        #BEGINING MUSIC ARTIST LOCATION
                        case 'music'.'asa-kwara'.'Kwara':
                      header("location:asa-kwaramusicband.php");
                        break;
                        
                        case 'music'.'baruten'.'Kwara':
                      header("location:barutenmusicband.php");
                        break;
                        
                        case 'music'.'ede-kwara'.'Kwara':
                      header("location:ede-kwaramusicband.php");
                        break;
                        
                        case 'music'.'ekiti-kwara'.'Kwara':
                      header("location:ekiti-kwaramusicband.php");
                        break;
                        
                        
                        case 'music'.'ifelodun-kwara'.'Kwara':
                      header("location:ifelodun-kwaramusicband.php");
                        break;
                        
                        case 'music'.'ilorin'.'Kwara':
                      header("location:ilorinmusicband.php");
                        break;
                        
                          case 'music'.'isin'.'Kwara':
                      header("location:isinmusicband.php");
                        break;
                        
                           case 'music'.'irepodun-kwara'.'Kwara':
                      header("location:irepodun-kwaramusicband.php");
                        break;

                        case 'music'.'kaiama'.'Kwara':               
                      header("location:kaiamamusicband.php");                    
                        break;

                        case 'music'.'moro'.'Kwara':               
                      header("location:moromusicband.php");                    
                        break;

                        case 'music'.'offa'.'Kwara':               
                      header("location:offamusicband.php");                    
                        break;

                        case 'music'.'oke-ero'.'Kwara':               
                      header("location:oke-eromusicband.php");                    
                        break;

                        case 'music'.'oyun'.'Kwara':               
                      header("location:oyunmusicband.php");                    
                        break;

                        case 'music'.'pategi'.'Kwara':               
                      header("location:pategimusicband.php");                    
                        break;

                  
                        #END MUSIC ARTIST LOCATION


                      #BEGINING HALL DECORATORS LOCATION
                        case 'halldecorators'.'asa-kwara'.'Kwara':
                      header("location:asa-kwarahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'baruten'.'Kwara':
                      header("location:barutenhalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'ede-kwara'.'Kwara':
                      header("location:ede-kwarahalldecorators.php");
                        break;
                        
                        
                        case 'halldecorators'.'ekiti-kwara'.'Kwara':
                      header("location:ekiti-kwarahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'ifelodun-kwara'.'Kwara':
                      header("location:ifelodun-kwarahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'ilorin'.'Kwara':
                      header("location:ilorinhalldecorators.php");
                        break;
                        
                         case 'halldecorators'.'isin'.'Kwara':
                      header("location:isinhalldecorators.php");
                        break;
                        
                          case 'halldecorators'.'irepodun-kwara'.'Kwara':
                      header("location:irepodun-kwarahalldecorators.php");
                        break;

                          case 'halldecorators'.'kaiama'.'Kwara':                
                      header("location:kaiamahalldecorators.php");                   
                        break;

                         case 'halldecorators'.'moro'.'Kwara':                
                      header("location:morohalldecorators.php");                   
                        break;

                         case 'halldecorators'.'offa'.'Kwara':                
                      header("location:offahalldecorators.php");                   
                        break;

                         case 'halldecorators'.'oke-ero'.'Kwara':                
                      header("location:oke-erohalldecorators.php");                   
                        break;

                         case 'halldecorators'.'oyun'.'Kwara':                
                      header("location:oyunhalldecorators.php");                   
                        break;

                         case 'halldecorators'.'pategi'.'Kwara':                
                      header("location:pategihalldecorators.php");                   
                        break;

                      
                      

                        #END HALL DECORATORS LOCATION


                        #BEGINING Djs LOCATION
                        case 'dj'.'asa-kwara'.'Kwara':
                      header("location:asa-kwaradj.php");
                        break;
                        
                         case 'dj'.'baruten'.'Kwara':
                      header("location:barutendj.php");
                        break;
                        
                        case 'dj'.'ede-kwara'.'Kwara':
                      header("location:ede-kwaradj.php");
                        break;
                        
                        case 'dj'.'ekiti-kwara'.'Kwara':
                      header("location:ekiti-kwaradj.php");
                        break;
                        
                    
                        
                        case 'dj'.'ifelodun-kwara'.'Kwara':
                      header("location:ifelodun-kwaradj.php");
                        break;
                        
                        case 'dj'.'ilorin'.'Kwara':
                      header("location:ilorindj.php");
                        break;
                        
                        case 'dj'.'isin'.'Kwara':
                      header("location:isindj.php");
                        break;
                        
                        case 'dj'.'irepodun-kwara'.'Kwara':
                      header("location:irepodun-kwaradj.php");
                        break;

                            case 'dj'.'kaiama'.'Kwara':                
                      header("location:kaiamadj.php");                   
                        break;

                             case 'dj'.'moro'.'Kwara':                
                      header("location:morodj.php");                   
                        break;

                             case 'dj'.'offa'.'Kwara':                
                      header("location:offadj.php");                   
                        break;

                             case 'dj'.'oke-ero'.'Kwara':                
                      header("location:oke-erodj.php");                   
                        break;

                             case 'dj'.'oyun'.'Kwara':                
                      header("location:oyundj.php");                   
                        break;

                             case 'dj'.'pategi'.'Kwara':                
                      header("location:pategidj.php");                   
                        break;

                     
                       

                        #END Djs LOCATION
                      

                        #BEGINING MARKUP LOCATION
                        case 'markup'.'asa-kwara'.'Kwara':
                      header("location:asa-kwaramarkup.php");
                        break;
                        
                         case 'markup'.'baruten'.'Kwara':
                      header("location:barutenmarkup.php");
                        break;
                        
                   
                        
                          case 'markup'.'ede-kwara'.'Kwara':
                      header("location:ede-kwaramarkup.php");
                        break;
                        
                          case 'markup'.'ekiti-kwara'.'Kwara':
                      header("location:ekiti-kwaramarkup.php");
                        break;
                        
                          case 'markup'.'ifelodun-kwara'.'Kwara':
                      header("location:ifelodun-kwaramarkup.php");
                        break;
                        
                          case 'markup'.'ilorin'.'Kwara':
                      header("location:ilorinmarkup.php");
                        break;
                        
                        
                        case 'markup'.'isin'.'Kwara':
                      header("location:isinmarkup.php");
                        break;
                        
                        case 'markup'.'irepodun-kwara'.'Kwara':
                      header("location:irepodun-kwaramarkup.php");
                        break;


                        case 'markup'.'kaiama'.'Kwara':                
                      header("location:kaiamamarkup.php");                   
                        break;

                        case 'markup'.'moro'.'Kwara':                
                      header("location:moromarkup.php");                   
                        break;


                        case 'markup'.'offa'.'Kwara':                
                      header("location:offamarkup.php");                   
                        break;

                        case 'markup'.'oke-ero'.'Kwara':                
                      header("location:oke-eromarkup.php");                   
                        break;

                        case 'markup'.'oyun'.'Kwara':                
                      header("location:oyunmarkup.php");                   
                        break;


                        case 'markup'.'pategi'.'Kwara':                
                      header("location:pategimarkup.php");                   
                        break;

                        #END MARKUP LOCATION

                      #Kwara STATE ENDING





                                              #Edo STATE BEGINING

                         case 'photographer'.'akoko-edo'.'Edo':
                      header("location:akoko-edophotogra.php");
                        break;
                        
                         case 'photographer'.'egor-edo'.'Edo':
                      header("location:egor-edophotogra.php");
                        break;
                        
                        case 'photographer'.'esan-edo'.'Edo':
                      header("location:esan-edophotogra.php");
                        break;
                        
                         case 'photographer'.'etsako-edo'.'Edo':
                      header("location:etsako-edophotogra.php");
                        break;

                        case 'photographer'.'ivia-edo'.'Edo':                
                      header("location:ivia-edophotogra.php");                     
                        break;
                        
                          case 'photographer'.'orhionwon-edo'.'Edo':                
                      header("location:orhionwon-edophotogra.php");                     
                        break;
                        
                          case 'photographer'.'ovia-edo'.'Edo':                
                      header("location:ovia-edophotogra.php");                     
                        break;
                        
                          case 'photographer'.'owan-edo'.'Edo':                
                      header("location:owan-edophotogra.php");                     
                        break;
                        
                          case 'photographer'.'uhunwonde-edo'.'Edo':                
                      header("location:uhunwonde-edophotogra.php");                     
                        break;
                        
                 
                

                        #END PHOTGRAPHER LOCATION



                        #BEGINING VEDIOGRAPHERS LOCATION
                        case 'vediographer'.'akoko-edo'.'Edo':
                      header("location:akoko-edovediographer.php");
                        break;
                        
                        
                         case 'vediographer'.'egor-edo'.'Edo':
                      header("location:egor-edovediographer.php");
                        break;
                        
                        case 'vediographer'.'esan-edo'.'Edo':
                      header("location:esan-edovediographer.php");
                        break;
                        
                        case 'vediographer'.'etsako-edo'.'Edo':
                      header("location:etsako-edovediographer.php");
                        break;
                        
                        case 'vediographer'.'ivia-edo'.'Edo':
                      header("location:ivia-edovediographer.php");
                        break;
                        
                        case 'vediographer'.'orhionwon-edo'.'Edo':
                      header("location:orhionwon-edovediographer.php");
                        break;
                        
                         case 'vediographer'.'ovia-edo'.'Edo':
                      header("location:ovia-edovediographer.php");
                        break;
                        
                         case 'vediographer'.'owan-edo'.'Edo':
                      header("location:owan-edovediographer.php");
                        break;

                          case 'vediographer'.'uhunwonde-edo'.'Edo':                
                      header("location:uhunwonde-edovediographer.php");                   
                        break;
                        
               

                

                        #END VEDIOGRAPHERS LOCATION


                        #BEGINING CATERERS LOCATION
                        case 'caterers'.'akoko-edo'.'Edo':
                      header("location:akoko-edocaterers.php");
                        break;
                        
                         case 'caterers'.'egor-edo'.'Edo':
                      header("location:egor-edocaterers.php");
                        break;
                        
                         case 'caterers'.'esan-edo'.'Edo':
                      header("location:esan-edocaterers.php");
                        break;
                        
                  
                        
                         case 'caterers'.'etsako-edo'.'Edo':
                      header("location:etsako-edocaterers.php");
                        break;
                        
                         case 'caterers'.'ivia-edo'.'Edo':
                      header("location:ivia-edocaterers.php");
                        break;
                        
                         case 'caterers'.'orhionwon-edo'.'Edo':
                      header("location:orhionwon-edocaterers.php");
                        break;
                        
                          case 'caterers'.'owan-edo'.'Edo':
                      header("location:owan-edocaterers.php");
                        break;
                        
                           case 'caterers'.'ovia-edo'.'Edo':
                      header("location:ovia-edocaterers.php");
                        break;

                          case 'caterers'.'uhunwonde-edo'.'Edo':                
                      header("location:uhunwonde-edocaterers.php");                   
                        break;

                        

                        

                        #END CATERERS LOCATION


                        #BEGINING WINESELLER LOCATION
                        case 'wineseller'.'akoko-edo'.'Edo':
                      header("location:akoko-edowineseller.php");
                        break;
                        
                        case 'wineseller'.'egor-edo'.'Edo':
                      header("location:egor-edowineseller.php");
                        break;
                        
                         case 'wineseller'.'esan-edo'.'Edo':
                      header("location:esan-edowineseller.php");
                        break;
                        
                         case 'wineseller'.'etsako-edo'.'Edo':
                      header("location:etsako-edowineseller.php");
                        break;
                        
                         case 'wineseller'.'ivia-edo'.'Edo':
                      header("location:ivia-edowineseller.php");
                        break;
                        
                      
                        
                         case 'wineseller'.'orhionwon-edo'.'Edo':
                      header("location:orhionwon-edowineseller.php");
                        break;
                        
                         case 'wineseller'.'owan-edo'.'Edo':
                      header("location:owan-edowineseller.php");
                        break;
                        
                         case 'wineseller'.'ovia-edo'.'Edo':
                      header("location:ovia-edowineseller.php");
                        break;

                            case 'wineseller'.'uhunwonde-edo'.'Edo':                
                      header("location:uhunwonde-edowineseller.php");                   
                        break;


                     

                        #END WINESELLER LOCATION


                      #BEGINING OF ENTERTAINER LOCATION
                        case 'entertainer'.'akoko-edo'.'Edo':
                        header("location:akoko-edoentertainer.php");
                        break;
                        
                        case 'entertainer'.'egor-edo'.'Edo':
                        header("location:egor-edoentertainer.php");
                        break;
                        
                        case 'entertainer'.'esan-edo'.'Edo':
                        header("location:esan-edoentertainer.php");
                        break;
                        
                        case 'entertainer'.'etsako-edo'.'Edo':
                        header("location:etsako-edoentertainer.php");
                        break;
                        
                        case 'entertainer'.'ivia-edo'.'Edo':
                        header("location:ivia-edoentertainer.php");
                        break;
                        
                        case 'entertainer'.'orhionwon-edo'.'Edo':
                        header("location:orhionwon-edoentertainer.php");
                        break;
                        
                
                        case 'entertainer'.'owan-edo'.'Edo':
                        header("location:owan-edoentertainer.php");
                        break;
                        
                        case 'entertainer'.'ovia-edo'.'Edo':
                        header("location:ovia-edoentertainer.php");
                        break;

                            case 'entertainer'.'uhunwonde-edo'.'Edo':               
                      header("location:uhunwonde-edoentertainer.php");                    
                        break;


                    
                        #END ENTERTAINER / MC LOCATION


                        #BEGINING MUSIC ARTIST LOCATION
                        case 'music'.'akoko-edo'.'Edo':
                      header("location:akoko-edomusicband.php");
                        break;
                        
                        case 'music'.'egor-edo'.'Edo':
                      header("location:egor-edomusicband.php");
                        break;
                        
                        case 'music'.'esan-edo'.'Edo':
                      header("location:esan-edomusicband.php");
                        break;
                        
                        case 'music'.'etsako-edo'.'Edo':
                      header("location:etsako-edomusicband.php");
                        break;
                  
                        
                        case 'music'.'ivia-edo'.'Edo':
                      header("location:ivia-edomusicband.php");
                        break;
                        
                        case 'music'.'orhionwon-edo'.'Edo':
                      header("location:orhionwon-edomusicband.php");
                        break;
                        
                          case 'music'.'owan-edo'.'Edo':
                      header("location:owan-edomusicband.php");
                        break;
                        
                           case 'music'.'ovia-edo'.'Edo':
                      header("location:ovia-edomusicband.php");
                        break;

                        case 'music'.'uhunwonde-edo'.'Edo':               
                      header("location:uhunwonde-edomusicband.php");                    
                        break;

                     

                      
                        #END MUSIC ARTIST LOCATION


                      #BEGINING HALL DECORATORS LOCATION
                        case 'halldecorators'.'akoko-edo'.'Edo':
                      header("location:akoko-edohalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'egor-edo'.'Edo':
                      header("location:egor-edohalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'esan-edo'.'Edo':
                      header("location:esan-edohalldecorators.php");
                        break;
                        
                   
                        
                        case 'halldecorators'.'etsako-edo'.'Edo':
                      header("location:etsako-edohalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'ivia-edo'.'Edo':
                      header("location:ivia-edohalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'orhionwon-edo'.'Edo':
                      header("location:orhionwon-edohalldecorators.php");
                        break;
                        
                         case 'halldecorators'.'owan-edo'.'Edo':
                      header("location:owan-edohalldecorators.php");
                        break;
                        
                          case 'halldecorators'.'ovia-edo'.'Edo':
                      header("location:ovia-edohalldecorators.php");
                        break;

                          case 'halldecorators'.'uhunwonde-edo'.'Edo':                
                      header("location:uhunwonde-edohalldecorators.php");                   
                        break;

                     

                        #END HALL DECORATORS LOCATION


                        #BEGINING Djs LOCATION
                        case 'dj'.'akoko-edo'.'Edo':
                      header("location:akoko-edodj.php");
                        break;
                        
                         case 'dj'.'egor-edo'.'Edo':
                      header("location:egor-edodj.php");
                        break;
                        
                        case 'dj'.'esan-edo'.'Edo':
                      header("location:esan-edodj.php");
                        break;
                        
                        case 'dj'.'etsako-edo'.'Edo':
                      header("location:etsako-edodj.php");
                        break;
                        
                     
                        
                        case 'dj'.'ivia-edo'.'Edo':
                      header("location:ivia-edodj.php");
                        break;
                        
                        case 'dj'.'orhionwon-edo'.'Edo':
                      header("location:orhionwon-edodj.php");
                        break;
                        
                        case 'dj'.'owan-edo'.'Edo':
                      header("location:owan-edodj.php");
                        break;
                        
                        case 'dj'.'ovia-edo'.'Edo':
                      header("location:ovia-edodj.php");
                        break;

                            case 'dj'.'uhunwonde-edo'.'Edo':                
                      header("location:uhunwonde-edodj.php");                   
                        break;


                        #END Djs LOCATION
                      

                        #BEGINING MARKUP LOCATION
                        case 'markup'.'akoko-edo'.'Edo':
                      header("location:akoko-edomarkup.php");
                        break;
                        
                         case 'markup'.'egor-edo'.'Edo':
                      header("location:egor-edomarkup.php");
                        break;
                        
                        
                          case 'markup'.'esan-edo'.'Edo':
                      header("location:esan-edomarkup.php");
                        break;
                        
                          case 'markup'.'etsako-edo'.'Edo':
                      header("location:etsako-edomarkup.php");
                        break;
                        
                          case 'markup'.'ivia-edo'.'Edo':
                      header("location:ivia-edomarkup.php");
                        break;
                        
                          case 'markup'.'orhionwon-edo'.'Edo':
                      header("location:orhionwon-edomarkup.php");
                        break;
                        
                        
                        case 'markup'.'owan-edo'.'Edo':
                      header("location:owan-edomarkup.php");
                        break;
                        
                        case 'markup'.'ovia-edo'.'Edo':
                      header("location:ovia-edomarkup.php");
                        break;


                        case 'markup'.'uhunwonde-edo'.'Edo':                
                      header("location:uhunwonde-edomarkup.php");                   
                        break;

                        #END MARKUP LOCATION

                      #Edo STATE ENDING





                                              #Enugu STATE BEGINING

                         case 'photographer'.'awgu-enugu'.'Enugu':
                      header("location:awgu-enuguphotogra.php");
                        break;
                        
                         case 'photographer'.'aninri-enugu'.'Enugu':
                      header("location:aninri-enuguphotogra.php");
                        break;
                        
                        case 'photographer'.'enugu'.'Enugu':
                      header("location:enuguphotogra.php");
                        break;
                        
                         case 'photographer'.'ezeagu-enugu'.'Enugu':
                      header("location:ezeagu-enuguphotogra.php");
                        break;

                        case 'photographer'.'igbo-eze-enugu'.'Enugu':                
                      header("location:igbo-eze-enuguphotogra.php");                     
                        break;
                        
                          case 'photographer'.'igbi-etiti-enugu'.'Enugu':                
                      header("location:igbi-etiti-enuguphotogra.php");                     
                        break;
                        
                          case 'photographer'.'nsukka-enugu'.'Enugu':                
                      header("location:nsukka-enuguphotogra.php");                     
                        break;
                        
                          case 'photographer'.'oji-river-enugu'.'Enugu':                
                      header("location:oji-river-enuguphotogra.php");                     
                        break;
                        
                          case 'photographer'.'undenu-enugu'.'Enugu':                
                      header("location:undenu-enuguphotogra.php");                     
                        break;
                        
                        case 'photographer'.'uzo-uwani-enugu'.'Enugu':                
                      header("location:uzo-uwani-enuguphotogra.php");                     
                        break;
                        
                          case 'photographer'.'udi-enugu'.'Enugu':                
                      header("location:udi-enuguphotogra.php");                     
                        break;

                      
                

                        #END PHOTGRAPHER LOCATION



                        #BEGINING VEDIOGRAPHERS LOCATION
                        case 'vediographer'.'awgu-enugu'.'Enugu':
                      header("location:awgu-enuguvediographer.php");
                        break;
                        
                        
                         case 'vediographer'.'aninri-enugu'.'Enugu':
                      header("location:aninri-enuguvediographer.php");
                        break;
                        
                        case 'vediographer'.'enugu'.'Enugu':
                      header("location:enuguvediographer.php");
                        break;
                        
                        case 'vediographer'.'ezeagu-enugu'.'Enugu':
                      header("location:ezeagu-enuguvediographer.php");
                        break;
                        
                        case 'vediographer'.'igbo-eze-enugu'.'Enugu':
                      header("location:igbo-eze-enuguvediographer.php");
                        break;
                        
                        case 'vediographer'.'igbi-etiti-enugu'.'Enugu':
                      header("location:igbi-etiti-enuguvediographer.php");
                        break;
                        
                         case 'vediographer'.'nsukka-enugu'.'Enugu':
                      header("location:nsukka-enuguvediographer.php");
                        break;
                        
                         case 'vediographer'.'oji-river-enugu'.'Enugu':
                      header("location:oji-river-enuguvediographer.php");
                        break;

                          case 'vediographer'.'undenu-enugu'.'Enugu':                
                      header("location:undenu-enuguvediographer.php");                   
                        break;
                        
                          case 'vediographer'.'uzo-uwani-enugu'.'Enugu':                
                      header("location:uzo-uwani-enuguvediographer.php");                   
                        break;
                        
                          case 'vediographer'.'udi-enugu'.'Enugu':                
                      header("location:udi-enuguvediographer.php");                   
                        break;

                      

                

                        #END VEDIOGRAPHERS LOCATION


                        #BEGINING CATERERS LOCATION
                        case 'caterers'.'awgu-enugu'.'Enugu':
                      header("location:awgu-enugucaterers.php");
                        break;
                        
                         case 'caterers'.'aninri-enugu'.'Enugu':
                      header("location:aninri-enugucaterers.php");
                        break;
                        
                         case 'caterers'.'enugu'.'Enugu':
                      header("location:enugucaterers.php");
                        break;
                        
                          case 'caterers'.'uzo-uwani-enugu'.'Enugu':
                      header("location:uzo-uwani-enugucaterers.php");
                        break;
                        
                          case 'caterers'.'udi-enugu'.'Enugu':
                      header("location:udi-enugucaterers.php");
                        break;
                        
                         case 'caterers'.'ezeagu-enugu'.'Enugu':
                      header("location:ezeagu-enugucaterers.php");
                        break;
                        
                         case 'caterers'.'igbo-eze-enugu'.'Enugu':
                      header("location:igbo-eze-enugucaterers.php");
                        break;
                        
                         case 'caterers'.'igbi-etiti-enugu'.'Enugu':
                      header("location:igbi-etiti-enugucaterers.php");
                        break;
                        
                          case 'caterers'.'oji-river-enugu'.'Enugu':
                      header("location:oji-river-enugucaterers.php");
                        break;
                        
                           case 'caterers'.'nsukka-enugu'.'Enugu':
                      header("location:nsukka-enugucaterers.php");
                        break;

                          case 'caterers'.'undenu-enugu'.'Enugu':                
                      header("location:undenu-enugucaterers.php");                   
                        break;

                     

                        

                        #END CATERERS LOCATION


                        #BEGINING WINESELLER LOCATION
                        case 'wineseller'.'awgu-enugu'.'Enugu':
                      header("location:awgu-enuguwineseller.php");
                        break;
                        
                        case 'wineseller'.'aninri-enugu'.'Enugu':
                      header("location:aninri-enuguwineseller.php");
                        break;
                        
                         case 'wineseller'.'enugu'.'Enugu':
                      header("location:enuguwineseller.php");
                        break;
                        
                         case 'wineseller'.'ezeagu-enugu'.'Enugu':
                      header("location:ezeagu-enuguwineseller.php");
                        break;
                        
                         case 'wineseller'.'igbo-eze-enugu'.'Enugu':
                      header("location:igbo-eze-enuguwineseller.php");
                        break;
                        
                           case 'wineseller'.'uzo-uwani-enugu'.'Enugu':
                      header("location:uzo-uwani-enuguwineseller.php");
                        break;
                        
                           case 'wineseller'.'udi-enugu'.'Enugu':
                      header("location:udi-enuguwineseller.php");
                        break;
                        
                         case 'wineseller'.'igbi-etiti-enugu'.'Enugu':
                      header("location:igbi-etiti-enuguwineseller.php");
                        break;
                        
                         case 'wineseller'.'oji-river-enugu'.'Enugu':
                      header("location:oji-river-enuguwineseller.php");
                        break;
                        
                         case 'wineseller'.'nsukka-enugu'.'Enugu':
                      header("location:nsukka-enuguwineseller.php");
                        break;

                            case 'wineseller'.'undenu-enugu'.'Enugu':                
                      header("location:undenu-enuguwineseller.php");                   
                        break;

                    

                        #END WINESELLER LOCATION


                      #BEGINING OF ENTERTAINER LOCATION
                        case 'entertainer'.'awgu-enugu'.'Enugu':
                        header("location:awgu-enuguentertainer.php");
                        break;
                        
                        case 'entertainer'.'aninri-enugu'.'Enugu':
                        header("location:aninri-enuguentertainer.php");
                        break;
                        
                        case 'entertainer'.'enugu'.'Enugu':
                        header("location:enuguentertainer.php");
                        break;
                        
                        case 'entertainer'.'ezeagu-enugu'.'Enugu':
                        header("location:ezeagu-enuguentertainer.php");
                        break;
                        
                        case 'entertainer'.'igbo-eze-enugu'.'Enugu':
                        header("location:igbo-eze-enuguentertainer.php");
                        break;
                        
                        case 'entertainer'.'igbi-etiti-enugu'.'Enugu':
                        header("location:igbi-etiti-enuguentertainer.php");
                        break;
                        
                        case 'entertainer'.'uzo-uwani-enugu'.'Enugu':
                        header("location:uzo-uwani-enuguentertainer.php");
                        break;
                        
                        
                        case 'entertainer'.'udi-enugu'.'Enugu':
                        header("location:udi-enuguentertainer.php");
                        break;
                        
                        case 'entertainer'.'oji-river-enugu'.'Enugu':
                        header("location:oji-river-enuguentertainer.php");
                        break;
                        
                        case 'entertainer'.'nsukka-enugu'.'Enugu':
                        header("location:nsukka-enuguentertainer.php");
                        break;

                            case 'entertainer'.'undenu-enugu'.'Enugu':               
                      header("location:undenu-enuguentertainer.php");                    
                        break;

                      
                        #END ENTERTAINER / MC LOCATION


                        #BEGINING MUSIC ARTIST LOCATION
                        case 'music'.'awgu-enugu'.'Enugu':
                      header("location:awgu-enugumusicband.php");
                        break;
                        
                        case 'music'.'aninri-enugu'.'Enugu':
                      header("location:aninri-enugumusicband.php");
                        break;
                        
                        case 'music'.'enugu'.'Enugu':
                      header("location:enugumusicband.php");
                        break;
                        
                        case 'music'.'ezeagu-enugu'.'Enugu':
                      header("location:ezeagu-enugumusicband.php");
                        break;
                        
                        case 'music'.'uzo-uwani-enugu'.'Enugu':
                      header("location:uzo-uwani-enugumusicband.php");
                        break;
                        
                        case 'music'.'udi-enugu'.'Enugu':
                      header("location:udi-enugumusicband.php");
                        break;
                        
                        
                        case 'music'.'igbo-eze-enugu'.'Enugu':
                      header("location:igbo-eze-enugumusicband.php");
                        break;
                        
                        case 'music'.'igbi-etiti-enugu'.'Enugu':
                      header("location:igbi-etiti-enugumusicband.php");
                        break;
                        
                          case 'music'.'oji-river-enugu'.'Enugu':
                      header("location:oji-river-enugumusicband.php");
                        break;
                        
                           case 'music'.'nsukka-enugu'.'Enugu':
                      header("location:nsukka-enugumusicband.php");
                        break;

                        case 'music'.'undenu-enugu'.'Enugu':               
                      header("location:undenu-enugumusicband.php");                    
                        break;

                      
                        #END MUSIC ARTIST LOCATION


                      #BEGINING HALL DECORATORS LOCATION
                        case 'halldecorators'.'awgu-enugu'.'Enugu':
                      header("location:awgu-enuguhalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'aninri-enugu'.'Enugu':
                      header("location:aninri-enuguhalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'enugu'.'Enugu':
                      header("location:enuguhalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'uzo-uwani-enugu'.'Enugu':
                      header("location:uzo-uwani-enuguhalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'udi-enugu'.'Enugu':
                      header("location:udi-enuguhalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'ezeagu-enugu'.'Enugu':
                      header("location:ezeagu-enuguhalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'igbo-eze-enugu'.'Enugu':
                      header("location:igbo-eze-enuguhalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'igbi-etiti-enugu'.'Enugu':
                      header("location:igbi-etiti-enuguhalldecorators.php");
                        break;
                        
                         case 'halldecorators'.'oji-river-enugu'.'Enugu':
                      header("location:oji-river-enuguhalldecorators.php");
                        break;
                        
                          case 'halldecorators'.'nsukka-enugu'.'Enugu':
                      header("location:nsukka-enuguhalldecorators.php");
                        break;

                          case 'halldecorators'.'undenu-enugu'.'Enugu':                
                      header("location:undenu-enuguhalldecorators.php");                   
                        break;

                    

                        #END HALL DECORATORS LOCATION


                        #BEGINING Djs LOCATION
                        case 'dj'.'awgu-enugu'.'Enugu':
                      header("location:awgu-enugudj.php");
                        break;
                        
                         case 'dj'.'aninri-enugu'.'Enugu':
                      header("location:aninri-enugudj.php");
                        break;
                        
                        case 'dj'.'Enugu'.'enugu':
                      header("location:enugudj.php");
                        break;
                        
                        case 'dj'.'ezeagu-enugu'.'Enugu':
                      header("location:ezeagu-enugudj.php");
                        break;
                        
                        case 'dj'.'uzo-uwani-enugu'.'Enugu':
                      header("location:uzo-uwani-enugudj.php");
                        break;
                        
                        case 'dj'.'udi-enugu'.'Enugu':
                      header("location:udi-enugudj.php");
                        break;
                        
                        case 'dj'.'igbo-eze-enugu'.'Enugu':
                      header("location:igbo-eze-enugudj.php");
                        break;
                        
                        case 'dj'.'igbi-etiti-enugu'.'Enugu':
                      header("location:igbi-etiti-enugudj.php");
                        break;
                        
                        case 'dj'.'oji-river-enugu'.'Enugu':
                      header("location:oji-river-enugudj.php");
                        break;
                        
                        case 'dj'.'nsukka-enugu'.'Enugu':
                      header("location:nsukka-enugudj.php");
                        break;

                            case 'dj'.'undenu-enugu'.'Enugu':                
                      header("location:undenu-enugudj.php");                   
                        break;

                      
                        #END Djs LOCATION
                      

                        #BEGINING MARKUP LOCATION
                        case 'markup'.'awgu-enugu'.'Enugu':
                      header("location:awgu-enugumarkup.php");
                        break;
                        
                         case 'markup'.'aninri-enugu'.'Enugu':
                      header("location:aninri-enugumarkup.php");
                        break;
                        
                        case 'markup'.'uzo-uwani-enugu'.'Enugu':
                      header("location:uzo-uwani-enugumarkup.php");
                        break;
                        
                        case 'markup'.'udi-enugu'.'Enugu':
                      header("location:udi-enugumarkup.php");
                        break;
                        
                          case 'markup'.'enugu'.'Enugu':
                      header("location:enugumarkup.php");
                        break;
                        
                          case 'markup'.'ezeagu-enugu'.'Enugu':
                      header("location:ezeagu-enugumarkup.php");
                        break;
                        
                          case 'markup'.'igbo-eze-enugu'.'Enugu':
                      header("location:igbo-eze-enugumarkup.php");
                        break;
                        
                          case 'markup'.'igbi-etiti-enugu'.'Enugu':
                      header("location:igbi-etiti-enugumarkup.php");
                        break;
                        
                        
                        case 'markup'.'oji-river-enugu'.'Enugu':
                      header("location:oji-river-enugumarkup.php");
                        break;
                        
                        case 'markup'.'nsukka-enugu'.'Enugu':
                      header("location:nsukka-enugumarkup.php");
                        break;


                        case 'markup'.'undenu-enugu'.'Enugu':                
                      header("location:undenu-enugumarkup.php");                   
                        break;
                        #END MARKUP LOCATION

                      #Enugu STATE ENDING






                                              #Ebonyi STATE BEGINING

                         case 'photographer'.'abakaliki-ebonyi'.'Ebonyi':
                      header("location:abakaliki-ebonyiphotogra.php");
                        break;
                        
                         case 'photographer'.'afikpo-ebonyi'.'Ebonyi':
                      header("location:afikpo-ebonyiphotogra.php");
                        break;
                        
                        case 'photographer'.'ebonyi'.'Ebonyi':
                      header("location:ebonyiphotogra.php");
                        break;
                        
                         case 'photographer'.'ezza-ebonyi'.'Ebonyi':
                      header("location:ezza-ebonyiphotogra.php");
                        break;

                        case 'photographer'.'ikwo-ebonyi'.'Ebonyi':                
                      header("location:ikwo-ebonyiphotogra.php");                     
                        break;
                        
                          case 'photographer'.'ishielu-ebonyi'.'Ebonyi':                
                      header("location:ishielu-ebonyiphotogra.php");                     
                        break;
                        
                          case 'photographer'.'ivo-ebonyi'.'Ebonyi':                
                      header("location:ivo-ebonyiphotogra.php");                     
                        break;
                        
                          case 'photographer'.'ohaozara-ebonyi'.'Ebonyi':                
                      header("location:ohaozara-ebonyiphotogra.php");                     
                        break;
                        
                          case 'photographer'.'ohaukwu-ebonyi'.'Ebonyi':                
                      header("location:ohaukwu-ebonyiphotogra.php");                     
                        break;
                        
                        case 'photographer'.'onicha-ebonyi'.'Ebonyi':                
                      header("location:onicha-ebonyiphotogra.php");                     
                        break;
                        
                          case 'photographer'.'izzi-ebonyi'.'Ebonyi':                
                      header("location:izzi-ebonyiphotogra.php");                     
                        break;

                      
                

                        #END PHOTGRAPHER LOCATION



                        #BEGINING VEDIOGRAPHERS LOCATION
                        case 'vediographer'.'abakaliki-ebonyi'.'Ebonyi':
                      header("location:abakaliki-ebonyivediographer.php");
                        break;
                        
                        
                         case 'vediographer'.'afikpo-ebonyi'.'Ebonyi':
                      header("location:afikpo-ebonyivediographer.php");
                        break;
                        
                        case 'vediographer'.'ebonyi'.'Ebonyi':
                      header("location:ebonyivediographer.php");
                        break;
                        
                        case 'vediographer'.'ezza-ebonyi'.'Ebonyi':
                      header("location:ezza-ebonyivediographer.php");
                        break;
                        
                        case 'vediographer'.'ikwo-ebonyi'.'Ebonyi':
                      header("location:ikwo-ebonyivediographer.php");
                        break;
                        
                        case 'vediographer'.'ishielu-ebonyi'.'Ebonyi':
                      header("location:ishielu-ebonyivediographer.php");
                        break;
                        
                         case 'vediographer'.'ivo-ebonyi'.'Ebonyi':
                      header("location:ivo-ebonyivediographer.php");
                        break;
                        
                         case 'vediographer'.'ohaozara-ebonyi'.'Ebonyi':
                      header("location:ohaozara-ebonyivediographer.php");
                        break;

                          case 'vediographer'.'ohaukwu-ebonyi'.'Ebonyi':                
                      header("location:ohaukwu-ebonyivediographer.php");                   
                        break;
                        
                          case 'vediographer'.'onicha-ebonyi'.'Ebonyi':                
                      header("location:onicha-ebonyivediographer.php");                   
                        break;
                        
                          case 'vediographer'.'izzi-ebonyi'.'Ebonyi':                
                      header("location:izzi-ebonyivediographer.php");                   
                        break;

                      

                

                        #END VEDIOGRAPHERS LOCATION


                        #BEGINING CATERERS LOCATION
                        case 'caterers'.'abakaliki-ebonyi'.'Ebonyi':
                      header("location:abakaliki-ebonyicaterers.php");
                        break;
                        
                         case 'caterers'.'afikpo-ebonyi'.'Ebonyi':
                      header("location:afikpo-ebonyicaterers.php");
                        break;
                        
                         case 'caterers'.'ebonyi'.'Ebonyi':
                      header("location:ebonyicaterers.php");
                        break;
                        
                          case 'caterers'.'onicha-ebonyi'.'Ebonyi':
                      header("location:onicha-ebonyicaterers.php");
                        break;
                        
                          case 'caterers'.'izzi-ebonyi'.'Ebonyi':
                      header("location:izzi-ebonyicaterers.php");
                        break;
                        
                         case 'caterers'.'ezza-ebonyi'.'Ebonyi':
                      header("location:ezza-ebonyicaterers.php");
                        break;
                        
                         case 'caterers'.'ikwo-ebonyi'.'Ebonyi':
                      header("location:ikwo-ebonyicaterers.php");
                        break;
                        
                         case 'caterers'.'ishielu-ebonyi'.'Ebonyi':
                      header("location:ishielu-ebonyicaterers.php");
                        break;
                        
                          case 'caterers'.'ohaozara-ebonyi'.'Ebonyi':
                      header("location:ohaozara-ebonyicaterers.php");
                        break;
                        
                           case 'caterers'.'ivo-ebonyi'.'Ebonyi':
                      header("location:ivo-ebonyicaterers.php");
                        break;

                          case 'caterers'.'ohaukwu-ebonyi'.'Ebonyi':                
                      header("location:ohaukwu-ebonyicaterers.php");                   
                        break;

                     

                        

                        #END CATERERS LOCATION


                        #BEGINING WINESELLER LOCATION
                        case 'wineseller'.'abakaliki-ebonyi'.'Ebonyi':
                      header("location:abakaliki-ebonyiwineseller.php");
                        break;
                        
                        case 'wineseller'.'afikpo-ebonyi'.'Ebonyi':
                      header("location:afikpo-ebonyiwineseller.php");
                        break;
                        
                         case 'wineseller'.'ebonyi'.'Ebonyi':
                      header("location:ebonyiwineseller.php");
                        break;
                        
                         case 'wineseller'.'ezza-ebonyi'.'Ebonyi':
                      header("location:ezza-ebonyiwineseller.php");
                        break;
                        
                         case 'wineseller'.'ikwo-ebonyi'.'Ebonyi':
                      header("location:ikwo-ebonyiwineseller.php");
                        break;
                        
                           case 'wineseller'.'onicha-ebonyi'.'Ebonyi':
                      header("location:onicha-ebonyiwineseller.php");
                        break;
                        
                           case 'wineseller'.'izzi-ebonyi'.'Ebonyi':
                      header("location:izzi-ebonyiwineseller.php");
                        break;
                        
                         case 'wineseller'.'ishielu-ebonyi'.'Ebonyi':
                      header("location:ishielu-ebonyiwineseller.php");
                        break;
                        
                         case 'wineseller'.'ohaozara-ebonyi'.'Ebonyi':
                      header("location:ohaozara-ebonyiwineseller.php");
                        break;
                        
                         case 'wineseller'.'ivo-ebonyi'.'Ebonyi':
                      header("location:ivo-ebonyiwineseller.php");
                        break;

                            case 'wineseller'.'ohaukwu-ebonyi'.'Ebonyi':                
                      header("location:ohaukwu-ebonyiwineseller.php");                   
                        break;

                    

                        #END WINESELLER LOCATION


                      #BEGINING OF ENTERTAINER LOCATION
                        case 'entertainer'.'abakaliki-ebonyi'.'Ebonyi':
                        header("location:abakaliki-ebonyientertainer.php");
                        break;
                        
                        case 'entertainer'.'afikpo-ebonyi'.'Ebonyi':
                        header("location:afikpo-ebonyientertainer.php");
                        break;
                        
                        case 'entertainer'.'ebonyi'.'Ebonyi':
                        header("location:ebonyientertainer.php");
                        break;
                        
                        case 'entertainer'.'ezza-ebonyi'.'Ebonyi':
                        header("location:ezza-ebonyientertainer.php");
                        break;
                        
                        case 'entertainer'.'ikwo-ebonyi'.'Ebonyi':
                        header("location:ikwo-ebonyientertainer.php");
                        break;
                        
                        case 'entertainer'.'ishielu-ebonyi'.'Ebonyi':
                        header("location:ishielu-ebonyientertainer.php");
                        break;
                        
                        case 'entertainer'.'onicha-ebonyi'.'Ebonyi':
                        header("location:onicha-ebonyientertainer.php");
                        break;
                        
                        
                        case 'entertainer'.'izzi-ebonyi'.'Ebonyi':
                        header("location:izzi-ebonyientertainer.php");
                        break;
                        
                        case 'entertainer'.'ohaozara-ebonyi'.'Ebonyi':
                        header("location:ohaozara-ebonyientertainer.php");
                        break;
                        
                        case 'entertainer'.'ivo-ebonyi'.'Ebonyi':
                        header("location:ivo-ebonyientertainer.php");
                        break;

                            case 'entertainer'.'ohaukwu-ebonyi'.'Ebonyi':               
                      header("location:ohaukwu-ebonyientertainer.php");                    
                        break;

                      
                        #END ENTERTAINER / MC LOCATION


                        #BEGINING MUSIC ARTIST LOCATION
                        case 'music'.'abakaliki-ebonyi'.'Ebonyi':
                      header("location:abakaliki-ebonyimusicband.php");
                        break;
                        
                        case 'music'.'afikpo-ebonyi'.'Ebonyi':
                      header("location:afikpo-ebonyimusicband.php");
                        break;
                        
                        case 'music'.'ebonyi'.'Ebonyi':
                      header("location:ebonyimusicband.php");
                        break;
                        
                        case 'music'.'ezza-ebonyi'.'Ebonyi':
                      header("location:ezza-ebonyimusicband.php");
                        break;
                        
                        case 'music'.'onicha-ebonyi'.'Ebonyi':
                      header("location:onicha-ebonyimusicband.php");
                        break;
                        
                        case 'music'.'izzi-ebonyi'.'Ebonyi':
                      header("location:izzi-ebonyimusicband.php");
                        break;
                        
                        
                        case 'music'.'ikwo-ebonyi'.'Ebonyi':
                      header("location:ikwo-ebonyimusicband.php");
                        break;
                        
                        case 'music'.'ishielu-ebonyi'.'Ebonyi':
                      header("location:ishielu-ebonyimusicband.php");
                        break;
                        
                          case 'music'.'ohaozara-ebonyi'.'Ebonyi':
                      header("location:ohaozara-ebonyimusicband.php");
                        break;
                        
                           case 'music'.'ivo-ebonyi'.'Ebonyi':
                      header("location:ivo-ebonyimusicband.php");
                        break;

                        case 'music'.'ohaukwu-ebonyi'.'Ebonyi':               
                      header("location:ohaukwu-ebonyimusicband.php");                    
                        break;

                      
                        #END MUSIC ARTIST LOCATION


                      #BEGINING HALL DECORATORS LOCATION
                        case 'halldecorators'.'abakaliki-ebonyi'.'Ebonyi':
                      header("location:abakaliki-ebonyihalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'afikpo-ebonyi'.'Ebonyi':
                      header("location:afikpo-ebonyihalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'ebonyi'.'Ebonyi':
                      header("location:ebonyihalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'onicha-ebonyi'.'Ebonyi':
                      header("location:onicha-ebonyihalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'izzi-ebonyi'.'Ebonyi':
                      header("location:izzi-ebonyihalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'ezza-ebonyi'.'Ebonyi':
                      header("location:ezza-ebonyihalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'ikwo-ebonyi'.'Ebonyi':
                      header("location:ikwo-ebonyihalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'ishielu-ebonyi'.'Ebonyi':
                      header("location:ishielu-ebonyihalldecorators.php");
                        break;
                        
                         case 'halldecorators'.'ohaozara-ebonyi'.'Ebonyi':
                      header("location:ohaozara-ebonyihalldecorators.php");
                        break;
                        
                          case 'halldecorators'.'ivo-ebonyi'.'Ebonyi':
                      header("location:ivo-ebonyihalldecorators.php");
                        break;

                          case 'halldecorators'.'ohaukwu-ebonyi'.'Ebonyi':                
                      header("location:ohaukwu-ebonyihalldecorators.php");                   
                        break;

                    

                        #END HALL DECORATORS LOCATION


                        #BEGINING Djs LOCATION
                        case 'dj'.'abakaliki-ebonyi'.'Ebonyi':
                      header("location:abakaliki-ebonyidj.php");
                        break;
                        
                         case 'dj'.'afikpo-ebonyi'.'Ebonyi':
                      header("location:afikpo-ebonyidj.php");
                        break;
                        
                        case 'dj'.'ebonyi'.'Ebonyi':
                      header("location:ebonyidj.php");
                        break;
                        
                        case 'dj'.'ezza-ebonyi'.'Ebonyi':
                      header("location:ezza-ebonyidj.php");
                        break;
                        
                        case 'dj'.'onicha-ebonyi'.'Ebonyi':
                      header("location:onicha-ebonyidj.php");
                        break;
                        
                        case 'dj'.'izzi-ebonyi'.'Ebonyi':
                      header("location:izzi-ebonyidj.php");
                        break;
                        
                        case 'dj'.'ikwo-ebonyi'.'Ebonyi':
                      header("location:ikwo-ebonyidj.php");
                        break;
                        
                        case 'dj'.'ishielu-ebonyi'.'Ebonyi':
                      header("location:ishielu-ebonyidj.php");
                        break;
                        
                        case 'dj'.'ohaozara-ebonyi'.'Ebonyi':
                      header("location:ohaozara-ebonyidj.php");
                        break;
                        
                        case 'dj'.'ivo-ebonyi'.'Ebonyi':
                      header("location:ivo-ebonyidj.php");
                        break;

                            case 'dj'.'ohaukwu-ebonyi'.'Ebonyi':                
                      header("location:ohaukwu-ebonyidj.php");                   
                        break;

                      
                        #END Djs LOCATION
                      

                        #BEGINING MARKUP LOCATION
                        case 'markup'.'abakaliki-ebonyi'.'Ebonyi':
                      header("location:abakaliki-ebonyimarkup.php");
                        break;
                        
                         case 'markup'.'afikpo-ebonyi'.'Ebonyi':
                      header("location:afikpo-ebonyimarkup.php");
                        break;
                        
                        case 'markup'.'onicha-ebonyi'.'Ebonyi':
                      header("location:onicha-ebonyimarkup.php");
                        break;
                        
                        case 'markup'.'izzi-ebonyi'.'Ebonyi':
                      header("location:izzi-ebonyimarkup.php");
                        break;
                        
                          case 'markup'.'ebonyi'.'Ebonyi':
                      header("location:ebonyimarkup.php");
                        break;
                        
                          case 'markup'.'ezza-ebonyi'.'Ebonyi':
                      header("location:ezza-ebonyimarkup.php");
                        break;
                        
                          case 'markup'.'ikwo-ebonyi'.'Ebonyi':
                      header("location:ikwo-ebonyimarkup.php");
                        break;
                        
                          case 'markup'.'ishielu-ebonyi'.'Ebonyi':
                      header("location:ishielu-ebonyimarkup.php");
                        break;
                        
                        
                        case 'markup'.'ohaozara-ebonyi'.'Ebonyi':
                      header("location:ohaozara-ebonyimarkup.php");
                        break;
                        
                        case 'markup'.'ivo-ebonyi'.'Ebonyi':
                      header("location:ivo-ebonyimarkup.php");
                        break;


                        case 'markup'.'ohaukwu-ebonyi'.'Ebonyi':                
                      header("location:ohaukwu-ebonyimarkup.php");                   
                        break;
                        #END MARKUP LOCATION

                      #Ebonyi STATE ENDING



                        

                                              #Gombe STATE BEGINING

                         case 'photographer'.'akko-gombe'.'Gombe':
                      header("location:akko-gombephotogra.php");
                        break;
                        
                         case 'photographer'.'balanga-gombe'.'Gombe':
                      header("location:balanga-gombephotogra.php");
                        break;
                        
                        case 'photographer'.'gombe'.'Gombe':
                      header("location:gombephotogra.php");
                        break;
                        
                         case 'photographer'.'billiri-gombe'.'Gombe':
                      header("location:billiri-gombephotogra.php");
                        break;

                        case 'photographer'.'dukku-gombe'.'Gombe':                
                      header("location:dukku-gombephotogra.php");                     
                        break;
                        
                          case 'photographer'.'dunakaye-gombe'.'Gombe':                
                      header("location:dunakaye-gombephotogra.php");                     
                        break;
                        
                          case 'photographer'.'kaltungo-gombe'.'Gombe':                
                      header("location:kaltungo-gombephotogra.php");                     
                        break;
                        
                          case 'photographer'.'kwami-gombe'.'Gombe':                
                      header("location:kwami-gombephotogra.php");                     
                        break;
                        
                          case 'photographer'.'nafada-bajoga-gombe'.'Gombe':                
                      header("location:nafada-bajoga-gombephotogra.php");                     
                        break;
                        
                        case 'photographer'.'shomgom-gombe'.'Gombe':                
                      header("location:shomgom-gombephotogra.php");                     
                        break;
                        
                          case 'photographer'.'yamaltu-deba-gombe'.'Gombe':                
                      header("location:yamaltu-deba-gombephotogra.php");                     
                        break;

                      
                

                        #END PHOTGRAPHER LOCATION



                        #BEGINING VEDIOGRAPHERS LOCATION
                        case 'vediographer'.'akko-gombe'.'Gombe':
                      header("location:akko-gombevediographer.php");
                        break;
                        
                        
                         case 'vediographer'.'balanga-gombe'.'Gombe':
                      header("location:balanga-gombevediographer.php");
                        break;
                        
                        case 'vediographer'.'gombe'.'Gombe':
                      header("location:gombevediographer.php");
                        break;
                        
                        case 'vediographer'.'billiri-gombe'.'Gombe':
                      header("location:billiri-gombevediographer.php");
                        break;
                        
                        case 'vediographer'.'dukku-gombe'.'Gombe':
                      header("location:dukku-gombevediographer.php");
                        break;
                        
                        case 'vediographer'.'dunakaye-gombe'.'Gombe':
                      header("location:dunakaye-gombevediographer.php");
                        break;
                        
                         case 'vediographer'.'kaltungo-gombe'.'Gombe':
                      header("location:kaltungo-gombevediographer.php");
                        break;
                        
                         case 'vediographer'.'kwami-gombe'.'Gombe':
                      header("location:kwami-gombevediographer.php");
                        break;

                          case 'vediographer'.'nafada-bajoga-gombe'.'Gombe':                
                      header("location:nafada-bajoga-gombevediographer.php");                   
                        break;
                        
                          case 'vediographer'.'shomgom-gombe'.'Gombe':                
                      header("location:shomgom-gombevediographer.php");                   
                        break;
                        
                          case 'vediographer'.'yamaltu-deba-gombe'.'Gombe':                
                      header("location:yamaltu-deba-gombevediographer.php");                   
                        break;

                      

                

                        #END VEDIOGRAPHERS LOCATION


                        #BEGINING CATERERS LOCATION
                        case 'caterers'.'akko-gombe'.'Gombe':
                      header("location:akko-gombecaterers.php");
                        break;
                        
                         case 'caterers'.'balanga-gombe'.'Gombe':
                      header("location:balanga-gombecaterers.php");
                        break;
                        
                         case 'caterers'.'gombe'.'Gombe':
                      header("location:gombecaterers.php");
                        break;
                        
                          case 'caterers'.'shomgom-gombe'.'Gombe':
                      header("location:shomgom-gombecaterers.php");
                        break;
                        
                          case 'caterers'.'yamaltu-deba-gombe'.'Gombe':
                      header("location:yamaltu-deba-gombecaterers.php");
                        break;
                        
                         case 'caterers'.'billiri-gombe'.'Gombe':
                      header("location:billiri-gombecaterers.php");
                        break;
                        
                         case 'caterers'.'dukku-gombe'.'Gombe':
                      header("location:dukku-gombecaterers.php");
                        break;
                        
                         case 'caterers'.'dunakaye-gombe'.'Gombe':
                      header("location:dunakaye-gombecaterers.php");
                        break;
                        
                          case 'caterers'.'kwami-gombe'.'Gombe':
                      header("location:kwami-gombecaterers.php");
                        break;
                        
                           case 'caterers'.'kaltungo-gombe'.'Gombe':
                      header("location:kaltungo-gombecaterers.php");
                        break;

                          case 'caterers'.'nafada-bajoga-gombe'.'Gombe':                
                      header("location:nafada-bajoga-gombecaterers.php");                   
                        break;

                     

                        

                        #END CATERERS LOCATION


                        #BEGINING WINESELLER LOCATION
                        case 'wineseller'.'akko-gombe'.'Gombe':
                      header("location:akko-gombewineseller.php");
                        break;
                        
                        case 'wineseller'.'balanga-gombe'.'Gombe':
                      header("location:balanga-gombewineseller.php");
                        break;
                        
                         case 'wineseller'.'gombe'.'Gombe':
                      header("location:gombewineseller.php");
                        break;
                        
                         case 'wineseller'.'billiri-gombe'.'Gombe':
                      header("location:billiri-gombewineseller.php");
                        break;
                        
                         case 'wineseller'.'dukku-gombe'.'Gombe':
                      header("location:dukku-gombewineseller.php");
                        break;
                        
                           case 'wineseller'.'shomgom-gombe'.'Gombe':
                      header("location:shomgom-gombewineseller.php");
                        break;
                        
                           case 'wineseller'.'yamaltu-deba-gombe'.'Gombe':
                      header("location:yamaltu-deba-gombewineseller.php");
                        break;
                        
                         case 'wineseller'.'dunakaye-gombe'.'Gombe':
                      header("location:dunakaye-gombewineseller.php");
                        break;
                        
                         case 'wineseller'.'kwami-gombe'.'Gombe':
                      header("location:kwami-gombewineseller.php");
                        break;
                        
                         case 'wineseller'.'kaltungo-gombe'.'Gombe':
                      header("location:kaltungo-gombewineseller.php");
                        break;

                            case 'wineseller'.'nafada-bajoga-gombe'.'Gombe':                
                      header("location:nafada-bajoga-gombewineseller.php");                   
                        break;

                    

                        #END WINESELLER LOCATION


                      #BEGINING OF ENTERTAINER LOCATION
                        case 'entertainer'.'akko-gombe'.'Gombe':
                        header("location:akko-gombeentertainer.php");
                        break;
                        
                        case 'entertainer'.'balanga-gombe'.'Gombe':
                        header("location:balanga-gombeentertainer.php");
                        break;
                        
                        case 'entertainer'.'gombe'.'Gombe':
                        header("location:gombeentertainer.php");
                        break;
                        
                        case 'entertainer'.'billiri-gombe'.'Gombe':
                        header("location:billiri-gombeentertainer.php");
                        break;
                        
                        case 'entertainer'.'dukku-gombe'.'Gombe':
                        header("location:dukku-gombeentertainer.php");
                        break;
                        
                        case 'entertainer'.'dunakaye-gombe'.'Gombe':
                        header("location:dunakaye-gombeentertainer.php");
                        break;
                        
                        case 'entertainer'.'shomgom-gombe'.'Gombe':
                        header("location:shomgom-gombeentertainer.php");
                        break;
                        
                        
                        case 'entertainer'.'yamaltu-deba-gombe'.'Gombe':
                        header("location:yamaltu-deba-gombeentertainer.php");
                        break;
                        
                        case 'entertainer'.'kwami-gombe'.'Gombe':
                        header("location:kwami-gombeentertainer.php");
                        break;
                        
                        case 'entertainer'.'kaltungo-gombe'.'Gombe':
                        header("location:kaltungo-gombeentertainer.php");
                        break;

                            case 'entertainer'.'nafada-bajoga-gombe'.'Gombe':               
                      header("location:nafada-bajoga-gombeentertainer.php");                    
                        break;

                      
                        #END ENTERTAINER / MC LOCATION


                        #BEGINING MUSIC ARTIST LOCATION
                        case 'music'.'akko-gombe'.'Gombe':
                      header("location:akko-gombemusicband.php");
                        break;
                        
                        case 'music'.'balanga-gombe'.'Gombe':
                      header("location:balanga-gombemusicband.php");
                        break;
                        
                        case 'music'.'gombe'.'Gombe':
                      header("location:gombemusicband.php");
                        break;
                        
                        case 'music'.'billiri-gombe'.'Gombe':
                      header("location:billiri-gombemusicband.php");
                        break;
                        
                        case 'music'.'shomgom-gombe'.'Gombe':
                      header("location:shomgom-gombemusicband.php");
                        break;
                        
                        case 'music'.'yamaltu-deba-gombe'.'Gombe':
                      header("location:yamaltu-deba-gombemusicband.php");
                        break;
                        
                        
                        case 'music'.'dukku-gombe'.'Gombe':
                      header("location:dukku-gombemusicband.php");
                        break;
                        
                        case 'music'.'dunakaye-gombe'.'Gombe':
                      header("location:dunakaye-gombemusicband.php");
                        break;
                        
                          case 'music'.'kwami-gombe'.'Gombe':
                      header("location:kwami-gombemusicband.php");
                        break;
                        
                           case 'music'.'kaltungo-gombe'.'Gombe':
                      header("location:kaltungo-gombemusicband.php");
                        break;

                        case 'music'.'nafada-bajoga-gombe'.'Gombe':               
                      header("location:nafada-bajoga-gombemusicband.php");                    
                        break;

                      
                        #END MUSIC ARTIST LOCATION


                      #BEGINING HALL DECORATORS LOCATION
                        case 'halldecorators'.'akko-gombe'.'Gombe':
                      header("location:akko-gombehalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'balanga-gombe'.'Gombe':
                      header("location:balanga-gombehalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'gombe'.'Gombe':
                      header("location:gombehalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'shomgom-gombe'.'Gombe':
                      header("location:shomgom-gombehalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'yamaltu-deba-gombe'.'Gombe':
                      header("location:yamaltu-deba-gombehalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'billiri-gombe'.'Gombe':
                      header("location:billiri-gombehalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'dukku-gombe'.'Gombe':
                      header("location:dukku-gombehalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'dunakaye-gombe'.'Gombe':
                      header("location:dunakaye-gombehalldecorators.php");
                        break;
                        
                         case 'halldecorators'.'kwami-gombe'.'Gombe':
                      header("location:kwami-gombehalldecorators.php");
                        break;
                        
                          case 'halldecorators'.'kaltungo-gombe'.'Gombe':
                      header("location:kaltungo-gombehalldecorators.php");
                        break;

                          case 'halldecorators'.'nafada-bajoga-gombe'.'Gombe':                
                      header("location:nafada-bajoga-gombehalldecorators.php");                   
                        break;

                    

                        #END HALL DECORATORS LOCATION


                        #BEGINING Djs LOCATION
                        case 'dj'.'akko-gombe'.'Gombe':
                      header("location:akko-gombedj.php");
                        break;
                        
                         case 'dj'.'balanga-gombe'.'Gombe':
                      header("location:balanga-gombedj.php");
                        break;
                        
                        case 'dj'.'gombe'.'Gombe':
                      header("location:gombedj.php");
                        break;
                        
                        case 'dj'.'billiri-gombe'.'Gombe':
                      header("location:billiri-gombedj.php");
                        break;
                        
                        case 'dj'.'shomgom-gombe'.'Gombe':
                      header("location:shomgom-gombedj.php");
                        break;
                        
                        case 'dj'.'yamaltu-deba-gombe'.'Gombe':
                      header("location:yamaltu-deba-gombedj.php");
                        break;
                        
                        case 'dj'.'dukku-gombe'.'Gombe':
                      header("location:dukku-gombedj.php");
                        break;
                        
                        case 'dj'.'dunakaye-gombe'.'Gombe':
                      header("location:dunakaye-gombedj.php");
                        break;
                        
                        case 'dj'.'kwami-gombe'.'Gombe':
                      header("location:kwami-gombedj.php");
                        break;
                        
                        case 'dj'.'kaltungo-gombe'.'Gombe':
                      header("location:kaltungo-gombedj.php");
                        break;

                            case 'dj'.'nafada-bajoga-gombe'.'Gombe':                
                      header("location:nafada-bajoga-gombedj.php");                   
                        break;

                      
                        #END Djs LOCATION
                      

                        #BEGINING MARKUP LOCATION
                        case 'markup'.'akko-gombe'.'Gombe':
                      header("location:akko-gombemarkup.php");
                        break;
                        
                         case 'markup'.'balanga-gombe'.'Gombe':
                      header("location:balanga-gombemarkup.php");
                        break;
                        
                        case 'markup'.'shomgom-gombe'.'Gombe':
                      header("location:shomgom-gombemarkup.php");
                        break;
                        
                        case 'markup'.'yamaltu-deba-gombe'.'Gombe':
                      header("location:yamaltu-deba-gombemarkup.php");
                        break;
                        
                          case 'markup'.'gombe'.'Gombe':
                      header("location:gombemarkup.php");
                        break;
                        
                          case 'markup'.'billiri-gombe'.'Gombe':
                      header("location:billiri-gombemarkup.php");
                        break;
                        
                          case 'markup'.'dukku-gombe'.'Gombe':
                      header("location:dukku-gombemarkup.php");
                        break;
                        
                          case 'markup'.'dunakaye-gombe'.'Gombe':
                      header("location:dunakaye-gombemarkup.php");
                        break;
                        
                        
                        case 'markup'.'kwami-gombe'.'Gombe':
                      header("location:kwami-gombemarkup.php");
                        break;
                        
                        case 'markup'.'kaltungo-gombe'.'Gombe':
                      header("location:kaltungo-gombemarkup.php");
                        break;


                        case 'markup'.'nafada-bajoga-gombe'.'Gombe':                
                      header("location:nafada-bajoga-gombemarkup.php");                   
                        break;

                  


                        #END MARKUP LOCATION

                      #Gombe STATE ENDING





                                              #Nassarawa STATE BEGINING

                         case 'photographer'.'akwanga-nassarawa'.'Nassarawa':
                      header("location:akwanga-nassarawaphotogra.php");
                        break;
                        
                         case 'photographer'.'awe-nassarawa'.'Nassarawa':
                      header("location:awe-nassarawaphotogra.php");
                        break;
                        
                        case 'photographer'.'doma-nassarawa'.'Nassarawa':
                      header("location:doma-nassarawaphotogra.php");
                        break;
                        
                         case 'photographer'.'karu-nassarawa'.'Nassarawa':
                      header("location:karu-nassarawaphotogra.php");
                        break;

                        case 'photographer'.'keana-nassarawa'.'Nassarawa':                
                      header("location:keana-nassarawaphotogra.php");                     
                        break;
                        
                          case 'photographer'.'keffi-nassarawa'.'Nassarawa':                
                      header("location:keffi-nassarawaphotogra.php");                     
                        break;
                        
                          case 'photographer'.'kokona-nassarawa'.'Nassarawa':                
                      header("location:kokona-nassarawaphotogra.php");                     
                        break;
                        
                          case 'photographer'.'nassarawa-nassarawa'.'Nassarawa':                
                      header("location:nassarawa-nassarawaphotogra.php");                     
                        break;
                        
                          case 'photographer'.'obi-nassarawa'.'Nassarawa':                
                      header("location:obi-nassarawaphotogra.php");                     
                        break;
                        
                        case 'photographer'.'toto-nassarawa'.'Nassarawa':                
                      header("location:toto-nassarawaphotogra.php");                     
                        break;
                        
                          case 'photographer'.'wamba-nassarawa'.'Nassarawa':                
                      header("location:wamba-nassarawaphotogra.php");                     
                        break;

                      
                

                        #END PHOTGRAPHER LOCATION



                        #BEGINING VEDIOGRAPHERS LOCATION
                        case 'vediographer'.'akwanga-nassarawa'.'Nassarawa':
                      header("location:akwanga-nassarawavediographer.php");
                        break;
                        
                        
                         case 'vediographer'.'awe-nassarawa'.'Nassarawa':
                      header("location:awe-nassarawavediographer.php");
                        break;
                        
                        case 'vediographer'.'doma-nassarawa'.'Nassarawa':
                      header("location:doma-nassarawavediographer.php");
                        break;
                        
                        case 'vediographer'.'karu-nassarawa'.'Nassarawa':
                      header("location:karu-nassarawavediographer.php");
                        break;
                        
                        case 'vediographer'.'keana-nassarawa'.'Nassarawa':
                      header("location:keana-nassarawavediographer.php");
                        break;
                        
                        case 'vediographer'.'keffi-nassarawa'.'Nassarawa':
                      header("location:keffi-nassarawavediographer.php");
                        break;
                        
                         case 'vediographer'.'kokona-nassarawa'.'Nassarawa':
                      header("location:kokona-nassarawavediographer.php");
                        break;
                        
                         case 'vediographer'.'nassarawa-nassarawa'.'Nassarawa':
                      header("location:nassarawa-nassarawavediographer.php");
                        break;

                          case 'vediographer'.'obi-nassarawa'.'Nassarawa':                
                      header("location:obi-nassarawavediographer.php");                   
                        break;
                        
                          case 'vediographer'.'toto-nassarawa'.'Nassarawa':                
                      header("location:toto-nassarawavediographer.php");                   
                        break;
                        
                          case 'vediographer'.'wamba-nassarawa'.'Nassarawa':                
                      header("location:wamba-nassarawavediographer.php");                   
                        break;

                      

                

                        #END VEDIOGRAPHERS LOCATION


                        #BEGINING CATERERS LOCATION
                        case 'caterers'.'akwanga-nassarawa'.'Nassarawa':
                      header("location:akwanga-nassarawacaterers.php");
                        break;
                        
                         case 'caterers'.'awe-nassarawa'.'Nassarawa':
                      header("location:awe-nassarawacaterers.php");
                        break;
                        
                         case 'caterers'.'doma-nassarawa'.'Nassarawa':
                      header("location:doma-nassarawacaterers.php");
                        break;
                        
                          case 'caterers'.'toto-nassarawa'.'Nassarawa':
                      header("location:toto-nassarawacaterers.php");
                        break;
                        
                          case 'caterers'.'wamba-nassarawa'.'Nassarawa':
                      header("location:wamba-nassarawacaterers.php");
                        break;
                        
                         case 'caterers'.'karu-nassarawa'.'Nassarawa':
                      header("location:karu-nassarawacaterers.php");
                        break;
                        
                         case 'caterers'.'keana-nassarawa'.'Nassarawa':
                      header("location:keana-nassarawacaterers.php");
                        break;
                        
                         case 'caterers'.'keffi-nassarawa'.'Nassarawa':
                      header("location:keffi-nassarawacaterers.php");
                        break;
                        
                          case 'caterers'.'nassarawa-nassarawa'.'Nassarawa':
                      header("location:nassarawa-nassarawacaterers.php");
                        break;
                        
                           case 'caterers'.'kokona-nassarawa'.'Nassarawa':
                      header("location:kokona-nassarawacaterers.php");
                        break;

                          case 'caterers'.'obi-nassarawa'.'Nassarawa':                
                      header("location:obi-nassarawacaterers.php");                   
                        break;

                     

                        

                        #END CATERERS LOCATION


                        #BEGINING WINESELLER LOCATION
                        case 'wineseller'.'akwanga-nassarawa'.'Nassarawa':
                      header("location:akwanga-nassarawawineseller.php");
                        break;
                        
                        case 'wineseller'.'awe-nassarawa'.'Nassarawa':
                      header("location:awe-nassarawawineseller.php");
                        break;
                        
                         case 'wineseller'.'doma-nassarawa'.'Nassarawa':
                      header("location:doma-nassarawawineseller.php");
                        break;
                        
                         case 'wineseller'.'karu-nassarawa'.'Nassarawa':
                      header("location:karu-nassarawawineseller.php");
                        break;
                        
                         case 'wineseller'.'keana-nassarawa'.'Nassarawa':
                      header("location:keana-nassarawawineseller.php");
                        break;
                        
                           case 'wineseller'.'toto-nassarawa'.'Nassarawa':
                      header("location:toto-nassarawawineseller.php");
                        break;
                        
                           case 'wineseller'.'wamba-nassarawa'.'Nassarawa':
                      header("location:wamba-nassarawawineseller.php");
                        break;
                        
                         case 'wineseller'.'keffi-nassarawa'.'Nassarawa':
                      header("location:keffi-nassarawawineseller.php");
                        break;
                        
                         case 'wineseller'.'nassarawa-nassarawa'.'Nassarawa':
                      header("location:nassarawa-nassarawawineseller.php");
                        break;
                        
                         case 'wineseller'.'kokona-nassarawa'.'Nassarawa':
                      header("location:kokona-nassarawawineseller.php");
                        break;

                            case 'wineseller'.'obi-nassarawa'.'Nassarawa':                
                      header("location:obi-nassarawawineseller.php");                   
                        break;

                    

                        #END WINESELLER LOCATION


                      #BEGINING OF ENTERTAINER LOCATION
                        case 'entertainer'.'akwanga-nassarawa'.'Nassarawa':
                        header("location:akwanga-nassarawaentertainer.php");
                        break;
                        
                        case 'entertainer'.'awe-nassarawa'.'Nassarawa':
                        header("location:awe-nassarawaentertainer.php");
                        break;
                        
                        case 'entertainer'.'doma-nassarawa'.'Nassarawa':
                        header("location:doma-nassarawaentertainer.php");
                        break;
                        
                        case 'entertainer'.'karu-nassarawa'.'Nassarawa':
                        header("location:karu-nassarawaentertainer.php");
                        break;
                        
                        case 'entertainer'.'keana-nassarawa'.'Nassarawa':
                        header("location:keana-nassarawaentertainer.php");
                        break;
                        
                        case 'entertainer'.'keffi-nassarawa'.'Nassarawa':
                        header("location:keffi-nassarawaentertainer.php");
                        break;
                        
                        case 'entertainer'.'toto-nassarawa'.'Nassarawa':
                        header("location:toto-nassarawaentertainer.php");
                        break;
                        
                        
                        case 'entertainer'.'wamba-nassarawa'.'Nassarawa':
                        header("location:wamba-nassarawaentertainer.php");
                        break;
                        
                        case 'entertainer'.'nassarawa-nassarawa'.'Nassarawa':
                        header("location:nassarawa-nassarawaentertainer.php");
                        break;
                        
                        case 'entertainer'.'kokona-nassarawa'.'Nassarawa':
                        header("location:kokona-nassarawaentertainer.php");
                        break;

                            case 'entertainer'.'obi-nassarawa'.'Nassarawa':               
                      header("location:obi-nassarawaentertainer.php");                    
                        break;

                      
                        #END ENTERTAINER / MC LOCATION


                        #BEGINING MUSIC ARTIST LOCATION
                        case 'music'.'akwanga-nassarawa'.'Nassarawa':
                      header("location:akwanga-nassarawamusicband.php");
                        break;
                        
                        case 'music'.'awe-nassarawa'.'Nassarawa':
                      header("location:awe-nassarawamusicband.php");
                        break;
                        
                        case 'music'.'doma-nassarawa'.'Nassarawa':
                      header("location:doma-nassarawamusicband.php");
                        break;
                        
                        case 'music'.'karu-nassarawa'.'Nassarawa':
                      header("location:karu-nassarawamusicband.php");
                        break;
                        
                        case 'music'.'toto-nassarawa'.'Nassarawa':
                      header("location:toto-nassarawamusicband.php");
                        break;
                        
                        case 'music'.'wamba-nassarawa'.'Nassarawa':
                      header("location:wamba-nassarawamusicband.php");
                        break;
                        
                        
                        case 'music'.'keana-nassarawa'.'Nassarawa':
                      header("location:keana-nassarawamusicband.php");
                        break;
                        
                        case 'music'.'keffi-nassarawa'.'Nassarawa':
                      header("location:keffi-nassarawamusicband.php");
                        break;
                        
                          case 'music'.'nassarawa-nassarawa'.'Nassarawa':
                      header("location:nassarawa-nassarawamusicband.php");
                        break;
                        
                           case 'music'.'kokona-nassarawa'.'Nassarawa':
                      header("location:kokona-nassarawamusicband.php");
                        break;

                        case 'music'.'obi-nassarawa'.'Nassarawa':               
                      header("location:obi-nassarawamusicband.php");                    
                        break;

                      
                        #END MUSIC ARTIST LOCATION


                      #BEGINING HALL DECORATORS LOCATION
                        case 'halldecorators'.'akwanga-nassarawa'.'Nassarawa':
                      header("location:akwanga-nassarawahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'awe-nassarawa'.'Nassarawa':
                      header("location:awe-nassarawahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'doma-nassarawa'.'Nassarawa':
                      header("location:doma-nassarawahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'toto-nassarawa'.'Nassarawa':
                      header("location:toto-nassarawahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'wamba-nassarawa'.'Nassarawa':
                      header("location:wamba-nassarawahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'karu-nassarawa'.'Nassarawa':
                      header("location:karu-nassarawahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'keana-nassarawa'.'Nassarawa':
                      header("location:keana-nassarawahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'keffi-nassarawa'.'Nassarawa':
                      header("location:keffi-nassarawahalldecorators.php");
                        break;
                        
                         case 'halldecorators'.'nassarawa-nassarawa'.'Nassarawa':
                      header("location:nassarawa-nassarawahalldecorators.php");
                        break;
                        
                          case 'halldecorators'.'kokona-nassarawa'.'Nassarawa':
                      header("location:kokona-nassarawahalldecorators.php");
                        break;

                          case 'halldecorators'.'obi-nassarawa'.'Nassarawa':                
                      header("location:obi-nassarawahalldecorators.php");                   
                        break;

                    

                        #END HALL DECORATORS LOCATION


                        #BEGINING Djs LOCATION
                        case 'dj'.'akwanga-nassarawa'.'Nassarawa':
                      header("location:akwanga-nassarawadj.php");
                        break;
                        
                         case 'dj'.'awe-nassarawa'.'Nassarawa':
                      header("location:awe-nassarawadj.php");
                        break;
                        
                        case 'dj'.'doma-nassarawa'.'Nassarawa':
                      header("location:doma-nassarawadj.php");
                        break;
                        
                        case 'dj'.'karu-nassarawa'.'Nassarawa':
                      header("location:karu-nassarawadj.php");
                        break;
                        
                        case 'dj'.'toto-nassarawa'.'Nassarawa':
                      header("location:toto-nassarawadj.php");
                        break;
                        
                        case 'dj'.'wamba-nassarawa'.'Nassarawa':
                      header("location:wamba-nassarawadj.php");
                        break;
                        
                        case 'dj'.'keana-nassarawa'.'Nassarawa':
                      header("location:keana-nassarawadj.php");
                        break;
                        
                        case 'dj'.'keffi-nassarawa'.'Nassarawa':
                      header("location:keffi-nassarawadj.php");
                        break;
                        
                        case 'dj'.'nassarawa-nassarawa'.'Nassarawa':
                      header("location:nassarawa-nassarawadj.php");
                        break;
                        
                        case 'dj'.'kokona-nassarawa'.'Nassarawa':
                      header("location:kokona-nassarawadj.php");
                        break;

                            case 'dj'.'obi-nassarawa'.'Nassarawa':                
                      header("location:obi-nassarawadj.php");                   
                        break;

                      
                        #END Djs LOCATION
                      

                        #BEGINING MARKUP LOCATION
                        case 'markup'.'akwanga-nassarawa'.'Nassarawa':
                      header("location:akwanga-nassarawamarkup.php");
                        break;
                        
                         case 'markup'.'awe-nassarawa'.'Nassarawa':
                      header("location:awe-nassarawamarkup.php");
                        break;
                        
                        case 'markup'.'toto-nassarawa'.'Nassarawa':
                      header("location:toto-nassarawamarkup.php");
                        break;
                        
                        case 'markup'.'wamba-nassarawa'.'Nassarawa':
                      header("location:wamba-nassarawamarkup.php");
                        break;
                        
                          case 'markup'.'doma-nassarawa'.'Nassarawa':
                      header("location:doma-nassarawamarkup.php");
                        break;
                        
                          case 'markup'.'karu-nassarawa'.'Nassarawa':
                      header("location:karu-nassarawamarkup.php");
                        break;
                        
                          case 'markup'.'keana-nassarawa'.'Nassarawa':
                      header("location:keana-nassarawamarkup.php");
                        break;
                        
                          case 'markup'.'keffi-nassarawa'.'Nassarawa':
                      header("location:keffi-nassarawamarkup.php");
                        break;
                        
                        
                        case 'markup'.'nassarawa-nassarawa'.'Nassarawa':
                      header("location:nassarawa-nassarawamarkup.php");
                        break;
                        
                        case 'markup'.'kokona-nassarawa'.'Nassarawa':
                      header("location:kokona-nassarawamarkup.php");
                        break;


                        case 'markup'.'obi-nassarawa'.'Nassarawa':                
                      header("location:obi-nassarawamarkup.php");                   
                        break;

                  


                        #END MARKUP LOCATION

                      #Nassarawa STATE ENDING




                                              #Plateau STATE BEGINING

                         case 'photographer'.'barkin-ladi-plateau'.'Plateau':
                      header("location:barkin-ladi-plateauphotogra.php");
                        break;
                        
                         case 'photographer'.'bassa-plateau'.'Plateau':
                      header("location:bassa-plateauphotogra.php");
                        break;
                        
                        case 'photographer'.'bokkos-plateau'.'Plateau':
                      header("location:bokkos-plateauphotogra.php");
                        break;
                        
                         case 'photographer'.'jos-plateau'.'Plateau':
                      header("location:jos-plateauphotogra.php");
                        break;

                        case 'photographer'.'kanam-plateau'.'Plateau':                
                      header("location:kanam-plateauphotogra.php");                     
                        break;
                        
                          case 'photographer'.'kiyom-plateau'.'Plateau':                
                      header("location:kiyom-plateauphotogra.php");                     
                        break;
                        
                          case 'photographer'.'langtang-plateau'.'Plateau':                
                      header("location:langtang-plateauphotogra.php");                     
                        break;
                        
                          case 'photographer'.'mangu-plateau'.'Plateau':                
                      header("location:mangu-plateauphotogra.php");                     
                        break;
                        
                          case 'photographer'.'mikang-plateau'.'Plateau':                
                      header("location:mikang-plateauphotogra.php");                     
                        break;
                        
                        case 'photographer'.'pankshin-plateau'.'Plateau':                
                      header("location:pankshin-plateauphotogra.php");                     
                        break;
                        
                          case 'photographer'.'shendam-plateau'.'Plateau':                
                      header("location:shendam-plateauphotogra.php");                     
                        break;


                         case 'photographer'.'wase-plateau'.'Plateau':                
                      header("location:wase-plateauphotogra.php");                     
                        break;

                      
                

                        #END PHOTGRAPHER LOCATION



                        #BEGINING VEDIOGRAPHERS LOCATION
                        case 'vediographer'.'barkin-ladi-plateau'.'Plateau':
                      header("location:barkin-ladi-plateauvediographer.php");
                        break;
                        
                        
                         case 'vediographer'.'bassa-plateau'.'Plateau':
                      header("location:bassa-plateauvediographer.php");
                        break;
                        
                        case 'vediographer'.'bokkos-plateau'.'Plateau':
                      header("location:bokkos-plateauvediographer.php");
                        break;
                        
                        case 'vediographer'.'jos-plateau'.'Plateau':
                      header("location:jos-plateauvediographer.php");
                        break;
                        
                        case 'vediographer'.'kanam-plateau'.'Plateau':
                      header("location:kanam-plateauvediographer.php");
                        break;
                        
                        case 'vediographer'.'kiyom-plateau'.'Plateau':
                      header("location:kiyom-plateauvediographer.php");
                        break;
                        
                         case 'vediographer'.'langtang-plateau'.'Plateau':
                      header("location:langtang-plateauvediographer.php");
                        break;
                        
                         case 'vediographer'.'mangu-plateau'.'Plateau':
                      header("location:mangu-plateauvediographer.php");
                        break;

                          case 'vediographer'.'mikang-plateau'.'Plateau':                
                      header("location:mikang-plateauvediographer.php");                   
                        break;
                        
                          case 'vediographer'.'pankshin-plateau'.'Plateau':                
                      header("location:pankshin-plateauvediographer.php");                   
                        break;
                        
                          case 'vediographer'.'shendam-plateau'.'Plateau':                
                      header("location:shendam-plateauvediographer.php");                   
                        break;

                        case 'vediographer'.'wase-plateau'.'Plateau':                
                      header("location:wase-plateauvediographer.php");                   
                        break;

                      

                

                        #END VEDIOGRAPHERS LOCATION


                        #BEGINING CATERERS LOCATION
                        case 'caterers'.'barkin-ladi-plateau'.'Plateau':
                      header("location:barkin-ladi-plateaucaterers.php");
                        break;
                        
                         case 'caterers'.'bassa-plateau'.'Plateau':
                      header("location:bassa-plateaucaterers.php");
                        break;
                        
                         case 'caterers'.'bokkos-plateau'.'Plateau':
                      header("location:bokkos-plateaucaterers.php");
                        break;
                        
                          case 'caterers'.'pankshin-plateau'.'Plateau':
                      header("location:pankshin-plateaucaterers.php");
                        break;
                        
                          case 'caterers'.'shendam-plateau'.'Plateau':
                      header("location:shendam-plateaucaterers.php");
                        break;
                        
                         case 'caterers'.'jos-plateau'.'Plateau':
                      header("location:jos-plateaucaterers.php");
                        break;
                        
                         case 'caterers'.'kanam-plateau'.'Plateau':
                      header("location:kanam-plateaucaterers.php");
                        break;
                        
                         case 'caterers'.'kiyom-plateau'.'Plateau':
                      header("location:kiyom-plateaucaterers.php");
                        break;
                        
                          case 'caterers'.'mangu-plateau'.'Plateau':
                      header("location:mangu-plateaucaterers.php");
                        break;
                        
                           case 'caterers'.'langtang-plateau'.'Plateau':
                      header("location:langtang-plateaucaterers.php");
                        break;

                          case 'caterers'.'mikang-plateau'.'Plateau':                
                      header("location:mikang-plateaucaterers.php");                   
                        break;


                           case 'caterers'.'wase-plateau'.'Plateau':                
                      header("location:wase-plateaucaterers.php");                   
                        break;

                     

                        

                        #END CATERERS LOCATION


                        #BEGINING WINESELLER LOCATION
                        case 'wineseller'.'barkin-ladi-plateau'.'Plateau':
                      header("location:barkin-ladi-plateauwineseller.php");
                        break;
                        
                        case 'wineseller'.'bassa-plateau'.'Plateau':
                      header("location:bassa-plateauwineseller.php");
                        break;
                        
                         case 'wineseller'.'bokkos-plateau'.'Plateau':
                      header("location:bokkos-plateauwineseller.php");
                        break;
                        
                         case 'wineseller'.'jos-plateau'.'Plateau':
                      header("location:jos-plateauwineseller.php");
                        break;
                        
                         case 'wineseller'.'kanam-plateau'.'Plateau':
                      header("location:kanam-plateauwineseller.php");
                        break;
                        
                           case 'wineseller'.'pankshin-plateau'.'Plateau':
                      header("location:pankshin-plateauwineseller.php");
                        break;
                        
                           case 'wineseller'.'shendam-plateau'.'Plateau':
                      header("location:shendam-plateauwineseller.php");
                        break;
                        
                         case 'wineseller'.'kiyom-plateau'.'Plateau':
                      header("location:kiyom-plateauwineseller.php");
                        break;
                        
                         case 'wineseller'.'mangu-plateau'.'Plateau':
                      header("location:mangu-plateauwineseller.php");
                        break;
                        
                         case 'wineseller'.'langtang-plateau'.'Plateau':
                      header("location:langtang-plateauwineseller.php");
                        break;

                            case 'wineseller'.'mikang-plateau'.'Plateau':                
                      header("location:mikang-plateauwineseller.php");                   
                        break;


                          case 'wineseller'.'wase-plateau'.'Plateau':                
                      header("location:wase-plateauwineseller.php");                   
                        break;

                    

                        #END WINESELLER LOCATION


                      #BEGINING OF ENTERTAINER LOCATION
                        case 'entertainer'.'barkin-ladi-plateau'.'Plateau':
                        header("location:barkin-ladi-plateauentertainer.php");
                        break;
                        
                        case 'entertainer'.'bassa-plateau'.'Plateau':
                        header("location:bassa-plateauentertainer.php");
                        break;
                        
                        case 'entertainer'.'bokkos-plateau'.'Plateau':
                        header("location:bokkos-plateauentertainer.php");
                        break;
                        
                        case 'entertainer'.'jos-plateau'.'Plateau':
                        header("location:jos-plateauentertainer.php");
                        break;
                        
                        case 'entertainer'.'kanam-plateau'.'Plateau':
                        header("location:kanam-plateauentertainer.php");
                        break;
                        
                        case 'entertainer'.'kiyom-plateau'.'Plateau':
                        header("location:kiyom-plateauentertainer.php");
                        break;
                        
                        case 'entertainer'.'pankshin-plateau'.'Plateau':
                        header("location:pankshin-plateauentertainer.php");
                        break;
                        
                        
                        case 'entertainer'.'shendam-plateau'.'Plateau':
                        header("location:shendam-plateauentertainer.php");
                        break;
                        
                        case 'entertainer'.'mangu-plateau'.'Plateau':
                        header("location:mangu-plateauentertainer.php");
                        break;
                        
                        case 'entertainer'.'langtang-plateau'.'Plateau':
                        header("location:langtang-plateauentertainer.php");
                        break;

                            case 'entertainer'.'mikang-plateau'.'Plateau':               
                      header("location:mikang-plateauentertainer.php");                    
                        break;


                          case 'entertainer'.'wase-plateau'.'Plateau':               
                      header("location:wase-plateauentertainer.php");                    
                        break;

                      
                        #END ENTERTAINER / MC LOCATION


                        #BEGINING MUSIC ARTIST LOCATION
                        case 'music'.'barkin-ladi-plateau'.'Plateau':
                      header("location:barkin-ladi-plateaumusicband.php");
                        break;
                        
                        case 'music'.'bassa-plateau'.'Plateau':
                      header("location:bassa-plateaumusicband.php");
                        break;
                        
                        case 'music'.'bokkos-plateau'.'Plateau':
                      header("location:bokkos-plateaumusicband.php");
                        break;
                        
                        case 'music'.'jos-plateau'.'Plateau':
                      header("location:jos-plateaumusicband.php");
                        break;
                        
                        case 'music'.'pankshin-plateau'.'Plateau':
                      header("location:pankshin-plateaumusicband.php");
                        break;
                        
                        case 'music'.'shendam-plateau'.'Plateau':
                      header("location:shendam-plateaumusicband.php");
                        break;
                        
                        
                        case 'music'.'kanam-plateau'.'Plateau':
                      header("location:kanam-plateaumusicband.php");
                        break;
                        
                        case 'music'.'kiyom-plateau'.'Plateau':
                      header("location:kiyom-plateaumusicband.php");
                        break;
                        
                          case 'music'.'mangu-plateau'.'Plateau':
                      header("location:mangu-plateaumusicband.php");
                        break;
                        
                           case 'music'.'langtang-plateau'.'Plateau':
                      header("location:langtang-plateaumusicband.php");
                        break;

                        case 'music'.'mikang-plateau'.'Plateau':               
                      header("location:mikang-plateaumusicband.php");                    
                        break;


                         case 'music'.'wase-plateau'.'Plateau':               
                      header("location:wase-plateaumusicband.php");                    
                        break;

                      
                        #END MUSIC ARTIST LOCATION


                      #BEGINING HALL DECORATORS LOCATION
                        case 'halldecorators'.'barkin-ladi-plateau'.'Plateau':
                      header("location:barkin-ladi-plateauhalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'bassa-plateau'.'Plateau':
                      header("location:bassa-plateauhalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'bokkos-plateau'.'Plateau':
                      header("location:bokkos-plateauhalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'pankshin-plateau'.'Plateau':
                      header("location:pankshin-plateauhalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'shendam-plateau'.'Plateau':
                      header("location:shendam-plateauhalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'jos-plateau'.'Plateau':
                      header("location:jos-plateauhalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'kanam-plateau'.'Plateau':
                      header("location:kanam-plateauhalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'kiyom-plateau'.'Plateau':
                      header("location:kiyom-plateauhalldecorators.php");
                        break;
                        
                         case 'halldecorators'.'mangu-plateau'.'Plateau':
                      header("location:mangu-plateauhalldecorators.php");
                        break;
                        
                          case 'halldecorators'.'langtang-plateau'.'Plateau':
                      header("location:langtang-plateauhalldecorators.php");
                        break;

                          case 'halldecorators'.'mikang-plateau'.'Plateau':                
                      header("location:mikang-plateauhalldecorators.php");                   
                        break;


                           case 'halldecorators'.'wase-plateau'.'Plateau':                
                      header("location:wase-plateauhalldecorators.php");                   
                        break;

                    

                        #END HALL DECORATORS LOCATION


                        #BEGINING Djs LOCATION
                        case 'dj'.'barkin-ladi-plateau'.'Plateau':
                      header("location:barkin-ladi-plateaudj.php");
                        break;
                        
                         case 'dj'.'bassa-plateau'.'Plateau':
                      header("location:bassa-plateaudj.php");
                        break;
                        
                        case 'dj'.'bokkos-plateau'.'Plateau':
                      header("location:bokkos-plateaudj.php");
                        break;
                        
                        case 'dj'.'jos-plateau'.'Plateau':
                      header("location:jos-plateaudj.php");
                        break;
                        
                        case 'dj'.'pankshin-plateau'.'Plateau':
                      header("location:pankshin-plateaudj.php");
                        break;
                        
                        case 'dj'.'shendam-plateau'.'Plateau':
                      header("location:shendam-plateaudj.php");
                        break;
                        
                        case 'dj'.'kanam-plateau'.'Plateau':
                      header("location:kanam-plateaudj.php");
                        break;
                        
                        case 'dj'.'kiyom-plateau'.'Plateau':
                      header("location:kiyom-plateaudj.php");
                        break;
                        
                        case 'dj'.'mangu-plateau'.'Plateau':
                      header("location:mangu-plateaudj.php");
                        break;
                        
                        case 'dj'.'langtang-plateau'.'Plateau':
                      header("location:langtang-plateaudj.php");
                        break;

                            case 'dj'.'mikang-plateau'.'Plateau':                
                      header("location:mikang-plateaudj.php");                   
                        break;


                          case 'dj'.'wase-plateau'.'Plateau':                
                      header("location:wase-plateaudj.php");                   
                        break;

                      
                        #END Djs LOCATION
                      

                        #BEGINING MARKUP LOCATION
                        case 'markup'.'barkin-ladi-plateau'.'Plateau':
                      header("location:barkin-ladi-plateaumarkup.php");
                        break;
                        
                         case 'markup'.'bassa-plateau'.'Plateau':
                      header("location:bassa-plateaumarkup.php");
                        break;
                        
                        case 'markup'.'pankshin-plateau'.'Plateau':
                      header("location:pankshin-plateaumarkup.php");
                        break;
                        
                        case 'markup'.'shendam-plateau'.'Plateau':
                      header("location:shendam-plateaumarkup.php");
                        break;
                        
                          case 'markup'.'bokkos-plateau'.'Plateau':
                      header("location:bokkos-plateaumarkup.php");
                        break;
                        
                          case 'markup'.'jos-plateau'.'Plateau':
                      header("location:jos-plateaumarkup.php");
                        break;
                        
                          case 'markup'.'kanam-plateau'.'Plateau':
                      header("location:kanam-plateaumarkup.php");
                        break;
                        
                          case 'markup'.'kiyom-plateau'.'Plateau':
                      header("location:kiyom-plateaumarkup.php");
                        break;
                        
                        
                        case 'markup'.'mangu-plateau'.'Plateau':
                      header("location:mangu-plateaumarkup.php");
                        break;
                        
                        case 'markup'.'langtang-plateau'.'Plateau':
                      header("location:langtang-plateaumarkup.php");
                        break;


                        case 'markup'.'mikang-plateau'.'Plateau':                
                      header("location:mikang-plateaumarkup.php");                   
                        break;


                         case 'markup'.'wase-plateau'.'Plateau':                
                      header("location:wase-plateaumarkup.php");                   
                        break;

                        #END MARKUP LOCATION

                      #Plateau STATE ENDING


                        

                                              #Abuja STATE BEGINING

                         case 'photographer'.'abaji-abuja'.'Abuja':
                      header("location:abaji-abujaphotogra.php");
                        break;
                        
                         case 'photographer'.'abuja-municipal'.'Abuja':
                      header("location:abuja-municipalphotogra.php");
                        break;
                        
                        
                         case 'photographer'.'gwagwalada-abuja'.'Abuja':
                      header("location:gwagwalada-abujaphotogra.php");
                        break;

                        
                          case 'photographer'.'kuje-abuja'.'Abuja':                
                      header("location:kuje-abujaphotogra.php");                     
                        break;
                        
                          case 'photographer'.'kwali-abuja'.'Abuja':                
                      header("location:kwali-abujaphotogra.php");                     
                        break;
                        
                         
                        #END PHOTGRAPHER LOCATION



                        #BEGINING VEDIOGRAPHERS LOCATION
                        case 'vediographer'.'abaji-abuja'.'Abuja':
                      header("location:abaji-abujavediographer.php");
                        break;
                        
                        
                         case 'vediographer'.'abuja-municipal'.'Abuja':
                      header("location:abuja-municipalvediographer.php");
                        break;
                        
                     
                        
                        case 'vediographer'.'gwagwalada-abuja'.'Abuja':
                      header("location:gwagwalada-abujavediographer.php");
                        break;
                        
                     
                        
                        case 'vediographer'.'kuje-abuja'.'Abuja':
                      header("location:kuje-abujavediographer.php");
                        break;
                        
                         case 'vediographer'.'kwali-abuja'.'Abuja':
                      header("location:kwali-abujavediographer.php");
                        break;
                        
                     

                        #END VEDIOGRAPHERS LOCATION


                        #BEGINING CATERERS LOCATION
                        case 'caterers'.'abaji-abuja'.'Abuja':
                      header("location:abaji-abujacaterers.php");
                        break;
                        
                         case 'caterers'.'abuja-municipal'.'Abuja':
                      header("location:abuja-municipalcaterers.php");
                        break;
                        
                      
                    
                         case 'caterers'.'gwagwalada-abuja'.'Abuja':
                      header("location:gwagwalada-abujacaterers.php");
                        break;
                      
                        
                         case 'caterers'.'kuje-abuja'.'Abuja':
                      header("location:kuje-abujacaterers.php");
                        break;
                        
                     
                           case 'caterers'.'kwali-abuja'.'Abuja':
                      header("location:kwali-abujacaterers.php");
                        break;


                  
                        

                        #END CATERERS LOCATION


                        #BEGINING WINESELLER LOCATION
                        case 'wineseller'.'abaji-abuja'.'Abuja':
                      header("location:abaji-abujawineseller.php");
                        break;
                        
                        case 'wineseller'.'abuja-municipal'.'Abuja':
                      header("location:abuja-municipalwineseller.php");
                        break;
                        
                       
                        
                         case 'wineseller'.'gwagwalada-abuja'.'Abuja':
                      header("location:gwagwalada-abujawineseller.php");
                        break;
                        
                  
                    
                         case 'wineseller'.'kuje-abuja'.'Abuja':
                      header("location:kuje-abujawineseller.php");
                        break;
                        
                        
                        
                         case 'wineseller'.'kwali-abuja'.'Abuja':
                      header("location:kwali-abujawineseller.php");
                        break;

                      

                       

                     

                        #END WINESELLER LOCATION


                      #BEGINING OF ENTERTAINER LOCATION
                        case 'entertainer'.'abaji-abuja'.'Abuja':
                        header("location:abaji-abujaentertainer.php");
                        break;
                        
                        case 'entertainer'.'abuja-municipal'.'Abuja':
                        header("location:abuja-municipalentertainer.php");
                        break;
                     
                        case 'entertainer'.'gwagwalada-abuja'.'Abuja':
                        header("location:gwagwalada-abujaentertainer.php");
                        break;
                        
                     
                        
                        case 'entertainer'.'kuje-abuja'.'Abuja':
                        header("location:kuje-abujaentertainer.php");
                        break;
                      
                        
                    
                        case 'entertainer'.'kwali-abuja'.'Abuja':
                        header("location:kwali-abujaentertainer.php");
                        break;



                    
                        #END ENTERTAINER / MC LOCATION


                        #BEGINING MUSIC ARTIST LOCATION
                        case 'music'.'abaji-abuja'.'Abuja':
                      header("location:abaji-abujamusicband.php");
                        break;
                        
                        case 'music'.'abuja-municipal'.'Abuja':
                      header("location:abuja-municipalmusicband.php");
                        break;
                        
                    
                        case 'music'.'gwagwalada-abuja'.'Abuja':
                      header("location:gwagwalada-abujamusicband.php");
                        break;
                 
                        
                        
                        case 'music'.'kuje-abuja'.'Abuja':
                      header("location:kuje-abujamusicband.php");
                        break;
                        
                         
                        
                           case 'music'.'kwali-abuja'.'Abuja':
                      header("location:kwali-abujamusicband.php");
                        break;

                        

                       

                      
                        #END MUSIC ARTIST LOCATION


                      #BEGINING HALL DECORATORS LOCATION
                        case 'halldecorators'.'abaji-abuja'.'Abuja':
                      header("location:abaji-abujahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'abuja-municipal'.'Abuja':
                      header("location:abuja-municipalhalldecorators.php");
                        break;
                        
                   
                     
                        
                        case 'halldecorators'.'gwagwalada-abuja'.'Abuja':
                      header("location:gwagwalada-abujahalldecorators.php");
                        break;
                        
                      
                        
                        case 'halldecorators'.'kuje-abuja'.'Abuja':
                      header("location:kuje-abujahalldecorators.php");
                        break;
                        
                      
                          case 'halldecorators'.'kwali-abuja'.'Abuja':
                      header("location:kwali-abujahalldecorators.php");
                        break;

                    

                        #END HALL DECORATORS LOCATION


                        #BEGINING Djs LOCATION
                        case 'dj'.'abaji-abuja'.'Abuja':
                      header("location:abaji-abujadj.php");
                        break;
                        
                         case 'dj'.'abuja-municipal'.'Abuja':
                      header("location:abuja-municipaldj.php");
                        break;
                        
                       
                        case 'dj'.'gwagwalada-abuja'.'Abuja':
                      header("location:gwagwalada-abujadj.php");
                        break;
                        
                      
          
                        
                        case 'dj'.'kuje-abuja'.'Abuja':
                      header("location:kuje-abujadj.php");
                        break;
                        
                   
                        
                        case 'dj'.'kwali-abuja'.'Abuja':
                      header("location:kwali-abujadj.php");
                        break;

                 

                        #END Djs LOCATION
                      

                        #BEGINING MARKUP LOCATION
                        case 'markup'.'abaji-abuja'.'Abuja':
                      header("location:abaji-abujamarkup.php");
                        break;
                        
                         case 'markup'.'abuja-municipal'.'Abuja':
                      header("location:abuja-municipalmarkup.php");
                        break;
                        
                       
               
                        
                          case 'markup'.'gwagwalada-abuja'.'Abuja':
                      header("location:gwagwalada-abujamarkup.php");
                        break;
                        
                       
                          case 'markup'.'kuje-abuja'.'Abuja':
                      header("location:kuje-abujamarkup.php");
                        break;
                        
                     
                        
                        case 'markup'.'kwali-abuja'.'Abuja':
                      header("location:kwali-abujamarkup.php");
                        break;
                        #END MARKUP LOCATION

                      #Abuja STATE ENDING



                        

                                              #Abia STATE BEGINING

                         case 'photographer'.'aba-abia'.'Abia':
                      header("location:aba-abiaphotogra.php");
                        break;
                        
                         case 'photographer'.'arochukwu-abia'.'Abia':
                      header("location:arochukwu-abiaphotogra.php");
                        break;
                        
                        case 'photographer'.'aiyekire-abia'.'Abia':
                      header("location:aiyekire-abiaphotogra.php");
                        break;
                        
                         case 'photographer'.'anka-abia'.'Abia':
                      header("location:anka-abiaphotogra.php");
                        break;

                        case 'photographer'.'bende-abia'.'Abia':                
                      header("location:bende-abiaphotogra.php");                     
                        break;
                        
                          case 'photographer'.'ngwa-abia'.'Abia':                
                      header("location:ngwa-abiaphotogra.php");                     
                        break;
                        
                          case 'photographer'.'ikwuano-abia'.'Abia':                
                      header("location:ikwuano-abiaphotogra.php");                     
                        break;
                        
                          case 'photographer'.'isiala-abia'.'Abia':                
                      header("location:isiala-abiaphotogra.php");                     
                        break;
                        
                          case 'photographer'.'isukwuato-abia'.'Abia':                
                      header("location:isukwuato-abiaphotogra.php");                     
                        break;
                        
                        case 'photographer'.'ukwa-abia'.'Abia':                
                      header("location:ukwa-abiaphotogra.php");                     
                        break;
                        
                          case 'photographer'.'umuahia-abia'.'Abia':                
                      header("location:umuahia-abiaphotogra.php");                     
                        break;



                      
                

                        #END PHOTGRAPHER LOCATION



                        #BEGINING VEDIOGRAPHERS LOCATION
                        case 'vediographer'.'aba-abia'.'Abia':
                      header("location:aba-abiavediographer.php");
                        break;
                        
                        
                         case 'vediographer'.'arochukwu-abia'.'Abia':
                      header("location:arochukwu-abiavediographer.php");
                        break;
                        
                        case 'vediographer'.'aiyekire-abia'.'Abia':
                      header("location:aiyekire-abiavediographer.php");
                        break;
                        
                        case 'vediographer'.'anka-abia'.'Abia':
                      header("location:anka-abiavediographer.php");
                        break;
                        
                        case 'vediographer'.'bende-abia'.'Abia':
                      header("location:bende-abiavediographer.php");
                        break;
                        
                        case 'vediographer'.'ngwa-abia'.'Abia':
                      header("location:ngwa-abiavediographer.php");
                        break;
                        
                         case 'vediographer'.'ikwuano-abia'.'Abia':
                      header("location:ikwuano-abiavediographer.php");
                        break;
                        
                         case 'vediographer'.'isiala-abia'.'Abia':
                      header("location:isiala-abiavediographer.php");
                        break;

                          case 'vediographer'.'isukwuato-abia'.'Abia':                
                      header("location:isukwuato-abiavediographer.php");                   
                        break;
                        
                          case 'vediographer'.'ukwa-abia'.'Abia':                
                      header("location:ukwa-abiavediographer.php");                   
                        break;
                        
                          case 'vediographer'.'umuahia-abia'.'Abia':                
                      header("location:umuahia-abiavediographer.php");                   
                        break;

                     

                      

                

                        #END VEDIOGRAPHERS LOCATION


                        #BEGINING CATERERS LOCATION
                        case 'caterers'.'aba-abia'.'Abia':
                      header("location:aba-abiacaterers.php");
                        break;
                        
                         case 'caterers'.'arochukwu-abia'.'Abia':
                      header("location:arochukwu-abiacaterers.php");
                        break;
                        
                         case 'caterers'.'aiyekire-abia'.'Abia':
                      header("location:aiyekire-abiacaterers.php");
                        break;
                        
                          case 'caterers'.'ukwa-abia'.'Abia':
                      header("location:ukwa-abiacaterers.php");
                        break;
                        
                          case 'caterers'.'umuahia-abia'.'Abia':
                      header("location:umuahia-abiacaterers.php");
                        break;
                        
                         case 'caterers'.'anka-abia'.'Abia':
                      header("location:anka-abiacaterers.php");
                        break;
                        
                         case 'caterers'.'bende-abia'.'Abia':
                      header("location:bende-abiacaterers.php");
                        break;
                        
                         case 'caterers'.'ngwa-abia'.'Abia':
                      header("location:ngwa-abiacaterers.php");
                        break;
                        
                          case 'caterers'.'isiala-abia'.'Abia':
                      header("location:isiala-abiacaterers.php");
                        break;
                        
                           case 'caterers'.'ikwuano-abia'.'Abia':
                      header("location:ikwuano-abiacaterers.php");
                        break;

                          case 'caterers'.'isukwuato-abia'.'Abia':                
                      header("location:isukwuato-abiacaterers.php");                   
                        break;


                      

                     

                        

                        #END CATERERS LOCATION


                        #BEGINING WINESELLER LOCATION
                        case 'wineseller'.'aba-abia'.'Abia':
                      header("location:aba-abiawineseller.php");
                        break;
                        
                        case 'wineseller'.'arochukwu-abia'.'Abia':
                      header("location:arochukwu-abiawineseller.php");
                        break;
                        
                         case 'wineseller'.'aiyekire-abia'.'Abia':
                      header("location:aiyekire-abiawineseller.php");
                        break;
                        
                         case 'wineseller'.'anka-abia'.'Abia':
                      header("location:anka-abiawineseller.php");
                        break;
                        
                         case 'wineseller'.'bende-abia'.'Abia':
                      header("location:bende-abiawineseller.php");
                        break;
                        
                           case 'wineseller'.'ukwa-abia'.'Abia':
                      header("location:ukwa-abiawineseller.php");
                        break;
                        
                           case 'wineseller'.'umuahia-abia'.'Abia':
                      header("location:umuahia-abiawineseller.php");
                        break;
                        
                         case 'wineseller'.'ngwa-abia'.'Abia':
                      header("location:ngwa-abiawineseller.php");
                        break;
                        
                         case 'wineseller'.'isiala-abia'.'Abia':
                      header("location:isiala-abiawineseller.php");
                        break;
                        
                         case 'wineseller'.'ikwuano-abia'.'Abia':
                      header("location:ikwuano-abiawineseller.php");
                        break;

                            case 'wineseller'.'isukwuato-abia'.'Abia':                
                      header("location:isukwuato-abiawineseller.php");                   
                        break;


                        

                    

                        #END WINESELLER LOCATION


                      #BEGINING OF ENTERTAINER LOCATION
                        case 'entertainer'.'aba-abia'.'Abia':
                        header("location:aba-abiaentertainer.php");
                        break;
                        
                        case 'entertainer'.'arochukwu-abia'.'Abia':
                        header("location:arochukwu-abiaentertainer.php");
                        break;
                        
                        case 'entertainer'.'aiyekire-abia'.'Abia':
                        header("location:aiyekire-abiaentertainer.php");
                        break;
                        
                        case 'entertainer'.'anka-abia'.'Abia':
                        header("location:anka-abiaentertainer.php");
                        break;
                        
                        case 'entertainer'.'bende-abia'.'Abia':
                        header("location:bende-abiaentertainer.php");
                        break;
                        
                        case 'entertainer'.'ngwa-abia'.'Abia':
                        header("location:ngwa-abiaentertainer.php");
                        break;
                        
                        case 'entertainer'.'ukwa-abia'.'Abia':
                        header("location:ukwa-abiaentertainer.php");
                        break;
                        
                        
                        case 'entertainer'.'umuahia-abia'.'Abia':
                        header("location:umuahia-abiaentertainer.php");
                        break;
                        
                        case 'entertainer'.'isiala-abia'.'Abia':
                        header("location:isiala-abiaentertainer.php");
                        break;
                        
                        case 'entertainer'.'ikwuano-abia'.'Abia':
                        header("location:ikwuano-abiaentertainer.php");
                        break;

                            case 'entertainer'.'isukwuato-abia'.'Abia':               
                      header("location:isukwuato-abiaentertainer.php");                    
                        break;



                      
                        #END ENTERTAINER / MC LOCATION


                        #BEGINING MUSIC ARTIST LOCATION
                        case 'music'.'aba-abia'.'Abia':
                      header("location:aba-abiamusicband.php");
                        break;
                        
                        case 'music'.'arochukwu-abia'.'Abia':
                      header("location:arochukwu-abiamusicband.php");
                        break;
                        
                        case 'music'.'aiyekire-abia'.'Abia':
                      header("location:aiyekire-abiamusicband.php");
                        break;
                        
                        case 'music'.'anka-abia'.'Abia':
                      header("location:anka-abiamusicband.php");
                        break;
                        
                        case 'music'.'ukwa-abia'.'Abia':
                      header("location:ukwa-abiamusicband.php");
                        break;
                        
                        case 'music'.'umuahia-abia'.'Abia':
                      header("location:umuahia-abiamusicband.php");
                        break;
                        
                        
                        case 'music'.'bende-abia'.'Abia':
                      header("location:bende-abiamusicband.php");
                        break;
                        
                        case 'music'.'ngwa-abia'.'Abia':
                      header("location:ngwa-abiamusicband.php");
                        break;
                        
                          case 'music'.'isiala-abia'.'Abia':
                      header("location:isiala-abiamusicband.php");
                        break;
                        
                           case 'music'.'ikwuano-abia'.'Abia':
                      header("location:ikwuano-abiamusicband.php");
                        break;

                        case 'music'.'isukwuato-abia'.'Abia':               
                      header("location:isukwuato-abiamusicband.php");                    
                        break;



                      
                        #END MUSIC ARTIST LOCATION


                      #BEGINING HALL DECORATORS LOCATION
                        case 'halldecorators'.'aba-abia'.'Abia':
                      header("location:aba-abiahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'arochukwu-abia'.'Abia':
                      header("location:arochukwu-abiahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'aiyekire-abia'.'Abia':
                      header("location:aiyekire-abiahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'ukwa-abia'.'Abia':
                      header("location:ukwa-abiahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'umuahia-abia'.'Abia':
                      header("location:umuahia-abiahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'anka-abia'.'Abia':
                      header("location:anka-abiahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'bende-abia'.'Abia':
                      header("location:bende-abiahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'ngwa-abia'.'Abia':
                      header("location:ngwa-abiahalldecorators.php");
                        break;
                        
                         case 'halldecorators'.'isiala-abia'.'Abia':
                      header("location:isiala-abiahalldecorators.php");
                        break;
                        
                          case 'halldecorators'.'ikwuano-abia'.'Abia':
                      header("location:ikwuano-abiahalldecorators.php");
                        break;

                          case 'halldecorators'.'isukwuato-abia'.'Abia':                
                      header("location:isukwuato-abiahalldecorators.php");                   
                        break;



                    

                        #END HALL DECORATORS LOCATION


                        #BEGINING Djs LOCATION
                        case 'dj'.'aba-abia'.'Abia':
                      header("location:aba-abiadj.php");
                        break;
                        
                         case 'dj'.'arochukwu-abia'.'Abia':
                      header("location:arochukwu-abiadj.php");
                        break;
                        
                        case 'dj'.'aiyekire-abia'.'Abia':
                      header("location:aiyekire-abiadj.php");
                        break;
                        
                        case 'dj'.'anka-abia'.'Abia':
                      header("location:anka-abiadj.php");
                        break;
                        
                        case 'dj'.'ukwa-abia'.'Abia':
                      header("location:ukwa-abiadj.php");
                        break;
                        
                        case 'dj'.'umuahia-abia'.'Abia':
                      header("location:umuahia-abiadj.php");
                        break;
                        
                        case 'dj'.'bende-abia'.'Abia':
                      header("location:bende-abiadj.php");
                        break;
                        
                        case 'dj'.'ngwa-abia'.'Abia':
                      header("location:ngwa-abiadj.php");
                        break;
                        
                        case 'dj'.'isiala-abia'.'Abia':
                      header("location:isiala-abiadj.php");
                        break;
                        
                        case 'dj'.'ikwuano-abia'.'Abia':
                      header("location:ikwuano-abiadj.php");
                        break;

                            case 'dj'.'isukwuato-abia'.'Abia':                
                      header("location:isukwuato-abiadj.php");                   
                        break;


                      
                        #END Djs LOCATION
                      

                        #BEGINING MARKUP LOCATION
                        case 'markup'.'aba-abia'.'Abia':
                      header("location:aba-abiamarkup.php");
                        break;
                        
                         case 'markup'.'arochukwu-abia'.'Abia':
                      header("location:arochukwu-abiamarkup.php");
                        break;
                        
                        case 'markup'.'ukwa-abia'.'Abia':
                      header("location:ukwa-abiamarkup.php");
                        break;
                        
                        case 'markup'.'umuahia-abia'.'Abia':
                      header("location:umuahia-abiamarkup.php");
                        break;
                        
                          case 'markup'.'aiyekire-abia'.'Abia':
                      header("location:aiyekire-abiamarkup.php");
                        break;
                        
                          case 'markup'.'anka-abia'.'Abia':
                      header("location:anka-abiamarkup.php");
                        break;
                        
                          case 'markup'.'bende-abia'.'Abia':
                      header("location:bende-abiamarkup.php");
                        break;
                        
                          case 'markup'.'ngwa-abia'.'Abia':
                      header("location:ngwa-abiamarkup.php");
                        break;
                        
                        
                        case 'markup'.'isiala-abia'.'Abia':
                      header("location:isiala-abiamarkup.php");
                        break;
                        
                        case 'markup'.'ikwuano-abia'.'Abia':
                      header("location:ikwuano-abiamarkup.php");
                        break;


                        case 'markup'.'isukwuato-abia'.'Abia':                
                      header("location:isukwuato-abiamarkup.php");                   
                        break;

                        #END MARKUP LOCATION

                      #Abia STATE ENDING







                                              #CrossRiver STATE BEGINING

                         case 'photographer'.'abi-crossriver'.'CrossRiver':
                      header("location:abi-crossriverphotogra.php");
                        break;
                        
                         case 'photographer'.'akampa-crossriver'.'CrossRiver':
                      header("location:akampa-crossriverphotogra.php");
                        break;
                        
                        case 'photographer'.'akpabuyo-crossriver'.'CrossRiver':
                      header("location:akpabuyo-crossriverphotogra.php");
                        break;
                        
                         case 'photographer'.'bakassi-crossriver'.'CrossRiver':
                      header("location:bakassi-crossriverphotogra.php");
                        break;

                        case 'photographer'.'bekwara-crossriver'.'CrossRiver':                
                      header("location:bekwara-crossriverphotogra.php");                     
                        break;
                        
                          case 'photographer'.'biase-crossriver'.'CrossRiver':                
                      header("location:biase-crossriverphotogra.php");                     
                        break;
                        
                          case 'photographer'.'boki-crossriver'.'CrossRiver':                
                      header("location:boki-crossriverphotogra.php");                     
                        break;
                        
                          case 'photographer'.'calabar-crossriver'.'CrossRiver':                
                      header("location:calabar-crossriverphotogra.php");                     
                        break;
                        
                          case 'photographer'.'ikom-crossriver'.'CrossRiver':                
                      header("location:ikom-crossriverphotogra.php");                     
                        break;
                        
                        case 'photographer'.'obanliku-crossriver'.'CrossRiver':                
                      header("location:obanliku-crossriverphotogra.php");                     
                        break;
                        
                          case 'photographer'.'odukpani-crossriver'.'CrossRiver':                
                      header("location:odukpani-crossriverphotogra.php");                     
                        break;

                           case 'photographer'.'ogoja-crossriver'.'CrossRiver':                
                      header("location:ogoja-crossriverphotogra.php");                     
                        break;

                           case 'photographer'.'yala-crossriver'.'CrossRiver':                
                      header("location:yala-crossriverphotogra.php");                     
                        break;

                           case 'photographer'.'yarkur-crossriver'.'CrossRiver':                
                      header("location:yarkur-crossriverphotogra.php");                     
                        break;



                      
                

                        #END PHOTGRAPHER LOCATION



                        #BEGINING VEDIOGRAPHERS LOCATION
                        case 'vediographer'.'abi-crossriver'.'CrossRiver':
                      header("location:abi-crossrivervediographer.php");
                        break;
                        
                        
                         case 'vediographer'.'akampa-crossriver'.'CrossRiver':
                      header("location:akampa-crossrivervediographer.php");
                        break;
                        
                        case 'vediographer'.'akpabuyo-crossriver'.'CrossRiver':
                      header("location:akpabuyo-crossrivervediographer.php");
                        break;
                        
                        case 'vediographer'.'bakassi-crossriver'.'CrossRiver':
                      header("location:bakassi-crossrivervediographer.php");
                        break;
                        
                        case 'vediographer'.'bekwara-crossriver'.'CrossRiver':
                      header("location:bekwara-crossrivervediographer.php");
                        break;
                        
                        case 'vediographer'.'biase-crossriver'.'CrossRiver':
                      header("location:biase-crossrivervediographer.php");
                        break;
                        
                         case 'vediographer'.'boki-crossriver'.'CrossRiver':
                      header("location:boki-crossrivervediographer.php");
                        break;
                        
                         case 'vediographer'.'calabar-crossriver'.'CrossRiver':
                      header("location:calabar-crossrivervediographer.php");
                        break;

                          case 'vediographer'.'ikom-crossriver'.'CrossRiver':                
                      header("location:ikom-crossrivervediographer.php");                   
                        break;
                        
                          case 'vediographer'.'obanliku-crossriver'.'CrossRiver':                
                      header("location:obanliku-crossrivervediographer.php");                   
                        break;
                        
                          case 'vediographer'.'odukpani-crossriver'.'CrossRiver':                
                      header("location:odukpani-crossrivervediographer.php");                   
                        break;

                        case 'vediographer'.'ogoja-crossriver'.'CrossRiver':                
                      header("location:ogoja-crossrivervediographer.php");                   
                        break;

                        case 'vediographer'.'yala-crossriver'.'CrossRiver':                
                      header("location:yala-crossrivervediographer.php");                   
                        break;

                        case 'vediographer'.'yarkur-crossriver'.'CrossRiver':                
                      header("location:yarkur-crossrivervediographer.php");                   
                        break;

                     

                      

                

                        #END VEDIOGRAPHERS LOCATION


                        #BEGINING CATERERS LOCATION
                        case 'caterers'.'abi-crossriver'.'CrossRiver':
                      header("location:abi-crossrivercaterers.php");
                        break;
                        
                         case 'caterers'.'akampa-crossriver'.'CrossRiver':
                      header("location:akampa-crossrivercaterers.php");
                        break;
                        
                         case 'caterers'.'akpabuyo-crossriver'.'CrossRiver':
                      header("location:akpabuyo-crossrivercaterers.php");
                        break;
                        
                          case 'caterers'.'obanliku-crossriver'.'CrossRiver':
                      header("location:obanliku-crossrivercaterers.php");
                        break;
                        
                          case 'caterers'.'odukpani-crossriver'.'CrossRiver':
                      header("location:odukpani-crossrivercaterers.php");
                        break;

                           case 'caterers'.'ogoja-crossriver'.'CrossRiver':
                      header("location:ogoja-crossrivercaterers.php");
                        break;

                           case 'caterers'.'yala-crossriver'.'CrossRiver':
                      header("location:yala-crossrivercaterers.php");
                        break;

                           case 'caterers'.'yarkur-crossriver'.'CrossRiver':
                      header("location:yarkur-crossrivercaterers.php");
                        break;
                        
                         case 'caterers'.'bakassi-crossriver'.'CrossRiver':
                      header("location:bakassi-crossrivercaterers.php");
                        break;
                        
                         case 'caterers'.'bekwara-crossriver'.'CrossRiver':
                      header("location:bekwara-crossrivercaterers.php");
                        break;
                        
                         case 'caterers'.'biase-crossriver'.'CrossRiver':
                      header("location:biase-crossrivercaterers.php");
                        break;
                        
                          case 'caterers'.'calabar-crossriver'.'CrossRiver':
                      header("location:calabar-crossrivercaterers.php");
                        break;
                        
                           case 'caterers'.'boki-crossriver'.'CrossRiver':
                      header("location:boki-crossrivercaterers.php");
                        break;

                          case 'caterers'.'ikom-crossriver'.'CrossRiver':                
                      header("location:ikom-crossrivercaterers.php");                   
                        break;


                      

                     

                        

                        #END CATERERS LOCATION


                        #BEGINING WINESELLER LOCATION
                        case 'wineseller'.'abi-crossriver'.'CrossRiver':
                      header("location:abi-crossriverwineseller.php");
                        break;
                        
                        case 'wineseller'.'akampa-crossriver'.'CrossRiver':
                      header("location:akampa-crossriverwineseller.php");
                        break;
                        
                         case 'wineseller'.'akpabuyo-crossriver'.'CrossRiver':
                      header("location:akpabuyo-crossriverwineseller.php");
                        break;
                        
                         case 'wineseller'.'bakassi-crossriver'.'CrossRiver':
                      header("location:bakassi-crossriverwineseller.php");
                        break;
                        
                         case 'wineseller'.'bekwara-crossriver'.'CrossRiver':
                      header("location:bekwara-crossriverwineseller.php");
                        break;
                        
                           case 'wineseller'.'obanliku-crossriver'.'CrossRiver':
                      header("location:obanliku-crossriverwineseller.php");
                        break;
                        
                           case 'wineseller'.'odukpani-crossriver'.'CrossRiver':
                      header("location:odukpani-crossriverwineseller.php");
                        break;

                          case 'wineseller'.'ogoja-crossriver'.'CrossRiver':
                      header("location:ogoja-crossriverwineseller.php");
                        break;

                          case 'wineseller'.'yala-crossriver'.'CrossRiver':
                      header("location:yala-crossriverwineseller.php");
                        break;

                          case 'wineseller'.'yarkur-crossriver'.'CrossRiver':
                      header("location:yarkur-crossriverwineseller.php");
                        break;
                        
                         case 'wineseller'.'biase-crossriver'.'CrossRiver':
                      header("location:biase-crossriverwineseller.php");
                        break;
                        
                         case 'wineseller'.'calabar-crossriver'.'CrossRiver':
                      header("location:calabar-crossriverwineseller.php");
                        break;
                        
                         case 'wineseller'.'boki-crossriver'.'CrossRiver':
                      header("location:boki-crossriverwineseller.php");
                        break;

                            case 'wineseller'.'ikom-crossriver'.'CrossRiver':                
                      header("location:ikom-crossriverwineseller.php");                   
                        break;


                        

                    

                        #END WINESELLER LOCATION


                      #BEGINING OF ENTERTAINER LOCATION
                        case 'entertainer'.'abi-crossriver'.'CrossRiver':
                        header("location:abi-crossriverentertainer.php");
                        break;
                        
                        case 'entertainer'.'akampa-crossriver'.'CrossRiver':
                        header("location:akampa-crossriverentertainer.php");
                        break;
                        
                        case 'entertainer'.'akpabuyo-crossriver'.'CrossRiver':
                        header("location:akpabuyo-crossriverentertainer.php");
                        break;
                        
                        case 'entertainer'.'bakassi-crossriver'.'CrossRiver':
                        header("location:bakassi-crossriverentertainer.php");
                        break;
                        
                        case 'entertainer'.'bekwara-crossriver'.'CrossRiver':
                        header("location:bekwara-crossriverentertainer.php");
                        break;
                        
                        case 'entertainer'.'biase-crossriver'.'CrossRiver':
                        header("location:biase-crossriverentertainer.php");
                        break;
                        
                        case 'entertainer'.'obanliku-crossriver'.'CrossRiver':
                        header("location:obanliku-crossriverentertainer.php");
                        break;
                        
                        
                        case 'entertainer'.'odukpani-crossriver'.'CrossRiver':
                        header("location:odukpani-crossriverentertainer.php");
                        break;

                         case 'entertainer'.'ogoja-crossriver'.'CrossRiver':
                        header("location:ogoja-crossriverentertainer.php");
                        break;

                         case 'entertainer'.'yala-crossriver'.'CrossRiver':
                        header("location:yala-crossriverentertainer.php");
                        break;

                         case 'entertainer'.'yarkur-crossriver'.'CrossRiver':
                        header("location:yarkur-crossriverentertainer.php");
                        break;
                        
                        case 'entertainer'.'calabar-crossriver'.'CrossRiver':
                        header("location:calabar-crossriverentertainer.php");
                        break;
                        
                        case 'entertainer'.'boki-crossriver'.'CrossRiver':
                        header("location:boki-crossriverentertainer.php");
                        break;

                            case 'entertainer'.'ikom-crossriver'.'CrossRiver':               
                      header("location:ikom-crossriverentertainer.php");                    
                        break;



                      
                        #END ENTERTAINER / MC LOCATION


                        #BEGINING MUSIC ARTIST LOCATION
                        case 'music'.'abi-crossriver'.'CrossRiver':
                      header("location:abi-crossrivermusicband.php");
                        break;
                        
                        case 'music'.'akampa-crossriver'.'CrossRiver':
                      header("location:akampa-crossrivermusicband.php");
                        break;
                        
                        case 'music'.'akpabuyo-crossriver'.'CrossRiver':
                      header("location:akpabuyo-crossrivermusicband.php");
                        break;
                        
                        case 'music'.'bakassi-crossriver'.'CrossRiver':
                      header("location:bakassi-crossrivermusicband.php");
                        break;
                        
                        case 'music'.'obanliku-crossriver'.'CrossRiver':
                      header("location:obanliku-crossrivermusicband.php");
                        break;
                        
                        case 'music'.'odukpani-crossriver'.'CrossRiver':
                      header("location:odukpani-crossrivermusicband.php");
                        break;

                         case 'music'.'ogoja-crossriver'.'CrossRiver':
                      header("location:ogoja-crossrivermusicband.php");
                        break;

                         case 'music'.'yala-crossriver'.'CrossRiver':
                      header("location:yala-crossrivermusicband.php");
                        break;

                         case 'music'.'yarkur-crossriver'.'CrossRiver':
                      header("location:yarkur-crossrivermusicband.php");
                        break;
                        
                        
                        case 'music'.'bekwara-crossriver'.'CrossRiver':
                      header("location:bekwara-crossrivermusicband.php");
                        break;
                        
                        case 'music'.'biase-crossriver'.'CrossRiver':
                      header("location:biase-crossrivermusicband.php");
                        break;
                        
                          case 'music'.'calabar-crossriver'.'CrossRiver':
                      header("location:calabar-crossrivermusicband.php");
                        break;
                        
                           case 'music'.'boki-crossriver'.'CrossRiver':
                      header("location:boki-crossrivermusicband.php");
                        break;

                        case 'music'.'ikom-crossriver'.'CrossRiver':               
                      header("location:ikom-crossrivermusicband.php");                    
                        break;



                      
                        #END MUSIC ARTIST LOCATION


                      #BEGINING HALL DECORATORS LOCATION
                        case 'halldecorators'.'abi-crossriver'.'CrossRiver':
                      header("location:abi-crossriverhalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'akampa-crossriver'.'CrossRiver':
                      header("location:akampa-crossriverhalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'akpabuyo-crossriver'.'CrossRiver':
                      header("location:akpabuyo-crossriverhalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'obanliku-crossriver'.'CrossRiver':
                      header("location:obanliku-crossriverhalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'odukpani-crossriver'.'CrossRiver':
                      header("location:odukpani-crossriverhalldecorators.php");
                        break;

                        case 'halldecorators'.'yarkur-crossriver'.'CrossRiver':
                      header("location:yarkur-crossriverhalldecorators.php");
                        break;

                        case 'halldecorators'.'ogoja-crossriver'.'CrossRiver':
                      header("location:ogoja-crossriverhalldecorators.php");
                        break;

                        case 'halldecorators'.'yala-crossriver'.'CrossRiver':
                      header("location:yala-crossriverhalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'bakassi-crossriver3'.'CrossRiver':
                      header("location:bakassi-crossriverhalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'bekwara-crossriver'.'CrossRiver':
                      header("location:bekwara-crossriverhalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'biase-crossriver'.'CrossRiver':
                      header("location:biase-crossriverhalldecorators.php");
                        break;
                        
                         case 'halldecorators'.'calabar-crossriver'.'CrossRiver':
                      header("location:calabar-crossriverhalldecorators.php");
                        break;
                        
                          case 'halldecorators'.'boki-crossriver'.'CrossRiver':
                      header("location:boki-crossriverhalldecorators.php");
                        break;

                          case 'halldecorators'.'ikom-crossriver'.'CrossRiver':                
                      header("location:ikom-crossriverhalldecorators.php");                   
                        break;



                    

                        #END HALL DECORATORS LOCATION


                        #BEGINING Djs LOCATION
                        case 'dj'.'abi-crossriver'.'CrossRiver':
                      header("location:abi-crossriverdj.php");
                        break;
                        
                         case 'dj'.'akampa-crossriver'.'CrossRiver':
                      header("location:akampa-crossriverdj.php");
                        break;
                        
                        case 'dj'.'akpabuyo-crossriver'.'CrossRiver':
                      header("location:akpabuyo-crossriverdj.php");
                        break;
                        
                        case 'dj'.'bakassi-crossriver'.'CrossRiver':
                      header("location:bakassi-crossriverdj.php");
                        break;
                        
                        case 'dj'.'obanliku-crossriver'.'CrossRiver':
                      header("location:obanliku-crossriverdj.php");
                        break;
                        
                        case 'dj'.'odukpani-crossriver'.'CrossRiver':
                      header("location:odukpani-crossriverdj.php");
                        break;

                         case 'dj'.'ogoja-crossriver'.'CrossRiver':
                      header("location:ogoja-crossriverdj.php");
                        break;

                         case 'dj'.'yala-crossriver'.'CrossRiver':
                      header("location:yala-crossriverdj.php");
                        break;

                         case 'dj'.'yarkur-crossriver'.'CrossRiver':
                      header("location:yarkur-crossriverdj.php");
                        break;
                        
                        case 'dj'.'bekwara-crossriver'.'CrossRiver':
                      header("location:bekwara-crossriverdj.php");
                        break;
                        
                        case 'dj'.'biase-crossriver'.'CrossRiver':
                      header("location:biase-crossriverdj.php");
                        break;
                        
                        case 'dj'.'calabar-crossriver'.'CrossRiver':
                      header("location:calabar-crossriverdj.php");
                        break;
                        
                        case 'dj'.'boki-crossriver'.'CrossRiver':
                      header("location:boki-crossriverdj.php");
                        break;

                            case 'dj'.'ikom-crossriver'.'CrossRiver':                
                      header("location:ikom-crossriverdj.php");                   
                        break;


                      
                        #END Djs LOCATION
                      

                        #BEGINING MARKUP LOCATION
                        case 'markup'.'abi-crossriver'.'CrossRiver':
                      header("location:abi-crossrivermarkup.php");
                        break;
                        
                         case 'markup'.'akampa-crossriver'.'CrossRiver':
                      header("location:akampa-crossrivermarkup.php");
                        break;
                        
                        case 'markup'.'obanliku-crossriver'.'CrossRiver':
                      header("location:obanliku-crossrivermarkup.php");
                        break;
                        
                        case 'markup'.'odukpani-crossriver'.'CrossRiver':
                      header("location:odukpani-crossrivermarkup.php");
                        break;

                        case 'markup'.'ogoja-crossriver'.'CrossRiver':
                      header("location:ogoja-crossrivermarkup.php");
                        break;

                        case 'markup'.'yala-crossriver'.'CrossRiver':
                      header("location:yala-crossrivermarkup.php");
                        break;

                        case 'markup'.'yarkur-crossriver'.'CrossRiver':
                      header("location:yarkur-crossrivermarkup.php");
                        break;
                        
                          case 'markup'.'akpabuyo-crossriver'.'CrossRiver':
                      header("location:akpabuyo-crossrivermarkup.php");
                        break;
                        
                          case 'markup'.'bakassi-crossriver'.'CrossRiver':
                      header("location:bakassi-crossrivermarkup.php");
                        break;
                        
                          case 'markup'.'bekwara-crossriver'.'CrossRiver':
                      header("location:bekwara-crossrivermarkup.php");
                        break;
                        
                          case 'markup'.'biase-crossriver'.'CrossRiver':
                      header("location:biase-crossrivermarkup.php");
                        break;
                        
                        
                        case 'markup'.'calabar-crossriver'.'CrossRiver':
                      header("location:calabar-crossrivermarkup.php");
                        break;
                        
                        case 'markup'.'boki-crossriver'.'CrossRiver':
                      header("location:boki-crossrivermarkup.php");
                        break;


                        case 'markup'.'ikom-crossriver'.'CrossRiver':                
                      header("location:ikom-crossrivermarkup.php");                   
                        break;


                        #END MARKUP LOCATION

                      #CrossRiver STATE ENDING





                                              #Taraba STATE BEGINING

                         case 'photographer'.'akdo-kola-taraba'.'Taraba':
                      header("location:akdo-kola-tarabaphotogra.php");
                        break;
                        
                         case 'photographer'.'bali-taraba'.'Taraba':
                      header("location:bali-tarabaphotogra.php");
                        break;
                        
                        case 'photographer'.'donga-taraba'.'Taraba':
                      header("location:donga-tarabaphotogra.php");
                        break;
                        
                         case 'photographer'.'gashaka-taraba'.'Taraba':
                      header("location:gashaka-tarabaphotogra.php");
                        break;

                        case 'photographer'.'gassol-taraba'.'Taraba':                
                      header("location:gassol-tarabaphotogra.php");                     
                        break;
                        
                          case 'photographer'.'ibi-taraba'.'Taraba':                
                      header("location:ibi-tarabaphotogra.php");                     
                        break;
                        
                          case 'photographer'.'lamido-taraba'.'Taraba':                
                      header("location:lamido-tarabaphotogra.php");                     
                        break;
                        
                          case 'photographer'.'kurmi-taraba'.'Taraba':                
                      header("location:kurmi-tarabaphotogra.php");                     
                        break;
                        
                          case 'photographer'.'lan-taraba'.'Taraba':                
                      header("location:lan-tarabaphotogra.php");                     
                        break;
                        
                        case 'photographer'.'sarduana-taraba'.'Taraba':                
                      header("location:sarduana-tarabaphotogra.php");                     
                        break;
                        
                          case 'photographer'.'tarum-taraba'.'Taraba':                
                      header("location:tarum-tarabaphotogra.php");                     
                        break;

                           case 'photographer'.'ussa-taraba'.'Taraba':                
                      header("location:ussa-tarabaphotogra.php");                     
                        break;

                           case 'photographer'.'wukari-taraba'.'Taraba':                
                      header("location:wukari-tarabaphotogra.php");                     
                        break;

                           case 'photographer'.'yorro-taraba'.'Taraba':                
                      header("location:yorro-tarabaphotogra.php");                     
                        break;

                           case 'photographer'.'zing-taraba'.'Taraba':                
                      header("location:zing-tarabaphotogra.php");                     
                        break;



                      
                

                        #END PHOTGRAPHER LOCATION



                        #BEGINING VEDIOGRAPHERS LOCATION
                        case 'vediographer'.'akdo-kola-taraba'.'Taraba':
                      header("location:akdo-kola-tarabavediographer.php");
                        break;
                        
                        
                         case 'vediographer'.'bali-taraba'.'Taraba':
                      header("location:bali-tarabavediographer.php");
                        break;
                        
                        case 'vediographer'.'donga-taraba'.'Taraba':
                      header("location:donga-tarabavediographer.php");
                        break;
                        
                        case 'vediographer'.'gashaka-taraba'.'Taraba':
                      header("location:gashaka-tarabavediographer.php");
                        break;
                        
                        case 'vediographer'.'gassol-taraba'.'Taraba':
                      header("location:gassol-tarabavediographer.php");
                        break;
                        
                        case 'vediographer'.'ibi-taraba'.'Taraba':
                      header("location:ibi-tarabavediographer.php");
                        break;
                        
                         case 'vediographer'.'lamido-taraba'.'Taraba':
                      header("location:lamido-tarabavediographer.php");
                        break;
                        
                         case 'vediographer'.'kurmi-taraba'.'Taraba':
                      header("location:kurmi-tarabavediographer.php");
                        break;

                          case 'vediographer'.'lan-taraba'.'Taraba':                
                      header("location:lan-tarabavediographer.php");                   
                        break;
                        
                          case 'vediographer'.'sarduana-taraba'.'Taraba':                
                      header("location:sarduana-tarabavediographer.php");                   
                        break;
                        
                          case 'vediographer'.'tarum-taraba'.'Taraba':                
                      header("location:tarum-tarabavediographer.php");                   
                        break;

                        case 'vediographer'.'ussa-taraba'.'Taraba':                
                      header("location:ussa-tarabavediographer.php");                   
                        break;

                        case 'vediographer'.'wukari-taraba'.'Taraba':                
                      header("location:wukari-tarabavediographer.php");                   
                        break;

                        case 'vediographer'.'yorro-taraba'.'Taraba':                
                      header("location:yorro-tarabavediographer.php");                   
                        break;

                         case 'vediographer'.'zing-taraba'.'Taraba':                
                      header("location:zing-tarabavediographer.php");                   
                        break;


                     

                      

                

                        #END VEDIOGRAPHERS LOCATION


                        #BEGINING CATERERS LOCATION
                        case 'caterers'.'akdo-kola-taraba'.'Taraba':
                      header("location:akdo-kola-tarabacaterers.php");
                        break;
                        
                         case 'caterers'.'bali-taraba'.'Taraba':
                      header("location:bali-tarabacaterers.php");
                        break;
                        
                         case 'caterers'.'donga-taraba'.'Taraba':
                      header("location:donga-tarabacaterers.php");
                        break;
                        
                          case 'caterers'.'sarduana-taraba'.'Taraba':
                      header("location:sarduana-tarabacaterers.php");
                        break;
                        
                          case 'caterers'.'tarum-taraba'.'Taraba':
                      header("location:tarum-tarabacaterers.php");
                        break;

                           case 'caterers'.'ussa-taraba'.'Taraba':
                      header("location:ussa-tarabacaterers.php");
                        break;

                           case 'caterers'.'wukari-taraba'.'Taraba':
                      header("location:wukari-tarabacaterers.php");
                        break;

                           case 'caterers'.'yorro-taraba'.'Taraba':
                      header("location:yorro-tarabacaterers.php");
                        break;

                          case 'caterers'.'zing-taraba'.'Taraba':
                      header("location:zing-tarabacaterers.php");
                        break;
                        
                         case 'caterers'.'gashaka-taraba'.'Taraba':
                      header("location:gashaka-tarabacaterers.php");
                        break;
                        
                         case 'caterers'.'gassol-taraba'.'Taraba':
                      header("location:gassol-tarabacaterers.php");
                        break;
                        
                         case 'caterers'.'ibi-taraba'.'Taraba':
                      header("location:ibi-tarabacaterers.php");
                        break;
                        
                          case 'caterers'.'kurmi-taraba'.'Taraba':
                      header("location:kurmi-tarabacaterers.php");
                        break;
                        
                           case 'caterers'.'lamido-taraba'.'Taraba':
                      header("location:lamido-tarabacaterers.php");
                        break;

                          case 'caterers'.'lan-taraba'.'Taraba':                
                      header("location:lan-tarabacaterers.php");                   
                        break;


                      

                     

                        

                        #END CATERERS LOCATION


                        #BEGINING WINESELLER LOCATION
                        case 'wineseller'.'akdo-kola-taraba'.'Taraba':
                      header("location:akdo-kola-tarabawineseller.php");
                        break;
                        
                        case 'wineseller'.'bali-taraba'.'Taraba':
                      header("location:bali-tarabawineseller.php");
                        break;
                        
                         case 'wineseller'.'donga-taraba'.'Taraba':
                      header("location:donga-tarabawineseller.php");
                        break;
                        
                         case 'wineseller'.'gashaka-taraba'.'Taraba':
                      header("location:gashaka-tarabawineseller.php");
                        break;
                        
                         case 'wineseller'.'gassol-taraba'.'Taraba':
                      header("location:gassol-tarabawineseller.php");
                        break;
                        
                           case 'wineseller'.'sarduana-taraba'.'Taraba':
                      header("location:sarduana-tarabawineseller.php");
                        break;
                        
                           case 'wineseller'.'tarum-taraba'.'Taraba':
                      header("location:tarum-tarabawineseller.php");
                        break;

                          case 'wineseller'.'ussa-taraba'.'Taraba':
                      header("location:ussa-tarabawineseller.php");
                        break;

                          case 'wineseller'.'wukari-taraba'.'Taraba':
                      header("location:wukari-tarabawineseller.php");
                        break;

                          case 'wineseller'.'yorro-taraba'.'Taraba':
                      header("location:yorro-tarabawineseller.php");
                        break;

                         case 'wineseller'.'zing-taraba'.'Taraba':
                      header("location:zing-tarabawineseller.php");
                        break;
                        
                         case 'wineseller'.'ibi-taraba'.'Taraba':
                      header("location:ibi-tarabawineseller.php");
                        break;
                        
                         case 'wineseller'.'kurmi-taraba'.'Taraba':
                      header("location:kurmi-tarabawineseller.php");
                        break;
                        
                         case 'wineseller'.'lamido-taraba'.'Taraba':
                      header("location:lamido-tarabawineseller.php");
                        break;

                            case 'wineseller'.'lan-taraba'.'Taraba':                
                      header("location:lan-tarabawineseller.php");                   
                        break;


                        

                    

                        #END WINESELLER LOCATION


                      #BEGINING OF ENTERTAINER LOCATION
                        case 'entertainer'.'akdo-kola-taraba'.'Taraba':
                        header("location:akdo-kola-tarabaentertainer.php");
                        break;
                        
                        case 'entertainer'.'bali-taraba'.'Taraba':
                        header("location:bali-tarabaentertainer.php");
                        break;
                        
                        case 'entertainer'.'donga-taraba'.'Taraba':
                        header("location:donga-tarabaentertainer.php");
                        break;
                        
                        case 'entertainer'.'gashaka-taraba'.'Taraba':
                        header("location:gashaka-tarabaentertainer.php");
                        break;
                        
                        case 'entertainer'.'gassol-taraba'.'Taraba':
                        header("location:gassol-tarabaentertainer.php");
                        break;
                        
                        case 'entertainer'.'ibi-taraba'.'Taraba':
                        header("location:ibi-tarabaentertainer.php");
                        break;
                        
                        case 'entertainer'.'sarduana-taraba'.'Taraba':
                        header("location:sarduana-tarabaentertainer.php");
                        break;
                        
                        
                        case 'entertainer'.'tarum-taraba'.'Taraba':
                        header("location:tarum-tarabaentertainer.php");
                        break;

                         case 'entertainer'.'ussa-taraba'.'Taraba':
                        header("location:ussa-tarabaentertainer.php");
                        break;

                         case 'entertainer'.'wukari-taraba'.'Taraba':
                        header("location:wukari-tarabaentertainer.php");
                        break;

                         case 'entertainer'.'yorro-taraba'.'Taraba':
                        header("location:yorro-tarabaentertainer.php");
                        break;

                          case 'entertainer'.'zing-taraba'.'Taraba':
                        header("location:zing-tarabaentertainer.php");
                        break;
                        
                        case 'entertainer'.'kurmi-taraba'.'Taraba':
                        header("location:kurmi-tarabaentertainer.php");
                        break;
                        
                        case 'entertainer'.'lamido-taraba'.'Taraba':
                        header("location:lamido-tarabaentertainer.php");
                        break;

                            case 'entertainer'.'lan-taraba'.'Taraba':               
                      header("location:lan-tarabaentertainer.php");                    
                        break;



                      
                        #END ENTERTAINER / MC LOCATION


                        #BEGINING MUSIC ARTIST LOCATION
                        case 'music'.'akdo-kola-taraba'.'Taraba':
                      header("location:akdo-kola-tarabamusicband.php");
                        break;
                        
                        case 'music'.'bali-taraba'.'Taraba':
                      header("location:bali-tarabamusicband.php");
                        break;
                        
                        case 'music'.'donga-taraba'.'Taraba':
                      header("location:donga-tarabamusicband.php");
                        break;
                        
                        case 'music'.'gashaka-taraba'.'Taraba':
                      header("location:gashaka-tarabamusicband.php");
                        break;
                        
                        case 'music'.'sarduana-taraba'.'Taraba':
                      header("location:sarduana-tarabamusicband.php");
                        break;
                        
                        case 'music'.'tarum-taraba'.'Taraba':
                      header("location:tarum-tarabamusicband.php");
                        break;

                         case 'music'.'ussa-taraba'.'Taraba':
                      header("location:ussa-tarabamusicband.php");
                        break;

                         case 'music'.'wukari-taraba'.'Taraba':
                      header("location:wukari-tarabamusicband.php");
                        break;

                         case 'music'.'yorro-taraba'.'Taraba':
                      header("location:yorro-tarabamusicband.php");
                        break;

                         case 'music'.'zing-taraba'.'Taraba':
                      header("location:zing-tarabamusicband.php");
                        break;
                        
                        
                        case 'music'.'gassol-taraba'.'Taraba':
                      header("location:gassol-tarabamusicband.php");
                        break;
                        
                        case 'music'.'ibi-taraba'.'Taraba':
                      header("location:ibi-tarabamusicband.php");
                        break;
                        
                          case 'music'.'kurmi-taraba'.'Taraba':
                      header("location:kurmi-tarabamusicband.php");
                        break;
                        
                           case 'music'.'lamido-taraba'.'Taraba':
                      header("location:lamido-tarabamusicband.php");
                        break;

                        case 'music'.'lan-taraba'.'Taraba':               
                      header("location:lan-tarabamusicband.php");                    
                        break;



                      
                        #END MUSIC ARTIST LOCATION


                      #BEGINING HALL DECORATORS LOCATION
                        case 'halldecorators'.'akdo-kola-taraba'.'Taraba':
                      header("location:akdo-kola-tarabahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'bali-taraba'.'Taraba':
                      header("location:bali-tarabahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'donga-taraba'.'Taraba':
                      header("location:donga-tarabahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'sarduana-taraba'.'Taraba':
                      header("location:sarduana-tarabahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'tarum-taraba'.'Taraba':
                      header("location:tarum-tarabahalldecorators.php");
                        break;

                        case 'halldecorators'.'yorro-taraba'.'Taraba':
                      header("location:yorro-tarabahalldecorators.php");
                        break;

                        case 'halldecorators'.'zing-taraba'.'Taraba':
                      header("location:zing-tarabahalldecorators.php");
                        break;

                        case 'halldecorators'.'ussa-taraba'.'Taraba':
                      header("location:ussa-tarabahalldecorators.php");
                        break;

                        case 'halldecorators'.'wukari-taraba'.'Taraba':
                      header("location:wukari-tarabahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'gashaka-taraba3'.'Taraba':
                      header("location:gashaka-tarabahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'gassol-taraba'.'Taraba':
                      header("location:gassol-tarabahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'ibi-taraba'.'Taraba':
                      header("location:ibi-tarabahalldecorators.php");
                        break;
                        
                         case 'halldecorators'.'kurmi-taraba'.'Taraba':
                      header("location:kurmi-tarabahalldecorators.php");
                        break;
                        
                          case 'halldecorators'.'lamido-taraba'.'Taraba':
                      header("location:lamido-tarabahalldecorators.php");
                        break;

                          case 'halldecorators'.'lan-taraba'.'Taraba':                
                      header("location:lan-tarabahalldecorators.php");                   
                        break;



                    

                        #END HALL DECORATORS LOCATION


                        #BEGINING Djs LOCATION
                        case 'dj'.'akdo-kola-taraba'.'Taraba':
                      header("location:akdo-kola-tarabadj.php");
                        break;
                        
                         case 'dj'.'bali-taraba'.'Taraba':
                      header("location:bali-tarabadj.php");
                        break;
                        
                        case 'dj'.'donga-taraba'.'Taraba':
                      header("location:donga-tarabadj.php");
                        break;
                        
                        case 'dj'.'gashaka-taraba'.'Taraba':
                      header("location:gashaka-tarabadj.php");
                        break;
                        
                        case 'dj'.'sarduana-taraba'.'Taraba':
                      header("location:sarduana-tarabadj.php");
                        break;
                        
                        case 'dj'.'tarum-taraba'.'Taraba':
                      header("location:tarum-tarabadj.php");
                        break;

                         case 'dj'.'ussa-taraba'.'Taraba':
                      header("location:ussa-tarabadj.php");
                        break;

                         case 'dj'.'wukari-taraba'.'Taraba':
                      header("location:wukari-tarabadj.php");
                        break;

                         case 'dj'.'yorro-taraba'.'Taraba':
                      header("location:yorro-tarabadj.php");
                        break;

                        case 'dj'.'zing-taraba'.'Taraba':
                      header("location:zing-tarabadj.php");
                        break;
                        
                        case 'dj'.'gassol-taraba'.'Taraba':
                      header("location:gassol-tarabadj.php");
                        break;
                        
                        case 'dj'.'ibi-taraba'.'Taraba':
                      header("location:ibi-tarabadj.php");
                        break;
                        
                        case 'dj'.'kurmi-taraba'.'Taraba':
                      header("location:kurmi-tarabadj.php");
                        break;
                        
                        case 'dj'.'lamido-taraba'.'Taraba':
                      header("location:lamido-tarabadj.php");
                        break;

                            case 'dj'.'lan-taraba'.'Taraba':                
                      header("location:lan-tarabadj.php");                   
                        break;


                      
                        #END Djs LOCATION
                      

                        #BEGINING MARKUP LOCATION
                        case 'markup'.'akdo-kola-taraba'.'Taraba':
                      header("location:akdo-kola-tarabamarkup.php");
                        break;
                        
                         case 'markup'.'bali-taraba'.'Taraba':
                      header("location:bali-tarabamarkup.php");
                        break;
                        
                        case 'markup'.'sarduana-taraba'.'Taraba':
                      header("location:sarduana-tarabamarkup.php");
                        break;
                        
                        case 'markup'.'tarum-taraba'.'Taraba':
                      header("location:tarum-tarabamarkup.php");
                        break;

                        case 'markup'.'ussa-taraba'.'Taraba':
                      header("location:ussa-tarabamarkup.php");
                        break;

                        case 'markup'.'wukari-taraba'.'Taraba':
                      header("location:wukari-tarabamarkup.php");
                        break;

                        case 'markup'.'yorro-taraba'.'Taraba':
                      header("location:yorro-tarabamarkup.php");
                        break;

                        case 'markup'.'zing-taraba'.'Taraba':
                      header("location:zing-tarabamarkup.php");
                        break;
                        
                          case 'markup'.'donga-taraba'.'Taraba':
                      header("location:donga-tarabamarkup.php");
                        break;
                        
                          case 'markup'.'gashaka-taraba'.'Taraba':
                      header("location:gashaka-tarabamarkup.php");
                        break;
                        
                          case 'markup'.'gassol-taraba'.'Taraba':
                      header("location:gassol-tarabamarkup.php");
                        break;
                        
                          case 'markup'.'ibi-taraba'.'Taraba':
                      header("location:ibi-tarabamarkup.php");
                        break;
                        
                        
                        case 'markup'.'kurmi-taraba'.'Taraba':
                      header("location:kurmi-tarabamarkup.php");
                        break;
                        
                        case 'markup'.'lamido-taraba'.'Taraba':
                      header("location:lamido-tarabamarkup.php");
                        break;


                        case 'markup'.'lan-taraba'.'Taraba':                
                      header("location:lan-tarabamarkup.php");                   
                        break;

                        #END MARKUP LOCATION

                      #Taraba STATE ENDING



                        

                                              #Benue STATE BEGINING

                         case 'photographer'.'ador-benue'.'Benue':
                      header("location:ador-benuephotogra.php");
                        break;
                        
                         case 'photographer'.'agatu-benue'.'Benue':
                      header("location:agatu-benuephotogra.php");
                        break;
                        
                        case 'photographer'.'apa-benue'.'Benue':
                      header("location:apa-benuephotogra.php");
                        break;
                        
                         case 'photographer'.'buruku-benue'.'Benue':
                      header("location:buruku-benuephotogra.php");
                        break;

                        case 'photographer'.'gboko-benue'.'Benue':                
                      header("location:gboko-benuephotogra.php");                     
                        break;
                        
                          case 'photographer'.'guma-benue'.'Benue':                
                      header("location:guma-benuephotogra.php");                     
                        break;
                        
                          case 'photographer'.'gwer-benue'.'Benue':                
                      header("location:gwer-benuephotogra.php");                     
                        break;
                        
                          case 'photographer'.'katsina-ala-benue'.'Benue':                
                      header("location:katsina-ala-benuephotogra.php");                     
                        break;
                        
                          case 'photographer'.'kwande-benue'.'Benue':                
                      header("location:kwande-benuephotogra.php");                     
                        break;
                        
                        case 'photographer'.'logo-benue'.'Benue':                
                      header("location:logo-benuephotogra.php");                     
                        break;
                        
                          case 'photographer'.'makurdii-benue'.'Benue':                
                      header("location:makurdii-benuephotogra.php");                     
                        break;

                           case 'photographer'.'obi-benue'.'Benue':                
                      header("location:obi-benuephotogra.php");                     
                        break;

                           case 'photographer'.'ogbadibo-benue'.'Benue':                
                      header("location:ogbadibo-benuephotogra.php");                     
                        break;

                           case 'photographer'.'ohimini-benue'.'Benue':                
                      header("location:ohimini-benuephotogra.php");                     
                        break;

                           case 'photographer'.'oju-benue'.'Benue':                
                      header("location:oju-benuephotogra.php");                     
                        break;

                         case 'photographer'.'okpokwu-benue'.'Benue':                
                      header("location:okpokwu-benuephotogra.php");                     
                        break;

                         case 'photographer'.'oturkpo-benue'.'Benue':                
                      header("location:oturkpo-benuephotogra.php");                     
                        break;

                         case 'photographer'.'tarka-benue'.'Benue':                
                      header("location:tarka-benuephotogra.php");                     
                        break;

                         case 'photographer'.'ukum-benue'.'Benue':                
                      header("location:ukum-benuephotogra.php");                     
                        break;

                         case 'photographer'.'vandekya-benue'.'Benue':                
                      header("location:vandekya-benuephotogra.php");                     
                        break;



                      
                

                        #END PHOTGRAPHER LOCATION



                        #BEGINING VEDIOGRAPHERS LOCATION
                        case 'vediographer'.'ador-benue'.'Benue':
                      header("location:ador-benuevediographer.php");
                        break;
                        
                        
                         case 'vediographer'.'agatu-benue'.'Benue':
                      header("location:agatu-benuevediographer.php");
                        break;
                        
                        case 'vediographer'.'apa-benue'.'Benue':
                      header("location:apa-benuevediographer.php");
                        break;
                        
                        case 'vediographer'.'buruku-benue'.'Benue':
                      header("location:buruku-benuevediographer.php");
                        break;
                        
                        case 'vediographer'.'gboko-benue'.'Benue':
                      header("location:gboko-benuevediographer.php");
                        break;
                        
                        case 'vediographer'.'guma-benue'.'Benue':
                      header("location:guma-benuevediographer.php");
                        break;
                        
                         case 'vediographer'.'gwer-benue'.'Benue':
                      header("location:gwer-benuevediographer.php");
                        break;
                        
                         case 'vediographer'.'katsina-ala-benue'.'Benue':
                      header("location:katsina-ala-benuevediographer.php");
                        break;

                          case 'vediographer'.'kwande-benue'.'Benue':                
                      header("location:kwande-benuevediographer.php");                   
                        break;
                        
                          case 'vediographer'.'logo-benue'.'Benue':                
                      header("location:logo-benuevediographer.php");                   
                        break;
                        
                          case 'vediographer'.'makurdii-benue'.'Benue':                
                      header("location:makurdii-benuevediographer.php");                   
                        break;

                        case 'vediographer'.'obi-benue'.'Benue':                
                      header("location:obi-benuevediographer.php");                   
                        break;

                        case 'vediographer'.'ogbadibo-benue'.'Benue':                
                      header("location:ogbadibo-benuevediographer.php");                   
                        break;

                        case 'vediographer'.'ohimini-benue'.'Benue':                
                      header("location:ohimini-benuevediographer.php");                   
                        break;

                         case 'vediographer'.'oju-benue'.'Benue':                
                      header("location:oju-benuevediographer.php");                   
                        break;

                          case 'vediographer'.'okpokwu-benue'.'Benue':                
                      header("location:okpokwu-benuevediographer.php");                   
                        break;

                          case 'vediographer'.'oturkpo-benue'.'Benue':                
                      header("location:oturkpo-benuevediographer.php");                   
                        break;

                          case 'vediographer'.'tarka-benue'.'Benue':                
                      header("location:tarka-benuevediographer.php");                   
                        break;

                          case 'vediographer'.'ukum-benue'.'Benue':                
                      header("location:ukum-benuevediographer.php");                   
                        break;

                          case 'vediographer'.'vandekya-benue'.'Benue':                
                      header("location:vandekya-benuevediographer.php");                   
                        break;


                     

                      

                

                        #END VEDIOGRAPHERS LOCATION


                        #BEGINING CATERERS LOCATION
                        case 'caterers'.'ador-benue'.'Benue':
                      header("location:ador-benuecaterers.php");
                        break;
                        
                         case 'caterers'.'agatu-benue'.'Benue':
                      header("location:agatu-benuecaterers.php");
                        break;
                        
                         case 'caterers'.'apa-benue'.'Benue':
                      header("location:apa-benuecaterers.php");
                        break;
                        
                          case 'caterers'.'logo-benue'.'Benue':
                      header("location:logo-benuecaterers.php");
                        break;
                        
                          case 'caterers'.'makurdii-benue'.'Benue':
                      header("location:makurdii-benuecaterers.php");
                        break;

                           case 'caterers'.'obi-benue'.'Benue':
                      header("location:obi-benuecaterers.php");
                        break;

                           case 'caterers'.'ogbadibo-benue'.'Benue':
                      header("location:ogbadibo-benuecaterers.php");
                        break;

                           case 'caterers'.'ohimini-benue'.'Benue':
                      header("location:ohimini-benuecaterers.php");
                        break;

                          case 'caterers'.'oju-benue'.'Benue':
                      header("location:oju-benuecaterers.php");
                        break;

                           case 'caterers'.'okpokwu-benue'.'Benue':
                      header("location:okpokwu-benuecaterers.php");
                        break;


                           case 'caterers'.'oturkpo-benue'.'Benue':
                      header("location:oturkpo-benuecaterers.php");
                        break;


                           case 'caterers'.'tarka-benue'.'Benue':
                      header("location:tarka-benuecaterers.php");
                        break;

                           case 'caterers'.'ukum-benue'.'Benue':
                      header("location:ukum-benuecaterers.php");
                        break;


                           case 'caterers'.'vandekya-benue'.'Benue':
                      header("location:vandekya-benuecaterers.php");
                        break;

                        
                         case 'caterers'.'buruku-benue'.'Benue':
                      header("location:buruku-benuecaterers.php");
                        break;
                        
                         case 'caterers'.'gboko-benue'.'Benue':
                      header("location:gboko-benuecaterers.php");
                        break;
                        
                         case 'caterers'.'guma-benue'.'Benue':
                      header("location:guma-benuecaterers.php");
                        break;
                        
                          case 'caterers'.'katsina-ala-benue'.'Benue':
                      header("location:katsina-ala-benuecaterers.php");
                        break;
                        
                           case 'caterers'.'gwer-benue'.'Benue':
                      header("location:gwer-benuecaterers.php");
                        break;

                          case 'caterers'.'kwande-benue'.'Benue':                
                      header("location:kwande-benuecaterers.php");                   
                        break;


                      

                     

                        

                        #END CATERERS LOCATION


                        #BEGINING WINESELLER LOCATION
                        case 'wineseller'.'ador-benue'.'Benue':
                      header("location:ador-benuewineseller.php");
                        break;
                        
                        case 'wineseller'.'agatu-benue'.'Benue':
                      header("location:agatu-benuewineseller.php");
                        break;
                        
                         case 'wineseller'.'apa-benue'.'Benue':
                      header("location:apa-benuewineseller.php");
                        break;
                        
                         case 'wineseller'.'buruku-benue'.'Benue':
                      header("location:buruku-benuewineseller.php");
                        break;
                        
                         case 'wineseller'.'gboko-benue'.'Benue':
                      header("location:gboko-benuewineseller.php");
                        break;
                        
                           case 'wineseller'.'logo-benue'.'Benue':
                      header("location:logo-benuewineseller.php");
                        break;
                        
                           case 'wineseller'.'makurdii-benue'.'Benue':
                      header("location:makurdii-benuewineseller.php");
                        break;

                          case 'wineseller'.'obi-benue'.'Benue':
                      header("location:obi-benuewineseller.php");
                        break;

                          case 'wineseller'.'ogbadibo-benue'.'Benue':
                      header("location:ogbadibo-benuewineseller.php");
                        break;

                          case 'wineseller'.'ohimini-benue'.'Benue':
                      header("location:ohimini-benuewineseller.php");
                        break;

                         case 'wineseller'.'oju-benue'.'Benue':
                      header("location:oju-benuewineseller.php");
                        break;

                        case 'wineseller'.'okpokwu-benue'.'Benue':
                      header("location:okpokwu-benuewineseller.php");
                        break;


                        case 'wineseller'.'oturkpo-benue'.'Benue':
                      header("location:oturkpo-benuewineseller.php");
                        break;

                        case 'wineseller'.'tarka-benue'.'Benue':
                      header("location:tarka-benuewineseller.php");
                        break;

                        case 'wineseller'.'ukum-benue'.'Benue':
                      header("location:ukum-benuewineseller.php");
                        break;

                        case 'wineseller'.'vandekya-benue'.'Benue':
                      header("location:vandekya-benuewineseller.php");
                        break;
                        
                         case 'wineseller'.'guma-benue'.'Benue':
                      header("location:guma-benuewineseller.php");
                        break;
                        
                         case 'wineseller'.'katsina-ala-benue'.'Benue':
                      header("location:katsina-ala-benuewineseller.php");
                        break;
                        
                         case 'wineseller'.'gwer-benue'.'Benue':
                      header("location:gwer-benuewineseller.php");
                        break;

                            case 'wineseller'.'kwande-benue'.'Benue':                
                      header("location:kwande-benuewineseller.php");                   
                        break;


                        

                    

                        #END WINESELLER LOCATION


                      #BEGINING OF ENTERTAINER LOCATION
                        case 'entertainer'.'ador-benue'.'Benue':
                        header("location:ador-benueentertainer.php");
                        break;
                        
                        case 'entertainer'.'agatu-benue'.'Benue':
                        header("location:agatu-benueentertainer.php");
                        break;
                        
                        case 'entertainer'.'apa-benue'.'Benue':
                        header("location:apa-benueentertainer.php");
                        break;
                        
                        case 'entertainer'.'buruku-benue'.'Benue':
                        header("location:buruku-benueentertainer.php");
                        break;
                        
                        case 'entertainer'.'gboko-benue'.'Benue':
                        header("location:gboko-benueentertainer.php");
                        break;
                        
                        case 'entertainer'.'guma-benue'.'Benue':
                        header("location:guma-benueentertainer.php");
                        break;
                        
                        case 'entertainer'.'logo-benue'.'Benue':
                        header("location:logo-benueentertainer.php");
                        break;
                        
                        
                        case 'entertainer'.'makurdii-benue'.'Benue':
                        header("location:makurdii-benueentertainer.php");
                        break;

                         case 'entertainer'.'obi-benue'.'Benue':
                        header("location:obi-benueentertainer.php");
                        break;

                         case 'entertainer'.'ogbadibo-benue'.'Benue':
                        header("location:ogbadibo-benueentertainer.php");
                        break;

                         case 'entertainer'.'ohimini-benue'.'Benue':
                        header("location:ohimini-benueentertainer.php");
                        break;

                          case 'entertainer'.'oju-benue'.'Benue':
                        header("location:oju-benueentertainer.php");
                        break;

                        case 'entertainer'.'okpokwu-benue'.'Benue':
                        header("location:okpokwu-benueentertainer.php");
                        break;

                        case 'entertainer'.'oturkpo-benue'.'Benue':
                        header("location:oturkpo-benueentertainer.php");
                        break;

                        case 'entertainer'.'tarka-benue'.'Benue':
                        header("location:tarka-benueentertainer.php");
                        break;

                        case 'entertainer'.'ukum-benue'.'Benue':
                        header("location:ukum-benueentertainer.php");
                        break;

                        case 'entertainer'.'vandekya-benue'.'Benue':
                        header("location:vandekya-benueentertainer.php");
                        break;
                        
                        case 'entertainer'.'katsina-ala-benue'.'Benue':
                        header("location:katsina-ala-benueentertainer.php");
                        break;
                        
                        case 'entertainer'.'gwer-benue'.'Benue':
                        header("location:gwer-benueentertainer.php");
                        break;

                            case 'entertainer'.'kwande-benue'.'Benue':               
                      header("location:kwande-benueentertainer.php");                    
                        break;



                      
                        #END ENTERTAINER / MC LOCATION


                        #BEGINING MUSIC ARTIST LOCATION
                        case 'music'.'ador-benue'.'Benue':
                      header("location:ador-benuemusicband.php");
                        break;
                        
                        case 'music'.'agatu-benue'.'Benue':
                      header("location:agatu-benuemusicband.php");
                        break;
                        
                        case 'music'.'apa-benue'.'Benue':
                      header("location:apa-benuemusicband.php");
                        break;
                        
                        case 'music'.'buruku-benue'.'Benue':
                      header("location:buruku-benuemusicband.php");
                        break;
                        
                        case 'music'.'logo-benue'.'Benue':
                      header("location:logo-benuemusicband.php");
                        break;
                        
                        case 'music'.'makurdii-benue'.'Benue':
                      header("location:makurdii-benuemusicband.php");
                        break;

                         case 'music'.'obi-benue'.'Benue':
                      header("location:obi-benuemusicband.php");
                        break;

                         case 'music'.'ogbadibo-benue'.'Benue':
                      header("location:ogbadibo-benuemusicband.php");
                        break;

                         case 'music'.'ohimini-benue'.'Benue':
                      header("location:ohimini-benuemusicband.php");
                        break;

                         case 'music'.'oju-benue'.'Benue':
                      header("location:oju-benuemusicband.php");
                        break;


                         case 'music'.'okpokwu-benue'.'Benue':
                      header("location:okpokwu-benuemusicband.php");
                        break;

                         case 'music'.'oturkpo-benue'.'Benue':
                      header("location:oturkpo-benuemusicband.php");
                        break;

                         case 'music'.'tarka-benue'.'Benue':
                      header("location:tarka-benuemusicband.php");
                        break;

                         case 'music'.'ukum-benue'.'Benue':
                      header("location:ukum-benuemusicband.php");
                        break;

                         case 'music'.'vandekya-benue'.'Benue':
                      header("location:vandekya-benuemusicband.php");
                        break;
                        
                        
                        case 'music'.'gboko-benue'.'Benue':
                      header("location:gboko-benuemusicband.php");
                        break;
                        
                        case 'music'.'guma-benue'.'Benue':
                      header("location:guma-benuemusicband.php");
                        break;
                        
                          case 'music'.'katsina-ala-benue'.'Benue':
                      header("location:katsina-ala-benuemusicband.php");
                        break;
                        
                           case 'music'.'gwer-benue'.'Benue':
                      header("location:gwer-benuemusicband.php");
                        break;

                        case 'music'.'kwande-benue'.'Benue':               
                      header("location:kwande-benuemusicband.php");                    
                        break;



                      
                        #END MUSIC ARTIST LOCATION


                      #BEGINING HALL DECORATORS LOCATION
                        case 'halldecorators'.'ador-benue'.'Benue':
                      header("location:ador-benuehalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'agatu-benue'.'Benue':
                      header("location:agatu-benuehalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'apa-benue'.'Benue':
                      header("location:apa-benuehalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'logo-benue'.'Benue':
                      header("location:logo-benuehalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'makurdii-benue'.'Benue':
                      header("location:makurdii-benuehalldecorators.php");
                        break;

                        case 'halldecorators'.'ohimini-benue'.'Benue':
                      header("location:ohimini-benuehalldecorators.php");
                        break;

                        case 'halldecorators'.'oju-benue'.'Benue':
                      header("location:oju-benuehalldecorators.php");
                        break;

                        case 'halldecorators'.'okpokwu-benue'.'Benue':
                      header("location:okpokwu-benuehalldecorators.php");
                        break;

                        case 'halldecorators'.'oturkpo-benue'.'Benue':
                      header("location:oturkpo-benuehalldecorators.php");
                        break;

                        case 'halldecorators'.'tarka-benue'.'Benue':
                      header("location:tarka-benuehalldecorators.php");
                        break;

                        case 'halldecorators'.'ukum-benue'.'Benue':
                      header("location:ukum-benuehalldecorators.php");
                        break;

                        case 'halldecorators'.'vandekya-benue'.'Benue':
                      header("location:vandekya-benuehalldecorators.php");
                        break;

                        case 'halldecorators'.'obi-benue'.'Benue':
                      header("location:obi-benuehalldecorators.php");
                        break;

                        case 'halldecorators'.'ogbadibo-benue'.'Benue':
                      header("location:ogbadibo-benuehalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'buruku-benue3'.'Benue':
                      header("location:buruku-benuehalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'gboko-benue'.'Benue':
                      header("location:gboko-benuehalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'guma-benue'.'Benue':
                      header("location:guma-benuehalldecorators.php");
                        break;
                        
                         case 'halldecorators'.'katsina-ala-benue'.'Benue':
                      header("location:katsina-ala-benuehalldecorators.php");
                        break;
                        
                          case 'halldecorators'.'gwer-benue'.'Benue':
                      header("location:gwer-benuehalldecorators.php");
                        break;

                          case 'halldecorators'.'kwande-benue'.'Benue':                
                      header("location:kwande-benuehalldecorators.php");                   
                        break;



                    

                        #END HALL DECORATORS LOCATION


                        #BEGINING Djs LOCATION
                        case 'dj'.'ador-benue'.'Benue':
                      header("location:ador-benuedj.php");
                        break;
                        
                         case 'dj'.'agatu-benue'.'Benue':
                      header("location:agatu-benuedj.php");
                        break;
                        
                        case 'dj'.'apa-benue'.'Benue':
                      header("location:apa-benuedj.php");
                        break;
                        
                        case 'dj'.'buruku-benue'.'Benue':
                      header("location:buruku-benuedj.php");
                        break;
                        
                        case 'dj'.'logo-benue'.'Benue':
                      header("location:logo-benuedj.php");
                        break;
                        
                        case 'dj'.'makurdii-benue'.'Benue':
                      header("location:makurdii-benuedj.php");
                        break;

                         case 'dj'.'obi-benue'.'Benue':
                      header("location:obi-benuedj.php");
                        break;

                         case 'dj'.'ogbadibo-benue'.'Benue':
                      header("location:ogbadibo-benuedj.php");
                        break;

                         case 'dj'.'ohimini-benue'.'Benue':
                      header("location:ohimini-benuedj.php");
                        break;

                        case 'dj'.'oju-benue'.'Benue':
                      header("location:oju-benuedj.php");
                        break;

                        case 'dj'.'okpokwu-benue'.'Benue':
                      header("location:okpokwu-benuedj.php");
                        break;

                        case 'dj'.'oturkpo-benue'.'Benue':
                      header("location:oturkpo-benuedj.php");
                        break;

                        case 'dj'.'tarka-benue'.'Benue':
                      header("location:tarka-benuedj.php");
                        break;

                        case 'dj'.'ukum-benue'.'Benue':
                      header("location:ukum-benuedj.php");
                        break;

                        case 'dj'.'vandekya-benue'.'Benue':
                      header("location:vandekya-benuedj.php");
                        break;
                        
                        case 'dj'.'gboko-benue'.'Benue':
                      header("location:gboko-benuedj.php");
                        break;
                        
                        case 'dj'.'guma-benue'.'Benue':
                      header("location:guma-benuedj.php");
                        break;
                        
                        case 'dj'.'katsina-ala-benue'.'Benue':
                      header("location:katsina-ala-benuedj.php");
                        break;
                        
                        case 'dj'.'gwer-benue'.'Benue':
                      header("location:gwer-benuedj.php");
                        break;

                            case 'dj'.'kwande-benue'.'Benue':                
                      header("location:kwande-benuedj.php");                   
                        break;


                      
                        #END Djs LOCATION
                      

                        #BEGINING MARKUP LOCATION
                        case 'markup'.'ador-benue'.'Benue':
                      header("location:ador-benuemarkup.php");
                        break;
                        
                         case 'markup'.'agatu-benue'.'Benue':
                      header("location:agatu-benuemarkup.php");
                        break;
                        
                        case 'markup'.'logo-benue'.'Benue':
                      header("location:logo-benuemarkup.php");
                        break;
                        
                        case 'markup'.'makurdii-benue'.'Benue':
                      header("location:makurdii-benuemarkup.php");
                        break;

                        case 'markup'.'obi-benue'.'Benue':
                      header("location:obi-benuemarkup.php");
                        break;

                        case 'markup'.'ogbadibo-benue'.'Benue':
                      header("location:ogbadibo-benuemarkup.php");
                        break;

                        case 'markup'.'ohimini-benue'.'Benue':
                      header("location:ohimini-benuemarkup.php");
                        break;

                        case 'markup'.'oju-benue'.'Benue':
                      header("location:oju-benuemarkup.php");
                        break;

                        case 'markup'.'okpokwu-benue'.'Benue':
                      header("location:okpokwu-benuemarkup.php");
                        break;


                        case 'markup'.'oturkpo-benue'.'Benue':
                      header("location:oturkpo-benuemarkup.php");
                        break;


                        case 'markup'.'tarka-benue'.'Benue':
                      header("location:tarka-benuemarkup.php");
                        break;


                        case 'markup'.'ukum-benue'.'Benue':
                      header("location:ukum-benuemarkup.php");
                        break;


                        case 'markup'.'vandekya-benue'.'Benue':
                      header("location:vandekya-benuemarkup.php");
                        break;

                        
                          case 'markup'.'apa-benue'.'Benue':
                      header("location:apa-benuemarkup.php");
                        break;
                        
                          case 'markup'.'buruku-benue'.'Benue':
                      header("location:buruku-benuemarkup.php");
                        break;
                        
                          case 'markup'.'gboko-benue'.'Benue':
                      header("location:gboko-benuemarkup.php");
                        break;
                        
                          case 'markup'.'guma-benue'.'Benue':
                      header("location:guma-benuemarkup.php");
                        break;
                        
                        
                        case 'markup'.'katsina-ala-benue'.'Benue':
                      header("location:katsina-ala-benuemarkup.php");
                        break;
                        
                        case 'markup'.'gwer-benue'.'Benue':
                      header("location:gwer-benuemarkup.php");
                        break;


                        case 'markup'.'kwande-benue'.'Benue':                
                      header("location:kwande-benuemarkup.php");                   
                        break;
                        #END MARKUP LOCATION

                      #Benue STATE ENDING






                                              #Adamawa STATE BEGINING

                         case 'photographer'.'demsa-adamawa'.'Adamawa':
                      header("location:demsa-adamawaphotogra.php");
                        break;
                        
                        
                        case 'photographer'.'fufore-adamawa'.'Adamawa':
                      header("location:fufore-adamawaphotogra.php");
                        break;
                        
                         case 'photographer'.'ganye-adamawa'.'Adamawa':
                      header("location:ganye-adamawaphotogra.php");
                        break;

                        case 'photographer'.'gombi-adamawa'.'Adamawa':                
                      header("location:gombi-adamawaphotogra.php");                     
                        break;
                        
                          case 'photographer'.'jada-adamawa'.'Adamawa':                
                      header("location:jada-adamawaphotogra.php");                     
                        break;
                        
                          case 'photographer'.'yola-adamawa'.'Adamawa':                
                      header("location:yola-adamawaphotogra.php");                     
                        break;
                        
                          case 'photographer'.'lamurde-adamawa'.'Adamawa':                
                      header("location:lamurde-adamawaphotogra.php");                     
                        break;
                        
                          case 'photographer'.'madagali-adamawa'.'Adamawa':                
                      header("location:madagali-adamawaphotogra.php");                     
                        break;
                        
                        case 'photographer'.'maiha-adamawa'.'Adamawa':                
                      header("location:maiha-adamawaphotogra.php");                     
                        break;
                        
                          case 'photographer'.'mayo-adamawa'.'Adamawa':                
                      header("location:mayo-adamawaphotogra.php");                     
                        break;

                          case 'photographer'.'michika-adamawa'.'Adamawa':                
                      header("location:michika-adamawaphotogra.php");                     
                        break;
                          case 'photographer'.'mubi-adamawa'.'Adamawa':                
                      header("location:mubi-adamawaphotogra.php");                     
                        break;

                          case 'photographer'.'numna-adamawa'.'Adamawa':                
                      header("location:numna-adamawaphotogra.php");                     
                        break;

                          case 'photographer'.'shelleng-adamawa'.'Adamawa':                
                      header("location:shelleng-adamawaphotogra.php");                     
                        break;

                          case 'photographer'.'song-adamawa'.'Adamawa':                
                      header("location:song-adamawaphotogra.php");                     
                        break;

                         case 'photographer'.'toungo-adamawa'.'Adamawa':                
                      header("location:toungo-adamawaphotogra.php");                     
                        break;

                         case 'photographer'.'jimeta-adamawa'.'Adamawa':                
                      header("location:jimeta-adamawaphotogra.php");                     
                        break;

                         case 'photographer'.'hung-adamawa'.'Adamawa':                
                      header("location:hung-adamawaphotogra.php");                     
                        break;


                        #END PHOTGRAPHER LOCATION



                        #BEGINING VEDIOGRAPHERS LOCATION
                        case 'vediographer'.'demsa-adamawa'.'Adamawa':
                      header("location:demsa-adamawavediographer.php");
                        break;
                        
                        
                         case 'vediographer'.'Adamawa'.'Adamawa':
                      header("location:Adamawavediographer.php");
                        break;
                        
                        case 'vediographer'.'fufore-adamawa'.'Adamawa':
                      header("location:fufore-adamawavediographer.php");
                        break;
                        
                        case 'vediographer'.'ganye-adamawa'.'Adamawa':
                      header("location:ganye-adamawavediographer.php");
                        break;
                        
                        case 'vediographer'.'gombi-adamawa'.'Adamawa':
                      header("location:gombi-adamawavediographer.php");
                        break;
                        
                        case 'vediographer'.'jada-adamawa'.'Adamawa':
                      header("location:jada-adamawavediographer.php");
                        break;
                        
                         case 'vediographer'.'yola-adamawa'.'Adamawa':
                      header("location:yola-adamawavediographer.php");
                        break;
                        
                         case 'vediographer'.'lamurde-adamawa'.'Adamawa':
                      header("location:lamurde-adamawavediographer.php");
                        break;

                          case 'vediographer'.'madagali-adamawa'.'Adamawa':                
                      header("location:madagali-adamawavediographer.php");                   
                        break;
                        
                          case 'vediographer'.'maiha-adamawa'.'Adamawa':                
                      header("location:maiha-adamawavediographer.php");                   
                        break;
                        
                          case 'vediographer'.'mayo-adamawa'.'Adamawa':                
                      header("location:mayo-adamawavediographer.php");                   
                        break;

                          case 'vediographer'.'michika-adamawa'.'Adamawa':                
                      header("location:michika-adamawavediographer.php");                   
                        break;

                          case 'vediographer'.'mubi-adamawa'.'Adamawa':                
                      header("location:mubi-adamawavediographer.php");                   
                        break;

                          case 'vediographer'.'numna-adamawa'.'Adamawa':                
                      header("location:numna-adamawavediographer.php");                   
                        break;

                          case 'vediographer'.'shelleng-adamawa'.'Adamawa':                
                      header("location:shelleng-adamawavediographer.php");                   
                        break;

                          case 'vediographer'.'song-adamawa'.'Adamawa':                
                      header("location:song-adamawavediographer.php");                   
                        break;

                         case 'vediographer'.'toungo-adamawa'.'Adamawa':                
                      header("location:toungo-adamawavediographer.php");                   
                        break;

                         case 'vediographer'.'jimeta-adamawa'.'Adamawa':                
                      header("location:jimeta-adamawavediographer.php");                   
                        break;

                         case 'vediographer'.'hung-adamawa'.'Adamawa':                
                      header("location:hung-adamawavediographer.php");                   
                        break;

                     

                

                        #END VEDIOGRAPHERS LOCATION


                        #BEGINING CATERERS LOCATION
                        case 'caterers'.'demsa-adamawa'.'Adamawa':
                      header("location:demsa-adamawacaterers.php");
                        break;
                        
                         case 'caterers'.'Adamawa'.'Adamawa':
                      header("location:Adamawacaterers.php");
                        break;
                        
                         case 'caterers'.'fufore-adamawa'.'Adamawa':
                      header("location:fufore-adamawacaterers.php");
                        break;
                        
                          case 'caterers'.'maiha-adamawa'.'Adamawa':
                      header("location:maiha-adamawacaterers.php");
                        break;
                        
                          case 'caterers'.'mayo-adamawa'.'Adamawa':
                      header("location:mayo-adamawacaterers.php");
                        break;

                        case 'caterers'.'michika-adamawa'.'Adamawa':
                      header("location:michika-adamawacaterers.php");
                        break;

                        case 'caterers'.'mubi-adamawa'.'Adamawa':
                      header("location:mubi-adamawacaterers.php");
                        break;

                        case 'caterers'.'numna-adamawa'.'Adamawa':
                      header("location:numna-adamawacaterers.php");
                        break;

                        case 'caterers'.'shelleng-adamawa'.'Adamawa':
                      header("location:shelleng-adamawacaterers.php");
                        break;

                        case 'caterers'.'song-adamawa'.'Adamawa':
                      header("location:song-adamawacaterers.php");
                        break;

                        case 'caterers'.'toungo-adamawa'.'Adamawa':
                      header("location:toungo-adamawacaterers.php");
                        break;

                        case 'caterers'.'jimeta-adamawa'.'Adamawa':
                      header("location:jimeta-adamawacaterers.php");
                        break;

                        case 'caterers'.'hung-adamawa'.'Adamawa':
                      header("location:hung-adamawacaterers.php");
                        break;
                        
                         case 'caterers'.'ganye-adamawa'.'Adamawa':
                      header("location:ganye-adamawacaterers.php");
                        break;
                        
                         case 'caterers'.'gombi-adamawa'.'Adamawa':
                      header("location:gombi-adamawacaterers.php");
                        break;
                        
                         case 'caterers'.'jada-adamawa'.'Adamawa':
                      header("location:jada-adamawacaterers.php");
                        break;
                        
                          case 'caterers'.'lamurde-adamawa'.'Adamawa':
                      header("location:lamurde-adamawacaterers.php");
                        break;
                        
                           case 'caterers'.'yola-adamawa'.'Adamawa':
                      header("location:yola-adamawacaterers.php");
                        break;

                          case 'caterers'.'madagali-adamawa'.'Adamawa':                
                      header("location:madagali-adamawacaterers.php");                   
                        break;

                        case 'caterers'.'oye-Adamawa'.'Adamawa':
                      header("location:oye-Adamawacaterers.php");                   
                       break;

                        

                        #END CATERERS LOCATION


                        #BEGINING WINESELLER LOCATION
                        case 'wineseller'.'demsa-adamawa'.'Adamawa':
                      header("location:demsa-adamawawineseller.php");
                        break;
                        
                        case 'wineseller'.'Adamawa'.'Adamawa':
                      header("location:Adamawawineseller.php");
                        break;
                        
                         case 'wineseller'.'fufore-adamawa'.'Adamawa':
                      header("location:fufore-adamawawineseller.php");
                        break;
                        
                         case 'wineseller'.'ganye-adamawa'.'Adamawa':
                      header("location:ganye-adamawawineseller.php");
                        break;
                        
                         case 'wineseller'.'gombi-adamawa'.'Adamawa':
                      header("location:gombi-adamawawineseller.php");
                        break;
                        
                           case 'wineseller'.'maiha-adamawa'.'Adamawa':
                      header("location:maiha-adamawawineseller.php");
                        break;
                        
                           case 'wineseller'.'mayo-adamawa'.'Adamawa':
                      header("location:mayo-adamawawineseller.php");
                        break;

                          case 'wineseller'.'michika-adamawa'.'Adamawa':
                      header("location:michika-adamawawineseller.php");
                        break;

                          case 'wineseller'.'mubi-adamawa'.'Adamawa':
                      header("location:mubi-adamawawineseller.php");
                        break;

                          case 'wineseller'.'numna-adamawa'.'Adamawa':
                      header("location:numna-adamawawineseller.php");
                        break;

                          case 'wineseller'.'shelleng-adamawa'.'Adamawa':
                      header("location:shelleng-adamawawineseller.php");
                        break;

                          case 'wineseller'.'song-adamawa'.'Adamawa':
                      header("location:song-adamawawineseller.php");
                        break;

                        case 'wineseller'.'toungo-adamawa'.'Adamawa':
                      header("location:toungo-adamawawineseller.php");
                        break;

                        case 'wineseller'.'jimeta-adamawa'.'Adamawa':
                      header("location:jimeta-adamawawineseller.php");
                        break;

                        case 'wineseller'.'hung-adamawa'.'Adamawa':
                      header("location:hung-adamawawineseller.php");
                        break;
                        
                         case 'wineseller'.'jada-adamawa'.'Adamawa':
                      header("location:jada-adamawawineseller.php");
                        break;
                        
                         case 'wineseller'.'lamurde-adamawa'.'Adamawa':
                      header("location:lamurde-adamawawineseller.php");
                        break;
                        
                         case 'wineseller'.'yola-adamawa'.'Adamawa':
                      header("location:yola-adamawawineseller.php");
                        break;

                            case 'wineseller'.'madagali-adamawa'.'Adamawa':                
                      header("location:madagali-adamawawineseller.php");                   
                        break;

                       

                     

                        #END WINESELLER LOCATION


                      #BEGINING OF ENTERTAINER LOCATION
                        case 'entertainer'.'demsa-adamawa'.'Adamawa':
                        header("location:demsa-adamawaentertainer.php");
                        break;
                        
                        case 'entertainer'.'Adamawa'.'Adamawa':
                        header("location:Adamawaentertainer.php");
                        break;
                        
                        case 'entertainer'.'fufore-adamawa'.'Adamawa':
                        header("location:fufore-adamawaentertainer.php");
                        break;
                        
                        case 'entertainer'.'ganye-adamawa'.'Adamawa':
                        header("location:ganye-adamawaentertainer.php");
                        break;
                        
                        case 'entertainer'.'gombi-adamawa'.'Adamawa':
                        header("location:gombi-adamawaentertainer.php");
                        break;
                        
                        case 'entertainer'.'jada-adamawa'.'Adamawa':
                        header("location:jada-adamawaentertainer.php");
                        break;
                        
                        case 'entertainer'.'maiha-adamawa'.'Adamawa':
                        header("location:maiha-adamawaentertainer.php");
                        break;
                        
                        
                        case 'entertainer'.'mayo-adamawa'.'Adamawa':
                        header("location:mayo-adamawaentertainer.php");
                        break;

                        case 'entertainer'.'michika-adamawa'.'Adamawa':
                        header("location:michika-adamawaentertainer.php");
                        break;

                        case 'entertainer'.'mubi-adamawa'.'Adamawa':
                        header("location:mubi-adamawaentertainer.php");
                        break;

                        case 'entertainer'.'numna-adamawa'.'Adamawa':
                        header("location:numna-adamawaentertainer.php");
                        break;

                        case 'entertainer'.'shelleng-adamawa'.'Adamawa':
                        header("location:shelleng-adamawaentertainer.php");
                        break;

                        case 'entertainer'.'song-adamawa'.'Adamawa':
                        header("location:song-adamawaentertainer.php");
                        break;
                        

                        case 'entertainer'.'toungo-adamawa'.'Adamawa':
                        header("location:toungo-adamawaentertainer.php");
                        break;

                        case 'entertainer'.'jimeta-adamawa'.'Adamawa':
                        header("location:jimeta-adamawaentertainer.php");
                        break;

                        case 'entertainer'.'hung-adamawa'.'Adamawa':
                        header("location:hung-adamawaentertainer.php");
                        break;
                        case 'entertainer'.'lamurde-adamawa'.'Adamawa':
                        header("location:lamurde-adamawaentertainer.php");
                        break;
                        
                        case 'entertainer'.'yola-adamawa'.'Adamawa':
                        header("location:yola-adamawaentertainer.php");
                        break;

                            case 'entertainer'.'madagali-adamawa'.'Adamawa':               
                      header("location:madagali-adamawaentertainer.php");                    
                        break;


                    
                        #END ENTERTAINER / MC LOCATION


                        #BEGINING MUSIC ARTIST LOCATION
                        case 'music'.'demsa-adamawa'.'Adamawa':
                      header("location:demsa-adamawamusicband.php");
                        break;
                        
                        case 'music'.'Adamawa'.'Adamawa':
                      header("location:Adamawamusicband.php");
                        break;
                        
                        case 'music'.'fufore-adamawa'.'Adamawa':
                      header("location:fufore-adamawamusicband.php");
                        break;
                        
                        case 'music'.'ganye-adamawa'.'Adamawa':
                      header("location:ganye-adamawamusicband.php");
                        break;
                        
                        case 'music'.'maiha-adamawa'.'Adamawa':
                      header("location:maiha-adamawamusicband.php");
                        break;
                        
                        case 'music'.'mayo-adamawa'.'Adamawa':
                      header("location:mayo-adamawamusicband.php");
                        break;

                         case 'music'.'michika-adamawa'.'Adamawa':
                      header("location:michika-adamawamusicband.php");
                        break;

                         case 'music'.'mubi-adamawa'.'Adamawa':
                      header("location:mubi-adamawamusicband.php");
                        break;

                         case 'music'.'numna-adamawa'.'Adamawa':
                      header("location:numna-adamawamusicband.php");
                        break;

                         case 'music'.'shelleng-adamawa'.'Adamawa':
                      header("location:shelleng-adamawamusicband.php");
                        break;

                         case 'music'.'song-adamawa'.'Adamawa':
                      header("location:song-adamawamusicband.php");
                        break;

                        case 'music'.'toungo-adamawa'.'Adamawa':
                      header("location:toungo-adamawamusicband.php");
                        break;

                        case 'music'.'jimeta-adamawa'.'Adamawa':
                      header("location:jimeta-adamawamusicband.php");
                        break;

                        case 'music'.'hung-adamawa'.'Adamawa':
                      header("location:hung-adamawamusicband.php");
                        break;
                        
                        
                        case 'music'.'gombi-adamawa'.'Adamawa':
                      header("location:gombi-adamawamusicband.php");
                        break;
                        
                        case 'music'.'jada-adamawa'.'Adamawa':
                      header("location:jada-adamawamusicband.php");
                        break;
                        
                          case 'music'.'lamurde-adamawa'.'Adamawa':
                      header("location:lamurde-adamawamusicband.php");
                        break;
                        
                           case 'music'.'yola-adamawa'.'Adamawa':
                      header("location:yola-adamawamusicband.php");
                        break;

                        case 'music'.'madagali-adamawa'.'Adamawa':               
                      header("location:madagali-adamawamusicband.php");                    
                        break;

                       

                      
                        #END MUSIC ARTIST LOCATION


                      #BEGINING HALL DECORATORS LOCATION
                        case 'halldecorators'.'demsa-adamawa'.'Adamawa':
                      header("location:demsa-adamawahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'Adamawa'.'Adamawa':
                      header("location:Adamawahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'fufore-adamawa'.'Adamawa':
                      header("location:fufore-adamawahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'maiha-adamawa'.'Adamawa':
                      header("location:maiha-adamawahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'mayo-adamawa'.'Adamawa':
                      header("location:mayo-adamawahalldecorators.php");
                        break;

                        case 'halldecorators'.'michika-adamawa'.'Adamawa':
                      header("location:michika-adamawahalldecorators.php");
                        break;

                         case 'halldecorators'.'mubi-adamawa'.'Adamawa':
                      header("location:mubi-adamawahalldecorators.php");
                        break;

                         case 'halldecorators'.'numna-adamawa'.'Adamawa':
                      header("location:numna-adamawahalldecorators.php");
                        break;

                         case 'halldecorators'.'shelleng-adamawa'.'Adamawa':
                      header("location:shelleng-adamawahalldecorators.php");
                        break;

                         case 'halldecorators'.'song-adamawa'.'Adamawa':
                      header("location:song-adamawahalldecorators.php");
                        break;

                         case 'halldecorators'.'toungo-adamawa'.'Adamawa':
                      header("location:toungo-adamawahalldecorators.php");
                        break;

                         case 'halldecorators'.'jimeta-adamawa'.'Adamawa':
                      header("location:jimeta-adamawahalldecorators.php");
                        break;

                         case 'halldecorators'.'hung-adamawa'.'Adamawa':
                      header("location:hung-adamawahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'ganye-adamawa'.'Adamawa':
                      header("location:ganye-adamawahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'gombi-adamawa'.'Adamawa':
                      header("location:gombi-adamawahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'jada-adamawa'.'Adamawa':
                      header("location:jada-adamawahalldecorators.php");
                        break;
                        
                         case 'halldecorators'.'lamurde-adamawa'.'Adamawa':
                      header("location:lamurde-adamawahalldecorators.php");
                        break;
                        
                          case 'halldecorators'.'yola-adamawa'.'Adamawa':
                      header("location:yola-adamawahalldecorators.php");
                        break;

                          case 'halldecorators'.'madagali-adamawa'.'Adamawa':                
                      header("location:madagali-adamawahalldecorators.php");                   
                        break;


                        #END HALL DECORATORS LOCATION


                        #BEGINING Djs LOCATION
                        case 'dj'.'demsa-adamawa'.'Adamawa':
                      header("location:demsa-adamawadj.php");
                        break;
                        
                         case 'dj'.'Adamawa'.'Adamawa':
                      header("location:Adamawadj.php");
                        break;
                        
                        case 'dj'.'fufore-adamawa'.'Adamawa':
                      header("location:fufore-adamawadj.php");
                        break;
                        
                        case 'dj'.'ganye-adamawa'.'Adamawa':
                      header("location:ganye-adamawadj.php");
                        break;
                        
                        case 'dj'.'maiha-adamawa'.'Adamawa':
                      header("location:maiha-adamawadj.php");
                        break;
                        
                        case 'dj'.'mayo-adamawa'.'Adamawa':
                      header("location:mayo-adamawadj.php");
                        break;

                        case 'dj'.'michika-adamawa'.'Adamawa':
                      header("location:michika-adamawadj.php");
                        break;

                        case 'dj'.'mubi-adamawa'.'Adamawa':
                      header("location:mubi-adamawadj.php");
                        break;

                        case 'dj'.'numna-adamawa'.'Adamawa':
                      header("location:numna-adamawadj.php");
                        break;

                        case 'dj'.'shelleng-adamawa'.'Adamawa':
                      header("location:shelleng-adamawadj.php");
                        break;

                        case 'dj'.'song-adamawa'.'Adamawa':
                      header("location:song-adamawadj.php");
                        break;

                        case 'dj'.'toungo-adamawa'.'Adamawa':
                      header("location:toungo-adamawadj.php");
                        break;

                        case 'dj'.'jimeta-adamawa'.'Adamawa':
                      header("location:jimeta-adamawadj.php");
                        break;

                        case 'dj'.'hung-adamawa'.'Adamawa':
                      header("location:hung-adamawadj.php");
                        break;
                        
                        case 'dj'.'gombi-adamawa'.'Adamawa':
                      header("location:gombi-adamawadj.php");
                        break;
                        
                        case 'dj'.'jada-adamawa'.'Adamawa':
                      header("location:jada-adamawadj.php");
                        break;
                        
                        case 'dj'.'lamurde-adamawa'.'Adamawa':
                      header("location:lamurde-adamawadj.php");
                        break;
                        
                        case 'dj'.'yola-adamawa'.'Adamawa':
                      header("location:yola-adamawadj.php");
                        break;

                            case 'dj'.'madagali-adamawa'.'Adamawa':                
                      header("location:madagali-adamawadj.php");                   
                        break;


                        #END Djs LOCATION
                      

                        #BEGINING MARKUP LOCATION
                        case 'markup'.'demsa-adamawa'.'Adamawa':
                      header("location:demsa-adamawamarkup.php");
                        break;
                        
                         case 'markup'.'Adamawa'.'Adamawa':
                      header("location:Adamawamarkup.php");
                        break;
                        
                        case 'markup'.'maiha-adamawa'.'Adamawa':
                      header("location:maiha-adamawamarkup.php");
                        break;
                        
                        case 'markup'.'mayo-adamawa'.'Adamawa':
                      header("location:mayo-adamawamarkup.php");
                        break;

                         case 'markup'.'michika-adamawa'.'Adamawa':
                      header("location:michika-adamawamarkup.php");
                        break;

                         case 'markup'.'mubi-adamawa'.'Adamawa':
                      header("location:mubi-adamawamarkup.php");
                        break;

                         case 'markup'.'numna-adamawa'.'Adamawa':
                      header("location:numna-adamawamarkup.php");
                        break;

                         case 'markup'.'shelleng-adamawa'.'Adamawa':
                      header("location:shelleng-adamawamarkup.php");
                        break;

                         case 'markup'.'song-adamawa'.'Adamawa':
                      header("location:song-adamawamarkup.php");
                        break;

                         case 'markup'.'toungo-adamawa'.'Adamawa':
                      header("location:toungo-adamawamarkup.php");
                        break;

                         case 'markup'.'jimeta-adamawa'.'Adamawa':
                      header("location:jimeta-adamawamarkup.php");
                        break;

                         case 'markup'.'hung-adamawa'.'Adamawa':
                      header("location:hung-adamawamarkup.php");
                        break;
                        
                          case 'markup'.'fufore-adamawa'.'Adamawa':
                      header("location:fufore-adamawamarkup.php");
                        break;
                        
                          case 'markup'.'ganye-adamawa'.'Adamawa':
                      header("location:ganye-adamawamarkup.php");
                        break;
                        
                          case 'markup'.'gombi-adamawa'.'Adamawa':
                      header("location:gombi-adamawamarkup.php");
                        break;
                        
                          case 'markup'.'jada-adamawa'.'Adamawa':
                      header("location:jada-adamawamarkup.php");
                        break;
                        
                        
                        case 'markup'.'lamurde-adamawa'.'Adamawa':
                      header("location:lamurde-adamawamarkup.php");
                        break;
                        
                        case 'markup'.'yola-adamawa'.'Adamawa':
                      header("location:yola-adamawamarkup.php");
                        break;


                        case 'markup'.'madagali-adamawa'.'Adamawa':                
                      header("location:madagali-adamawamarkup.php");                   
                        break;
                        #END MARKUP LOCATION

                      #Adamawa STATE ENDING






                                              #Bauchi STATE BEGINING

                         case 'photographer'.'alkaleri-bauchi'.'Bauchi':
                      header("location:alkaleri-bauchiphotogra.php");
                        break;
                        
                        
                        case 'photographer'.'bauchi-bauchi'.'Bauchi':
                      header("location:bauchi-bauchiphotogra.php");
                        break;
                        
                         case 'photographer'.'bogoro-bauchi'.'Bauchi':
                      header("location:bogoro-bauchiphotogra.php");
                        break;

                        case 'photographer'.'darazo-bauchi'.'Bauchi':                
                      header("location:darazo-bauchiphotogra.php");                     
                        break;
                        
                          case 'photographer'.'dass-bauchi'.'Bauchi':                
                      header("location:dass-bauchiphotogra.php");                     
                        break;
                        
                          case 'photographer'.'gamawa-bauchi'.'Bauchi':                
                      header("location:gamawa-bauchiphotogra.php");                     
                        break;
                        
                          case 'photographer'.'ganjuwa-bauchi'.'Bauchi':                
                      header("location:ganjuwa-bauchiphotogra.php");                     
                        break;
                        
                          case 'photographer'.'giade-bauchi'.'Bauchi':                
                      header("location:giade-bauchiphotogra.php");                     
                        break;
                        
                        case 'photographer'.'jamaare-bauchi'.'Bauchi':                
                      header("location:jamaare-bauchiphotogra.php");                     
                        break;
                        
                          case 'photographer'.'katagum-bauchi'.'Bauchi':                
                      header("location:katagum-bauchiphotogra.php");                     
                        break;

                          case 'photographer'.'kirfi-bauchi'.'Bauchi':                
                      header("location:kirfi-bauchiphotogra.php");                     
                        break;
                          case 'photographer'.'misau-bauchi'.'Bauchi':                
                      header("location:misau-bauchiphotogra.php");                     
                        break;

                          case 'photographer'.'ningi-bauchi'.'Bauchi':                
                      header("location:ningi-bauchiphotogra.php");                     
                        break;

                          case 'photographer'.'hira-bauchi'.'Bauchi':                
                      header("location:hira-bauchiphotogra.php");                     
                        break;

                          case 'photographer'.'tafawa-balewa-bauchi'.'Bauchi':                
                      header("location:tafawa-balewa-bauchiphotogra.php");                     
                        break;

                         case 'photographer'.'itas-gadau-bauchi'.'Bauchi':                
                      header("location:itas-gadau-bauchiphotogra.php");                     
                        break;

                         case 'photographer'.'toro-bauchi'.'Bauchi':                
                      header("location:toro-bauchiphotogra.php");                     
                        break;

                         case 'photographer'.'warji-bauchi'.'Bauchi':                
                      header("location:warji-bauchiphotogra.php");                     
                        break;

                         case 'photographer'.'zaki-bauchi'.'Bauchi':                
                      header("location:zaki-bauchiphotogra.php");                     
                        break;

                         case 'photographer'.'dambam-bauchi'.'Bauchi':                
                      header("location:dambam-bauchiphotogra.php");                     
                        break;




                        #END PHOTGRAPHER LOCATION



                        #BEGINING VEDIOGRAPHERS LOCATION
                        case 'vediographer'.'alkaleri-bauchi'.'Bauchi':
                      header("location:alkaleri-bauchivediographer.php");
                        break;
                        
                        
                         case 'vediographer'.'Bauchi'.'Bauchi':
                      header("location:Bauchivediographer.php");
                        break;
                        
                        case 'vediographer'.'bauchi-bauchi'.'Bauchi':
                      header("location:bauchi-bauchivediographer.php");
                        break;
                        
                        case 'vediographer'.'bogoro-bauchi'.'Bauchi':
                      header("location:bogoro-bauchivediographer.php");
                        break;
                        
                        case 'vediographer'.'darazo-bauchi'.'Bauchi':
                      header("location:darazo-bauchivediographer.php");
                        break;
                        
                        case 'vediographer'.'dass-bauchi'.'Bauchi':
                      header("location:dass-bauchivediographer.php");
                        break;
                        
                         case 'vediographer'.'gamawa-bauchi'.'Bauchi':
                      header("location:gamawa-bauchivediographer.php");
                        break;
                        
                         case 'vediographer'.'ganjuwa-bauchi'.'Bauchi':
                      header("location:ganjuwa-bauchivediographer.php");
                        break;

                          case 'vediographer'.'giade-bauchi'.'Bauchi':                
                      header("location:giade-bauchivediographer.php");                   
                        break;
                        
                          case 'vediographer'.'jamaare-bauchi'.'Bauchi':                
                      header("location:jamaare-bauchivediographer.php");                   
                        break;
                        
                          case 'vediographer'.'katagum-bauchi'.'Bauchi':                
                      header("location:katagum-bauchivediographer.php");                   
                        break;

                          case 'vediographer'.'kirfi-bauchi'.'Bauchi':                
                      header("location:kirfi-bauchivediographer.php");                   
                        break;

                          case 'vediographer'.'misau-bauchi'.'Bauchi':                
                      header("location:misau-bauchivediographer.php");                   
                        break;

                          case 'vediographer'.'ningi-bauchi'.'Bauchi':                
                      header("location:ningi-bauchivediographer.php");                   
                        break;

                          case 'vediographer'.'hira-bauchi'.'Bauchi':                
                      header("location:hira-bauchivediographer.php");                   
                        break;

                          case 'vediographer'.'tafawa-balewa-bauchi'.'Bauchi':                
                      header("location:tafawa-balewa-bauchivediographer.php");                   
                        break;

                         case 'vediographer'.'itas-gadau-bauchi'.'Bauchi':                
                      header("location:itas-gadau-bauchivediographer.php");                   
                        break;

                         case 'vediographer'.'toro-bauchi'.'Bauchi':                
                      header("location:toro-bauchivediographer.php");                   
                        break;

                         case 'vediographer'.'warji-bauchi'.'Bauchi':                
                      header("location:warji-bauchivediographer.php");                   
                        break;

                         case 'vediographer'.'zaki-bauchi'.'Bauchi':                
                      header("location:zaki-bauchivediographer.php");                   
                        break;

                         case 'vediographer'.'dambam-bauchi'.'Bauchi':                
                      header("location:dambam-bauchivediographer.php");                   
                        break;

                     

                

                        #END VEDIOGRAPHERS LOCATION


                        #BEGINING CATERERS LOCATION
                        case 'caterers'.'alkaleri-bauchi'.'Bauchi':
                      header("location:alkaleri-bauchicaterers.php");
                        break;
                        
                         case 'caterers'.'Bauchi'.'Bauchi':
                      header("location:Bauchicaterers.php");
                        break;
                        
                         case 'caterers'.'bauchi-bauchi'.'Bauchi':
                      header("location:bauchi-bauchicaterers.php");
                        break;
                        
                          case 'caterers'.'jamaare-bauchi'.'Bauchi':
                      header("location:jamaare-bauchicaterers.php");
                        break;
                        
                          case 'caterers'.'katagum-bauchi'.'Bauchi':
                      header("location:katagum-bauchicaterers.php");
                        break;

                        case 'caterers'.'kirfi-bauchi'.'Bauchi':
                      header("location:kirfi-bauchicaterers.php");
                        break;

                        case 'caterers'.'misau-bauchi'.'Bauchi':
                      header("location:misau-bauchicaterers.php");
                        break;

                        case 'caterers'.'ningi-bauchi'.'Bauchi':
                      header("location:ningi-bauchicaterers.php");
                        break;

                        case 'caterers'.'hira-bauchi'.'Bauchi':
                      header("location:hira-bauchicaterers.php");
                        break;

                        case 'caterers'.'tafawa-balewa-bauchi'.'Bauchi':
                      header("location:tafawa-balewa-bauchicaterers.php");
                        break;

                        case 'caterers'.'itas-gadau-bauchi'.'Bauchi':
                      header("location:itas-gadau-bauchicaterers.php");
                        break;

                        case 'caterers'.'toro-bauchi'.'Bauchi':
                      header("location:toro-bauchicaterers.php");
                        break;

                        case 'caterers'.'warji-bauchi'.'Bauchi':
                      header("location:warji-bauchicaterers.php");
                        break;

                        case 'caterers'.'zaki-bauchi'.'Bauchi':
                      header("location:zaki-bauchicaterers.php");
                        break;

                        case 'caterers'.'dambam-bauchi'.'Bauchi':
                      header("location:dambam-bauchicaterers.php");
                        break;
                        
                         case 'caterers'.'bogoro-bauchi'.'Bauchi':
                      header("location:bogoro-bauchicaterers.php");
                        break;
                        
                         case 'caterers'.'darazo-bauchi'.'Bauchi':
                      header("location:darazo-bauchicaterers.php");
                        break;
                        
                         case 'caterers'.'dass-bauchi'.'Bauchi':
                      header("location:dass-bauchicaterers.php");
                        break;
                        
                          case 'caterers'.'ganjuwa-bauchi'.'Bauchi':
                      header("location:ganjuwa-bauchicaterers.php");
                        break;
                        
                           case 'caterers'.'gamawa-bauchi'.'Bauchi':
                      header("location:gamawa-bauchicaterers.php");
                        break;

                          case 'caterers'.'giade-bauchi'.'Bauchi':                
                      header("location:giade-bauchicaterers.php");                   
                        break;

                        case 'caterers'.'oye-Bauchi'.'Bauchi':
                      header("location:oye-Bauchicaterers.php");                   
                       break;

                        

                        #END CATERERS LOCATION


                        #BEGINING WINESELLER LOCATION
                        case 'wineseller'.'alkaleri-bauchi'.'Bauchi':
                      header("location:alkaleri-bauchiwineseller.php");
                        break;
                        
                        case 'wineseller'.'Bauchi'.'Bauchi':
                      header("location:Bauchiwineseller.php");
                        break;
                        
                         case 'wineseller'.'bauchi-bauchi'.'Bauchi':
                      header("location:bauchi-bauchiwineseller.php");
                        break;
                        
                         case 'wineseller'.'bogoro-bauchi'.'Bauchi':
                      header("location:bogoro-bauchiwineseller.php");
                        break;
                        
                         case 'wineseller'.'darazo-bauchi'.'Bauchi':
                      header("location:darazo-bauchiwineseller.php");
                        break;
                        
                           case 'wineseller'.'jamaare-bauchi'.'Bauchi':
                      header("location:jamaare-bauchiwineseller.php");
                        break;
                        
                           case 'wineseller'.'katagum-bauchi'.'Bauchi':
                      header("location:katagum-bauchiwineseller.php");
                        break;

                          case 'wineseller'.'kirfi-bauchi'.'Bauchi':
                      header("location:kirfi-bauchiwineseller.php");
                        break;

                          case 'wineseller'.'misau-bauchi'.'Bauchi':
                      header("location:misau-bauchiwineseller.php");
                        break;

                          case 'wineseller'.'ningi-bauchi'.'Bauchi':
                      header("location:ningi-bauchiwineseller.php");
                        break;

                          case 'wineseller'.'hira-bauchi'.'Bauchi':
                      header("location:hira-bauchiwineseller.php");
                        break;

                          case 'wineseller'.'tafawa-balewa-bauchi'.'Bauchi':
                      header("location:tafawa-balewa-bauchiwineseller.php");
                        break;

                        case 'wineseller'.'itas-gadau-bauchi'.'Bauchi':
                      header("location:itas-gadau-bauchiwineseller.php");
                        break;

                        case 'wineseller'.'toro-bauchi'.'Bauchi':
                      header("location:toro-bauchiwineseller.php");
                        break;

                        case 'wineseller'.'warji-bauchi'.'Bauchi':
                      header("location:warji-bauchiwineseller.php");
                        break;

                         case 'wineseller'.'zaki-bauchi'.'Bauchi':
                      header("location:zaki-bauchiwineseller.php");
                        break;

                         case 'wineseller'.'dambam-bauchi'.'Bauchi':
                      header("location:dambam-bauchiwineseller.php");
                        break;
                        
                         case 'wineseller'.'dass-bauchi'.'Bauchi':
                      header("location:dass-bauchiwineseller.php");
                        break;
                        
                         case 'wineseller'.'ganjuwa-bauchi'.'Bauchi':
                      header("location:ganjuwa-bauchiwineseller.php");
                        break;
                        
                         case 'wineseller'.'gamawa-bauchi'.'Bauchi':
                      header("location:gamawa-bauchiwineseller.php");
                        break;

                            case 'wineseller'.'giade-bauchi'.'Bauchi':                
                      header("location:giade-bauchiwineseller.php");                   
                        break;

                       

                     

                        #END WINESELLER LOCATION


                      #BEGINING OF ENTERTAINER LOCATION
                        case 'entertainer'.'alkaleri-bauchi'.'Bauchi':
                        header("location:alkaleri-bauchientertainer.php");
                        break;
                        
                        case 'entertainer'.'Bauchi'.'Bauchi':
                        header("location:Bauchientertainer.php");
                        break;
                        
                        case 'entertainer'.'bauchi-bauchi'.'Bauchi':
                        header("location:bauchi-bauchientertainer.php");
                        break;
                        
                        case 'entertainer'.'bogoro-bauchi'.'Bauchi':
                        header("location:bogoro-bauchientertainer.php");
                        break;
                        
                        case 'entertainer'.'darazo-bauchi'.'Bauchi':
                        header("location:darazo-bauchientertainer.php");
                        break;
                        
                        case 'entertainer'.'dass-bauchi'.'Bauchi':
                        header("location:dass-bauchientertainer.php");
                        break;
                        
                        case 'entertainer'.'jamaare-bauchi'.'Bauchi':
                        header("location:jamaare-bauchientertainer.php");
                        break;
                        
                        
                        case 'entertainer'.'katagum-bauchi'.'Bauchi':
                        header("location:katagum-bauchientertainer.php");
                        break;

                        case 'entertainer'.'kirfi-bauchi'.'Bauchi':
                        header("location:kirfi-bauchientertainer.php");
                        break;

                        case 'entertainer'.'misau-bauchi'.'Bauchi':
                        header("location:misau-bauchientertainer.php");
                        break;

                        case 'entertainer'.'ningi-bauchi'.'Bauchi':
                        header("location:ningi-bauchientertainer.php");
                        break;

                        case 'entertainer'.'hira-bauchi'.'Bauchi':
                        header("location:hira-bauchientertainer.php");
                        break;

                        case 'entertainer'.'tafawa-balewa-bauchi'.'Bauchi':
                        header("location:tafawa-balewa-bauchientertainer.php");
                        break;
                        

                        case 'entertainer'.'itas-gadau-bauchi'.'Bauchi':
                        header("location:itas-gadau-bauchientertainer.php");
                        break;

                        case 'entertainer'.'toro-bauchi'.'Bauchi':
                        header("location:toro-bauchientertainer.php");
                        break;

                        case 'entertainer'.'warji-bauchi'.'Bauchi':
                        header("location:warji-bauchientertainer.php");
                        break;

                        case 'entertainer'.'zaki-bauchi'.'Bauchi':
                        header("location:zaki-bauchientertainer.php");
                        break;

                        case 'entertainer'.'dambam-bauchi'.'Bauchi':
                        header("location:dambam-bauchientertainer.php");
                        break;



                        case 'entertainer'.'ganjuwa-bauchi'.'Bauchi':
                        header("location:ganjuwa-bauchientertainer.php");
                        break;
                        
                        case 'entertainer'.'gamawa-bauchi'.'Bauchi':
                        header("location:gamawa-bauchientertainer.php");
                        break;

                            case 'entertainer'.'giade-bauchi'.'Bauchi':               
                      header("location:giade-bauchientertainer.php");                    
                        break;


                    
                        #END ENTERTAINER / MC LOCATION


                        #BEGINING MUSIC ARTIST LOCATION
                        case 'music'.'alkaleri-bauchi'.'Bauchi':
                      header("location:alkaleri-bauchimusicband.php");
                        break;
                        
                        case 'music'.'Bauchi'.'Bauchi':
                      header("location:Bauchimusicband.php");
                        break;
                        
                        case 'music'.'bauchi-bauchi'.'Bauchi':
                      header("location:bauchi-bauchimusicband.php");
                        break;
                        
                        case 'music'.'bogoro-bauchi'.'Bauchi':
                      header("location:bogoro-bauchimusicband.php");
                        break;
                        
                        case 'music'.'jamaare-bauchi'.'Bauchi':
                      header("location:jamaare-bauchimusicband.php");
                        break;
                        
                        case 'music'.'katagum-bauchi'.'Bauchi':
                      header("location:katagum-bauchimusicband.php");
                        break;

                         case 'music'.'kirfi-bauchi'.'Bauchi':
                      header("location:kirfi-bauchimusicband.php");
                        break;

                         case 'music'.'misau-bauchi'.'Bauchi':
                      header("location:misau-bauchimusicband.php");
                        break;

                         case 'music'.'ningi-bauchi'.'Bauchi':
                      header("location:ningi-bauchimusicband.php");
                        break;

                         case 'music'.'hira-bauchi'.'Bauchi':
                      header("location:hira-bauchimusicband.php");
                        break;

                         case 'music'.'tafawa-balewa-bauchi'.'Bauchi':
                      header("location:tafawa-balewa-bauchimusicband.php");
                        break;

                        case 'music'.'itas-gadau-bauchi'.'Bauchi':
                      header("location:itas-gadau-bauchimusicband.php");
                        break;

                        case 'music'.'toro-bauchi'.'Bauchi':
                      header("location:toro-bauchimusicband.php");
                        break;

                        case 'music'.'warji-bauchi'.'Bauchi':
                      header("location:warji-bauchimusicband.php");
                        break;

                         case 'music'.'zaki-bauchi'.'Bauchi':
                      header("location:zaki-bauchimusicband.php");
                        break;

                         case 'music'.'dambam-bauchi'.'Bauchi':
                      header("location:dambam-bauchimusicband.php");
                        break;
                        
                        
                        case 'music'.'darazo-bauchi'.'Bauchi':
                      header("location:darazo-bauchimusicband.php");
                        break;
                        
                        case 'music'.'dass-bauchi'.'Bauchi':
                      header("location:dass-bauchimusicband.php");
                        break;
                        
                          case 'music'.'ganjuwa-bauchi'.'Bauchi':
                      header("location:ganjuwa-bauchimusicband.php");
                        break;
                        
                           case 'music'.'gamawa-bauchi'.'Bauchi':
                      header("location:gamawa-bauchimusicband.php");
                        break;

                        case 'music'.'giade-bauchi'.'Bauchi':               
                      header("location:giade-bauchimusicband.php");                    
                        break;

                       

                      
                        #END MUSIC ARTIST LOCATION


                      #BEGINING HALL DECORATORS LOCATION
                        case 'halldecorators'.'alkaleri-bauchi'.'Bauchi':
                      header("location:alkaleri-bauchihalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'Bauchi'.'Bauchi':
                      header("location:Bauchihalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'bauchi-bauchi'.'Bauchi':
                      header("location:bauchi-bauchihalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'jamaare-bauchi'.'Bauchi':
                      header("location:jamaare-bauchihalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'katagum-bauchi'.'Bauchi':
                      header("location:katagum-bauchihalldecorators.php");
                        break;

                        case 'halldecorators'.'kirfi-bauchi'.'Bauchi':
                      header("location:kirfi-bauchihalldecorators.php");
                        break;

                         case 'halldecorators'.'misau-bauchi'.'Bauchi':
                      header("location:misau-bauchihalldecorators.php");
                        break;

                         case 'halldecorators'.'ningi-bauchi'.'Bauchi':
                      header("location:ningi-bauchihalldecorators.php");
                        break;

                         case 'halldecorators'.'hira-bauchi'.'Bauchi':
                      header("location:hira-bauchihalldecorators.php");
                        break;

                         case 'halldecorators'.'tafawa-balewa-bauchi'.'Bauchi':
                      header("location:tafawa-balewa-bauchihalldecorators.php");
                        break;

                         case 'halldecorators'.'itas-gadau-bauchi'.'Bauchi':
                      header("location:itas-gadau-bauchihalldecorators.php");
                        break;

                         case 'halldecorators'.'toro-bauchi'.'Bauchi':
                      header("location:toro-bauchihalldecorators.php");
                        break;

                         case 'halldecorators'.'warji-bauchi'.'Bauchi':
                      header("location:warji-bauchihalldecorators.php");
                        break;

                        case 'halldecorators'.'zaki-bauchi'.'Bauchi':
                      header("location:zaki-bauchihalldecorators.php");
                        break;

                        case 'halldecorators'.'dambam-bauchi'.'Bauchi':
                      header("location:dambam-bauchihalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'bogoro-bauchi'.'Bauchi':
                      header("location:bogoro-bauchihalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'darazo-bauchi'.'Bauchi':
                      header("location:darazo-bauchihalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'dass-bauchi'.'Bauchi':
                      header("location:dass-bauchihalldecorators.php");
                        break;
                        
                         case 'halldecorators'.'ganjuwa-bauchi'.'Bauchi':
                      header("location:ganjuwa-bauchihalldecorators.php");
                        break;
                        
                          case 'halldecorators'.'gamawa-bauchi'.'Bauchi':
                      header("location:gamawa-bauchihalldecorators.php");
                        break;

                          case 'halldecorators'.'giade-bauchi'.'Bauchi':                
                      header("location:giade-bauchihalldecorators.php");                   
                        break;


                        #END HALL DECORATORS LOCATION


                        #BEGINING Djs LOCATION
                        case 'dj'.'alkaleri-bauchi'.'Bauchi':
                      header("location:alkaleri-bauchidj.php");
                        break;
                        
                         case 'dj'.'Bauchi'.'Bauchi':
                      header("location:Bauchidj.php");
                        break;
                        
                        case 'dj'.'bauchi-bauchi'.'Bauchi':
                      header("location:bauchi-bauchidj.php");
                        break;
                        
                        case 'dj'.'bogoro-bauchi'.'Bauchi':
                      header("location:bogoro-bauchidj.php");
                        break;
                        
                        case 'dj'.'jamaare-bauchi'.'Bauchi':
                      header("location:jamaare-bauchidj.php");
                        break;
                        
                        case 'dj'.'katagum-bauchi'.'Bauchi':
                      header("location:katagum-bauchidj.php");
                        break;

                        case 'dj'.'kirfi-bauchi'.'Bauchi':
                      header("location:kirfi-bauchidj.php");
                        break;

                        case 'dj'.'misau-bauchi'.'Bauchi':
                      header("location:misau-bauchidj.php");
                        break;

                        case 'dj'.'ningi-bauchi'.'Bauchi':
                      header("location:ningi-bauchidj.php");
                        break;

                        case 'dj'.'hira-bauchi'.'Bauchi':
                      header("location:hira-bauchidj.php");
                        break;

                        case 'dj'.'tafawa-balewa-bauchi'.'Bauchi':
                      header("location:tafawa-balewa-bauchidj.php");
                        break;

                        case 'dj'.'itas-gadau-bauchi'.'Bauchi':
                      header("location:itas-gadau-bauchidj.php");
                        break;

                        case 'dj'.'toro-bauchi'.'Bauchi':
                      header("location:toro-bauchidj.php");
                        break;

                        case 'dj'.'warji-bauchi'.'Bauchi':
                      header("location:warji-bauchidj.php");
                        break;

                        case 'dj'.'zaki-bauchi'.'Bauchi':
                      header("location:zaki-bauchidj.php");
                        break;

                        case 'dj'.'dambam-bauchi'.'Bauchi':
                      header("location:dambam-bauchidj.php");
                        break;
                        
                        case 'dj'.'darazo-bauchi'.'Bauchi':
                      header("location:darazo-bauchidj.php");
                        break;
                        
                        case 'dj'.'dass-bauchi'.'Bauchi':
                      header("location:dass-bauchidj.php");
                        break;
                        
                        case 'dj'.'ganjuwa-bauchi'.'Bauchi':
                      header("location:ganjuwa-bauchidj.php");
                        break;
                        
                        case 'dj'.'gamawa-bauchi'.'Bauchi':
                      header("location:gamawa-bauchidj.php");
                        break;

                            case 'dj'.'giade-bauchi'.'Bauchi':                
                      header("location:giade-bauchidj.php");                   
                        break;


                        #END Djs LOCATION
                      

                        #BEGINING MARKUP LOCATION
                        case 'markup'.'alkaleri-bauchi'.'Bauchi':
                      header("location:alkaleri-bauchimarkup.php");
                        break;
                        
                         case 'markup'.'Bauchi'.'Bauchi':
                      header("location:Bauchimarkup.php");
                        break;
                        
                        case 'markup'.'jamaare-bauchi'.'Bauchi':
                      header("location:jamaare-bauchimarkup.php");
                        break;
                        
                        case 'markup'.'katagum-bauchi'.'Bauchi':
                      header("location:katagum-bauchimarkup.php");
                        break;

                         case 'markup'.'kirfi-bauchi'.'Bauchi':
                      header("location:kirfi-bauchimarkup.php");
                        break;

                         case 'markup'.'misau-bauchi'.'Bauchi':
                      header("location:misau-bauchimarkup.php");
                        break;

                         case 'markup'.'ningi-bauchi'.'Bauchi':
                      header("location:ningi-bauchimarkup.php");
                        break;

                         case 'markup'.'hira-bauchi'.'Bauchi':
                      header("location:hira-bauchimarkup.php");
                        break;

                         case 'markup'.'tafawa-balewa-bauchi'.'Bauchi':
                      header("location:tafawa-balewa-bauchimarkup.php");
                        break;

                         case 'markup'.'itas-gadau-bauchi'.'Bauchi':
                      header("location:itas-gadau-bauchimarkup.php");
                        break;

                         case 'markup'.'toro-bauchi'.'Bauchi':
                      header("location:toro-bauchimarkup.php");
                        break;

                         case 'markup'.'warji-bauchi'.'Bauchi':
                      header("location:warji-bauchimarkup.php");
                        break;

                        case 'markup'.'zaki-bauchi'.'Bauchi':
                      header("location:zaki-bauchimarkup.php");
                        break;

                        case 'markup'.'dambam-bauchi'.'Bauchi':
                      header("location:dambam-bauchimarkup.php");
                        break;
                        
                          case 'markup'.'bauchi-bauchi'.'Bauchi':
                      header("location:bauchi-bauchimarkup.php");
                        break;
                        
                          case 'markup'.'bogoro-bauchi'.'Bauchi':
                      header("location:bogoro-bauchimarkup.php");
                        break;
                        
                          case 'markup'.'darazo-bauchi'.'Bauchi':
                      header("location:darazo-bauchimarkup.php");
                        break;
                        
                          case 'markup'.'dass-bauchi'.'Bauchi':
                      header("location:dass-bauchimarkup.php");
                        break;
                        
                        
                        case 'markup'.'ganjuwa-bauchi'.'Bauchi':
                      header("location:ganjuwa-bauchimarkup.php");
                        break;
                        
                        case 'markup'.'gamawa-bauchi'.'Bauchi':
                      header("location:gamawa-bauchimarkup.php");
                        break;


                        case 'markup'.'giade-bauchi'.'Bauchi':                
                      header("location:giade-bauchimarkup.php");                   
                        break;
                        #END MARKUP LOCATION

                      #Bauchi STATE ENDING





                                              #Borno STATE BEGINING

                         case 'photographer'.'abadan-borno'.'Borno':
                      header("location:abadan-bornophotogra.php");
                        break;
                        
                        
                        case 'photographer'.'askira-borno'.'Borno':
                      header("location:askira-bornophotogra.php");
                        break;
                        
                         case 'photographer'.'bama-borno'.'Borno':
                      header("location:bama-bornophotogra.php");
                        break;

                        case 'photographer'.'biu-borno'.'Borno':                
                      header("location:biu-bornophotogra.php");                     
                        break;
                        
                          case 'photographer'.'chibok-borno'.'Borno':                
                      header("location:chibok-bornophotogra.php");                     
                        break;
                        
                          case 'photographer'.'damboa-borno'.'Borno':                
                      header("location:damboa-bornophotogra.php");                     
                        break;
                        
                          case 'photographer'.'dikwagubio-borno'.'Borno':                
                      header("location:dikwagubio-bornophotogra.php");                     
                        break;
                        
                          case 'photographer'.'guzamala-borno'.'Borno':                
                      header("location:guzamala-bornophotogra.php");                     
                        break;
                        
                        case 'photographer'.'gwoza-borno'.'Borno':                
                      header("location:gwoza-bornophotogra.php");                     
                        break;
                        
                          case 'photographer'.'hawul-borno'.'Borno':                
                      header("location:hawul-bornophotogra.php");                     
                        break;

                          case 'photographer'.'jere-borno'.'Borno':                
                      header("location:jere-bornophotogra.php");                     
                        break;
                          case 'photographer'.'kaga-borno'.'Borno':                
                      header("location:kaga-bornophotogra.php");                     
                        break;

                          case 'photographer'.'kalka-borno'.'Borno':                
                      header("location:kalka-bornophotogra.php");                     
                        break;

                          case 'photographer'.'konduga-borno'.'Borno':                
                      header("location:konduga-bornophotogra.php");                     
                        break;

                          case 'photographer'.'kukawa-borno'.'Borno':                
                      header("location:kukawa-bornophotogra.php");                     
                        break;

                         case 'photographer'.'mafa-borno'.'Borno':                
                      header("location:mafa-bornophotogra.php");                     
                        break;

                         case 'photographer'.'magumeri-borno'.'Borno':                
                      header("location:magumeri-bornophotogra.php");                     
                        break;

                         case 'photographer'.'maiduguri-borno'.'Borno':                
                      header("location:maiduguri-bornophotogra.php");                     
                        break;

                         case 'photographer'.'marte-borno'.'Borno':                
                      header("location:marte-bornophotogra.php");                     
                        break;

                         case 'photographer'.'mobbar-borno'.'Borno':                
                      header("location:mobbar-bornophotogra.php");                     
                        break;

                         case 'photographer'.'monguno-borno'.'Borno':                
                      header("location:monguno-bornophotogra.php");                     
                        break;

                         case 'photographer'.'ngala-borno'.'Borno':                
                      header("location:ngala-bornophotogra.php");                     
                        break;

                         case 'photographer'.'nganzai-borno'.'Borno':                
                      header("location:nganzai-bornophotogra.php");                     
                        break;

                         case 'photographer'.'shani-borno'.'Borno':                
                      header("location:shani-bornophotogra.php");                     
                        break;




                        #END PHOTGRAPHER LOCATION



                        #BEGINING VEDIOGRAPHERS LOCATION
                        case 'vediographer'.'abadan-borno'.'Borno':
                      header("location:abadan-bornovediographer.php");
                        break;
                        
                        
                         case 'vediographer'.'Borno'.'Borno':
                      header("location:Bornovediographer.php");
                        break;
                        
                        case 'vediographer'.'askira-borno'.'Borno':
                      header("location:askira-bornovediographer.php");
                        break;
                        
                        case 'vediographer'.'bama-borno'.'Borno':
                      header("location:bama-bornovediographer.php");
                        break;
                        
                        case 'vediographer'.'biu-borno'.'Borno':
                      header("location:biu-bornovediographer.php");
                        break;
                        
                        case 'vediographer'.'chibok-borno'.'Borno':
                      header("location:chibok-bornovediographer.php");
                        break;
                        
                         case 'vediographer'.'damboa-borno'.'Borno':
                      header("location:damboa-bornovediographer.php");
                        break;
                        
                         case 'vediographer'.'dikwagubio-borno'.'Borno':
                      header("location:dikwagubio-bornovediographer.php");
                        break;

                          case 'vediographer'.'guzamala-borno'.'Borno':                
                      header("location:guzamala-bornovediographer.php");                   
                        break;
                        
                          case 'vediographer'.'gwoza-borno'.'Borno':                
                      header("location:gwoza-bornovediographer.php");                   
                        break;
                        
                          case 'vediographer'.'hawul-borno'.'Borno':                
                      header("location:hawul-bornovediographer.php");                   
                        break;

                          case 'vediographer'.'jere-borno'.'Borno':                
                      header("location:jere-bornovediographer.php");                   
                        break;

                          case 'vediographer'.'kaga-borno'.'Borno':                
                      header("location:kaga-bornovediographer.php");                   
                        break;

                          case 'vediographer'.'kalka-borno'.'Borno':                
                      header("location:kalka-bornovediographer.php");                   
                        break;

                          case 'vediographer'.'konduga-borno'.'Borno':                
                      header("location:konduga-bornovediographer.php");                   
                        break;

                          case 'vediographer'.'kukawa-borno'.'Borno':                
                      header("location:kukawa-bornovediographer.php");                   
                        break;

                         case 'vediographer'.'mafa-borno'.'Borno':                
                      header("location:mafa-bornovediographer.php");                   
                        break;

                         case 'vediographer'.'magumeri-borno'.'Borno':                
                      header("location:magumeri-bornovediographer.php");                   
                        break;

                         case 'vediographer'.'maiduguri-borno'.'Borno':                
                      header("location:maiduguri-bornovediographer.php");                   
                        break;

                         case 'vediographer'.'marte-borno'.'Borno':                
                      header("location:marte-bornovediographer.php");                   
                        break;

                         case 'vediographer'.'mobbar-borno'.'Borno':                
                      header("location:mobbar-bornovediographer.php");                   
                        break;

                         case 'vediographer'.'monguno-borno'.'Borno':                
                      header("location:monguno-bornovediographer.php");                   
                        break;

                         case 'vediographer'.'ngala-borno'.'Borno':                
                      header("location:ngala-bornovediographer.php");                   
                        break;

                         case 'vediographer'.'nganzai-borno'.'Borno':                
                      header("location:nganzai-bornovediographer.php");                   
                        break;

                         case 'vediographer'.'shani-borno'.'Borno':                
                      header("location:shani-bornovediographer.php");                   
                        break;

                     

                

                        #END VEDIOGRAPHERS LOCATION


                        #BEGINING CATERERS LOCATION
                        case 'caterers'.'abadan-borno'.'Borno':
                      header("location:abadan-bornocaterers.php");
                        break;
                        
                         case 'caterers'.'Borno'.'Borno':
                      header("location:Bornocaterers.php");
                        break;
                        
                         case 'caterers'.'askira-borno'.'Borno':
                      header("location:askira-bornocaterers.php");
                        break;
                        
                          case 'caterers'.'gwoza-borno'.'Borno':
                      header("location:gwoza-bornocaterers.php");
                        break;
                        
                          case 'caterers'.'hawul-borno'.'Borno':
                      header("location:hawul-bornocaterers.php");
                        break;

                        case 'caterers'.'jere-borno'.'Borno':
                      header("location:jere-bornocaterers.php");
                        break;

                        case 'caterers'.'kaga-borno'.'Borno':
                      header("location:kaga-bornocaterers.php");
                        break;

                        case 'caterers'.'kalka-borno'.'Borno':
                      header("location:kalka-bornocaterers.php");
                        break;

                        case 'caterers'.'konduga-borno'.'Borno':
                      header("location:konduga-bornocaterers.php");
                        break;

                        case 'caterers'.'kukawa-borno'.'Borno':
                      header("location:kukawa-bornocaterers.php");
                        break;

                        case 'caterers'.'mafa-borno'.'Borno':
                      header("location:mafa-bornocaterers.php");
                        break;

                        case 'caterers'.'magumeri-borno'.'Borno':
                      header("location:magumeri-bornocaterers.php");
                        break;

                        case 'caterers'.'maiduguri-borno'.'Borno':
                      header("location:maiduguri-bornocaterers.php");
                        break;

                        case 'caterers'.'marte-borno'.'Borno':
                      header("location:marte-bornocaterers.php");
                        break;

                        case 'caterers'.'mobbar-borno'.'Borno':
                      header("location:mobbar-bornocaterers.php");
                        break;

                        case 'caterers'.'monguno-borno'.'Borno':
                      header("location:monguno-bornocaterers.php");
                        break;

                        case 'caterers'.'ngala-borno'.'Borno':
                      header("location:ngala-bornocaterers.php");
                        break;

                        case 'caterers'.'nganzai-borno'.'Borno':
                      header("location:nganzai-bornocaterers.php");
                        break;

                        case 'caterers'.'shani-borno'.'Borno':
                      header("location:shani-bornocaterers.php");
                        break;
                        
                         case 'caterers'.'bama-borno'.'Borno':
                      header("location:bama-bornocaterers.php");
                        break;
                        
                         case 'caterers'.'biu-borno'.'Borno':
                      header("location:biu-bornocaterers.php");
                        break;
                        
                         case 'caterers'.'chibok-borno'.'Borno':
                      header("location:chibok-bornocaterers.php");
                        break;
                        
                          case 'caterers'.'dikwagubio-borno'.'Borno':
                      header("location:dikwagubio-bornocaterers.php");
                        break;
                        
                           case 'caterers'.'damboa-borno'.'Borno':
                      header("location:damboa-bornocaterers.php");
                        break;

                          case 'caterers'.'guzamala-borno'.'Borno':                
                      header("location:guzamala-bornocaterers.php");                   
                        break;

                        case 'caterers'.'oye-Borno'.'Borno':
                      header("location:oye-Bornocaterers.php");                   
                       break;

                        

                        #END CATERERS LOCATION


                        #BEGINING WINESELLER LOCATION
                        case 'wineseller'.'abadan-borno'.'Borno':
                      header("location:abadan-bornowineseller.php");
                        break;
                        
                        case 'wineseller'.'Borno'.'Borno':
                      header("location:Bornowineseller.php");
                        break;
                        
                         case 'wineseller'.'askira-borno'.'Borno':
                      header("location:askira-bornowineseller.php");
                        break;
                        
                         case 'wineseller'.'bama-borno'.'Borno':
                      header("location:bama-bornowineseller.php");
                        break;
                        
                         case 'wineseller'.'biu-borno'.'Borno':
                      header("location:biu-bornowineseller.php");
                        break;
                        
                           case 'wineseller'.'gwoza-borno'.'Borno':
                      header("location:gwoza-bornowineseller.php");
                        break;
                        
                           case 'wineseller'.'hawul-borno'.'Borno':
                      header("location:hawul-bornowineseller.php");
                        break;

                          case 'wineseller'.'jere-borno'.'Borno':
                      header("location:jere-bornowineseller.php");
                        break;

                          case 'wineseller'.'kaga-borno'.'Borno':
                      header("location:kaga-bornowineseller.php");
                        break;

                          case 'wineseller'.'kalka-borno'.'Borno':
                      header("location:kalka-bornowineseller.php");
                        break;

                          case 'wineseller'.'konduga-borno'.'Borno':
                      header("location:konduga-bornowineseller.php");
                        break;

                          case 'wineseller'.'kukawa-borno'.'Borno':
                      header("location:kukawa-bornowineseller.php");
                        break;

                        case 'wineseller'.'mafa-borno'.'Borno':
                      header("location:mafa-bornowineseller.php");
                        break;

                        case 'wineseller'.'magumeri-borno'.'Borno':
                      header("location:magumeri-bornowineseller.php");
                        break;

                        case 'wineseller'.'maiduguri-borno'.'Borno':
                      header("location:maiduguri-bornowineseller.php");
                        break;

                         case 'wineseller'.'marte-borno'.'Borno':
                      header("location:marte-bornowineseller.php");
                        break;

                         case 'wineseller'.'mobbar-borno'.'Borno':
                      header("location:mobbar-bornowineseller.php");
                        break;

                        case 'wineseller'.'monguno-borno'.'Borno':
                      header("location:monguno-bornowineseller.php");
                        break;

                        case 'wineseller'.'ngala-borno'.'Borno':
                      header("location:ngala-bornowineseller.php");
                        break;

                        case 'wineseller'.'nganzai-borno'.'Borno':
                      header("location:nganzai-bornowineseller.php");
                        break;

                        case 'wineseller'.'shani-borno'.'Borno':
                      header("location:shani-bornowineseller.php");
                        break;
                        
                         case 'wineseller'.'chibok-borno'.'Borno':
                      header("location:chibok-bornowineseller.php");
                        break;
                        
                         case 'wineseller'.'dikwagubio-borno'.'Borno':
                      header("location:dikwagubio-bornowineseller.php");
                        break;
                        
                         case 'wineseller'.'damboa-borno'.'Borno':
                      header("location:damboa-bornowineseller.php");
                        break;

                            case 'wineseller'.'guzamala-borno'.'Borno':                
                      header("location:guzamala-bornowineseller.php");                   
                        break;

                       

                     

                        #END WINESELLER LOCATION


                      #BEGINING OF ENTERTAINER LOCATION
                        case 'entertainer'.'abadan-borno'.'Borno':
                        header("location:abadan-bornoentertainer.php");
                        break;
                        
                        case 'entertainer'.'Borno'.'Borno':
                        header("location:Bornoentertainer.php");
                        break;
                        
                        case 'entertainer'.'askira-borno'.'Borno':
                        header("location:askira-bornoentertainer.php");
                        break;
                        
                        case 'entertainer'.'bama-borno'.'Borno':
                        header("location:bama-bornoentertainer.php");
                        break;
                        
                        case 'entertainer'.'biu-borno'.'Borno':
                        header("location:biu-bornoentertainer.php");
                        break;
                        
                        case 'entertainer'.'chibok-borno'.'Borno':
                        header("location:chibok-bornoentertainer.php");
                        break;
                        
                        case 'entertainer'.'gwoza-borno'.'Borno':
                        header("location:gwoza-bornoentertainer.php");
                        break;
                        
                        
                        case 'entertainer'.'hawul-borno'.'Borno':
                        header("location:hawul-bornoentertainer.php");
                        break;

                        case 'entertainer'.'jere-borno'.'Borno':
                        header("location:jere-bornoentertainer.php");
                        break;

                        case 'entertainer'.'kaga-borno'.'Borno':
                        header("location:kaga-bornoentertainer.php");
                        break;

                        case 'entertainer'.'kalka-borno'.'Borno':
                        header("location:kalka-bornoentertainer.php");
                        break;

                        case 'entertainer'.'konduga-borno'.'Borno':
                        header("location:konduga-bornoentertainer.php");
                        break;

                        case 'entertainer'.'kukawa-borno'.'Borno':
                        header("location:kukawa-bornoentertainer.php");
                        break;
                        

                        case 'entertainer'.'mafa-borno'.'Borno':
                        header("location:mafa-bornoentertainer.php");
                        break;

                        case 'entertainer'.'magumeri-borno'.'Borno':
                        header("location:magumeri-bornoentertainer.php");
                        break;

                        case 'entertainer'.'maiduguri-borno'.'Borno':
                        header("location:maiduguri-bornoentertainer.php");
                        break;

                        case 'entertainer'.'marte-borno'.'Borno':
                        header("location:marte-bornoentertainer.php");
                        break;

                        case 'entertainer'.'mobbar-borno'.'Borno':
                        header("location:mobbar-bornoentertainer.php");
                        break;

                        case 'entertainer'.'monguno-borno'.'Borno':
                        header("location:monguno-bornoentertainer.php");
                        break;

                        case 'entertainer'.'ngala-borno'.'Borno':
                        header("location:ngala-bornoentertainer.php");
                        break;

                        case 'entertainer'.'nganzai-borno'.'Borno':
                        header("location:nganzai-bornoentertainer.php");
                        break;

                        case 'entertainer'.'shani-borno'.'Borno':
                        header("location:shani-bornoentertainer.php");
                        break;



                        case 'entertainer'.'dikwagubio-borno'.'Borno':
                        header("location:dikwagubio-bornoentertainer.php");
                        break;
                        
                        case 'entertainer'.'damboa-borno'.'Borno':
                        header("location:damboa-bornoentertainer.php");
                        break;

                            case 'entertainer'.'guzamala-borno'.'Borno':               
                      header("location:guzamala-bornoentertainer.php");                    
                        break;


                    
                        #END ENTERTAINER / MC LOCATION


                        #BEGINING MUSIC ARTIST LOCATION
                        case 'music'.'abadan-borno'.'Borno':
                      header("location:abadan-bornomusicband.php");
                        break;
                        
                        case 'music'.'Borno'.'Borno':
                      header("location:Bornomusicband.php");
                        break;
                        
                        case 'music'.'askira-borno'.'Borno':
                      header("location:askira-bornomusicband.php");
                        break;
                        
                        case 'music'.'bama-borno'.'Borno':
                      header("location:bama-bornomusicband.php");
                        break;
                        
                        case 'music'.'gwoza-borno'.'Borno':
                      header("location:gwoza-bornomusicband.php");
                        break;
                        
                        case 'music'.'hawul-borno'.'Borno':
                      header("location:hawul-bornomusicband.php");
                        break;

                         case 'music'.'jere-borno'.'Borno':
                      header("location:jere-bornomusicband.php");
                        break;

                         case 'music'.'kaga-borno'.'Borno':
                      header("location:kaga-bornomusicband.php");
                        break;

                         case 'music'.'kalka-borno'.'Borno':
                      header("location:kalka-bornomusicband.php");
                        break;

                         case 'music'.'konduga-borno'.'Borno':
                      header("location:konduga-bornomusicband.php");
                        break;

                         case 'music'.'kukawa-borno'.'Borno':
                      header("location:kukawa-bornomusicband.php");
                        break;

                        case 'music'.'mafa-borno'.'Borno':
                      header("location:mafa-bornomusicband.php");
                        break;

                        case 'music'.'magumeri-borno'.'Borno':
                      header("location:magumeri-bornomusicband.php");
                        break;

                        case 'music'.'maiduguri-borno'.'Borno':
                      header("location:maiduguri-bornomusicband.php");
                        break;

                         case 'music'.'marte-borno'.'Borno':
                      header("location:marte-bornomusicband.php");
                        break;

                         case 'music'.'mobbar-borno'.'Borno':
                      header("location:mobbar-bornomusicband.php");
                        break;
                        

                         case 'music'.'monguno-borno'.'Borno':
                      header("location:monguno-bornomusicband.php");
                        break;

                         case 'music'.'ngala-borno'.'Borno':
                      header("location:ngala-bornomusicband.php");
                        break;

                         case 'music'.'nganzai-borno'.'Borno':
                      header("location:nganzai-bornomusicband.php");
                        break;

                         case 'music'.'shani-borno'.'Borno':
                      header("location:shani-bornomusicband.php");
                        break;
                        
                        case 'music'.'biu-borno'.'Borno':
                      header("location:biu-bornomusicband.php");
                        break;
                        
                        case 'music'.'chibok-borno'.'Borno':
                      header("location:chibok-bornomusicband.php");
                        break;
                        
                          case 'music'.'dikwagubio-borno'.'Borno':
                      header("location:dikwagubio-bornomusicband.php");
                        break;
                        
                           case 'music'.'damboa-borno'.'Borno':
                      header("location:damboa-bornomusicband.php");
                        break;

                        case 'music'.'guzamala-borno'.'Borno':               
                      header("location:guzamala-bornomusicband.php");                    
                        break;

                       

                      
                        #END MUSIC ARTIST LOCATION


                      #BEGINING HALL DECORATORS LOCATION
                        case 'halldecorators'.'abadan-borno'.'Borno':
                      header("location:abadan-bornohalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'Borno'.'Borno':
                      header("location:Bornohalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'askira-borno'.'Borno':
                      header("location:askira-bornohalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'gwoza-borno'.'Borno':
                      header("location:gwoza-bornohalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'hawul-borno'.'Borno':
                      header("location:hawul-bornohalldecorators.php");
                        break;

                        case 'halldecorators'.'jere-borno'.'Borno':
                      header("location:jere-bornohalldecorators.php");
                        break;

                         case 'halldecorators'.'kaga-borno'.'Borno':
                      header("location:kaga-bornohalldecorators.php");
                        break;

                         case 'halldecorators'.'kalka-borno'.'Borno':
                      header("location:kalka-bornohalldecorators.php");
                        break;

                         case 'halldecorators'.'konduga-borno'.'Borno':
                      header("location:konduga-bornohalldecorators.php");
                        break;

                         case 'halldecorators'.'kukawa-borno'.'Borno':
                      header("location:kukawa-bornohalldecorators.php");
                        break;

                         case 'halldecorators'.'mafa-borno'.'Borno':
                      header("location:mafa-bornohalldecorators.php");
                        break;

                         case 'halldecorators'.'magumeri-borno'.'Borno':
                      header("location:magumeri-bornohalldecorators.php");
                        break;

                         case 'halldecorators'.'maiduguri-borno'.'Borno':
                      header("location:maiduguri-bornohalldecorators.php");
                        break;

                        case 'halldecorators'.'marte-borno'.'Borno':
                      header("location:marte-bornohalldecorators.php");
                        break;

                        case 'halldecorators'.'mobbar-borno'.'Borno':
                      header("location:mobbar-bornohalldecorators.php");
                        break;

                        case 'halldecorators'.'monguno-borno'.'Borno':
                      header("location:monguno-bornohalldecorators.php");
                        break;

                        case 'halldecorators'.'ngala-borno'.'Borno':
                      header("location:ngala-bornohalldecorators.php");
                        break;

                        case 'halldecorators'.'nganzai-borno'.'Borno':
                      header("location:nganzai-bornohalldecorators.php");
                        break;

                        case 'halldecorators'.'shani-borno'.'Borno':
                      header("location:shani-bornohalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'bama-borno'.'Borno':
                      header("location:bama-bornohalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'biu-borno'.'Borno':
                      header("location:biu-bornohalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'chibok-borno'.'Borno':
                      header("location:chibok-bornohalldecorators.php");
                        break;
                        
                         case 'halldecorators'.'dikwagubio-borno'.'Borno':
                      header("location:dikwagubio-bornohalldecorators.php");
                        break;
                        
                          case 'halldecorators'.'damboa-borno'.'Borno':
                      header("location:damboa-bornohalldecorators.php");
                        break;

                          case 'halldecorators'.'guzamala-borno'.'Borno':                
                      header("location:guzamala-bornohalldecorators.php");                   
                        break;


                        #END HALL DECORATORS LOCATION


                        #BEGINING Djs LOCATION
                        case 'dj'.'abadan-borno'.'Borno':
                      header("location:abadan-bornodj.php");
                        break;
                        
                         case 'dj'.'Borno'.'Borno':
                      header("location:Bornodj.php");
                        break;
                        
                        case 'dj'.'askira-borno'.'Borno':
                      header("location:askira-bornodj.php");
                        break;
                        
                        case 'dj'.'bama-borno'.'Borno':
                      header("location:bama-bornodj.php");
                        break;
                        
                        case 'dj'.'gwoza-borno'.'Borno':
                      header("location:gwoza-bornodj.php");
                        break;
                        
                        case 'dj'.'hawul-borno'.'Borno':
                      header("location:hawul-bornodj.php");
                        break;

                        case 'dj'.'jere-borno'.'Borno':
                      header("location:jere-bornodj.php");
                        break;

                        case 'dj'.'kaga-borno'.'Borno':
                      header("location:kaga-bornodj.php");
                        break;

                        case 'dj'.'kalka-borno'.'Borno':
                      header("location:kalka-bornodj.php");
                        break;

                        case 'dj'.'konduga-borno'.'Borno':
                      header("location:konduga-bornodj.php");
                        break;

                        case 'dj'.'kukawa-borno'.'Borno':
                      header("location:kukawa-bornodj.php");
                        break;

                        case 'dj'.'mafa-borno'.'Borno':
                      header("location:mafa-bornodj.php");
                        break;

                        case 'dj'.'magumeri-borno'.'Borno':
                      header("location:magumeri-bornodj.php");
                        break;

                        case 'dj'.'maiduguri-borno'.'Borno':
                      header("location:maiduguri-bornodj.php");
                        break;

                        case 'dj'.'marte-borno'.'Borno':
                      header("location:marte-bornodj.php");
                        break;

                        case 'dj'.'mobbar-borno'.'Borno':
                      header("location:mobbar-bornodj.php");
                        break;

                           case 'dj'.'monguno-borno'.'Borno':
                      header("location:monguno-bornodj.php");
                        break;

                           case 'dj'.'ngala-borno'.'Borno':
                      header("location:ngala-bornodj.php");
                        break;

                           case 'dj'.'nganzai-borno'.'Borno':
                      header("location:nganzai-bornodj.php");
                        break;

                           case 'dj'.'shani-borno'.'Borno':
                      header("location:shani-bornodj.php");
                        break;
                        
                        case 'dj'.'biu-borno'.'Borno':
                      header("location:biu-bornodj.php");
                        break;
                        
                        case 'dj'.'chibok-borno'.'Borno':
                      header("location:chibok-bornodj.php");
                        break;
                        
                        case 'dj'.'dikwagubio-borno'.'Borno':
                      header("location:dikwagubio-bornodj.php");
                        break;
                        
                        case 'dj'.'damboa-borno'.'Borno':
                      header("location:damboa-bornodj.php");
                        break;

                            case 'dj'.'guzamala-borno'.'Borno':                
                      header("location:guzamala-bornodj.php");                   
                        break;


                        #END Djs LOCATION
                      

                        #BEGINING MARKUP LOCATION
                        case 'markup'.'abadan-borno'.'Borno':
                      header("location:abadan-bornomarkup.php");
                        break;
                        
                         case 'markup'.'Borno'.'Borno':
                      header("location:Bornomarkup.php");
                        break;
                        
                        case 'markup'.'gwoza-borno'.'Borno':
                      header("location:gwoza-bornomarkup.php");
                        break;
                        
                        case 'markup'.'hawul-borno'.'Borno':
                      header("location:hawul-bornomarkup.php");
                        break;

                         case 'markup'.'jere-borno'.'Borno':
                      header("location:jere-bornomarkup.php");
                        break;

                         case 'markup'.'kaga-borno'.'Borno':
                      header("location:kaga-bornomarkup.php");
                        break;

                         case 'markup'.'kalka-borno'.'Borno':
                      header("location:kalka-bornomarkup.php");
                        break;

                         case 'markup'.'konduga-borno'.'Borno':
                      header("location:konduga-bornomarkup.php");
                        break;

                         case 'markup'.'kukawa-borno'.'Borno':
                      header("location:kukawa-bornomarkup.php");
                        break;

                         case 'markup'.'mafa-borno'.'Borno':
                      header("location:mafa-bornomarkup.php");
                        break;

                         case 'markup'.'magumeri-borno'.'Borno':
                      header("location:magumeri-bornomarkup.php");
                        break;

                         case 'markup'.'maiduguri-borno'.'Borno':
                      header("location:maiduguri-bornomarkup.php");
                        break;

                        case 'markup'.'marte-borno'.'Borno':
                      header("location:marte-bornomarkup.php");
                        break;

                        case 'markup'.'mobbar-borno'.'Borno':
                      header("location:mobbar-bornomarkup.php");
                        break;

                         case 'markup'.'monguno-borno'.'Borno':
                      header("location:monguno-bornomarkup.php");
                        break;

                         case 'markup'.'ngala-borno'.'Borno':
                      header("location:ngala-bornomarkup.php");
                        break;

                         case 'markup'.'nganzai-borno'.'Borno':
                      header("location:nganzai-bornomarkup.php");
                        break;

                         case 'markup'.'shani-borno'.'Borno':
                      header("location:shani-bornomarkup.php");
                        break;
                        
                          case 'markup'.'askira-borno'.'Borno':
                      header("location:askira-bornomarkup.php");
                        break;
                        
                          case 'markup'.'bama-borno'.'Borno':
                      header("location:bama-bornomarkup.php");
                        break;
                        
                          case 'markup'.'biu-borno'.'Borno':
                      header("location:biu-bornomarkup.php");
                        break;
                        
                          case 'markup'.'chibok-borno'.'Borno':
                      header("location:chibok-bornomarkup.php");
                        break;
                        
                        
                        case 'markup'.'dikwagubio-borno'.'Borno':
                      header("location:dikwagubio-bornomarkup.php");
                        break;
                        
                        case 'markup'.'damboa-borno'.'Borno':
                      header("location:damboa-bornomarkup.php");
                        break;


                        case 'markup'.'guzamala-borno'.'Borno':                
                      header("location:guzamala-bornomarkup.php");                   
                        break;
                        #END MARKUP LOCATION

                      #Borno STATE ENDING




                        

                            #Delta STATE BEGINING

                         case 'photographer'.'aniocha-delta'.'Delta':
                      header("location:aniocha-deltaphotogra.php");
                        break;
                        
                         case 'photographer'.'anioha-delta'.'Delta':
                      header("location:anioha-deltaphotogra.php");
                        break;
                        
                        case 'photographer'.'bomadi-delta'.'Delta':
                      header("location:bomadi-deltaphotogra.php");
                        break;
                        
                         case 'photographer'.'burutu-delta'.'Delta':
                      header("location:burutu-deltaphotogra.php");
                        break;

                        case 'photographer'.'ethiope-delta'.'Delta':                
                      header("location:ethiope-deltaphotogra.php");                     
                        break;
                        
                          case 'photographer'.'ika-delta'.'Delta':                
                      header("location:ika-deltaphotogra.php");                     
                        break;
                        
                          case 'photographer'.'isoko-delta'.'Delta':                
                      header("location:isoko-deltaphotogra.php");                     
                        break;
                        
                          case 'photographer'.'ndokwa-delta'.'Delta':                
                      header("location:ndokwa-deltaphotogra.php");                     
                        break;
                        
                          case 'photographer'.'okpe-delta'.'Delta':                
                      header("location:okpe-deltaphotogra.php");                     
                        break;

                         case 'photographer'.'oshimili-delta'.'Delta':                
                      header("location:oshimili-deltaphotogra.php");                     
                        break;

                         case 'photographer'.'patani-delta'.'Delta':                
                      header("location:patani-deltaphotogra.php");                     
                        break;

                         case 'photographer'.'sapele-delta'.'Delta':                
                      header("location:sapele-deltaphotogra.php");                     
                        break;

                         case 'photographer'.'udu-delta'.'Delta':                
                      header("location:udu-deltaphotogra.php");                     
                        break;

                         case 'photographer'.'ughelli-delta'.'Delta':                
                      header("location:ughelli-deltaphotogra.php");                     
                        break;


                         case 'photographer'.'ukwuani-delta'.'Delta':                
                      header("location:ukwuani-deltaphotogra.php");                     
                        break;

                          case 'photographer'.'uviwie-delta'.'Delta':                
                      header("location:uviwie-deltaphotogra.php");                     
                        break;

                          case 'photographer'.'warri-delta'.'Delta':                
                      header("location:warri-deltaphotogra.php");                     
                        break;
                     
                        
                       

                

                        #END PHOTGRAPHER LOCATION



                        #BEGINING VEDIOGRAPHERS LOCATION
                        case 'vediographer'.'aniocha-delta'.'Delta':
                      header("location:aniocha-deltavediographer.php");
                        break;
                        
                        
                         case 'vediographer'.'anioha-delta'.'Delta':
                      header("location:anioha-deltavediographer.php");
                        break;
                        
                        case 'vediographer'.'bomadi-delta'.'Delta':
                      header("location:bomadi-deltavediographer.php");
                        break;
                        
                        case 'vediographer'.'burutu-delta'.'Delta':
                      header("location:burutu-deltavediographer.php");
                        break;
                        
                        case 'vediographer'.'ethiope-delta'.'Delta':
                      header("location:ethiope-deltavediographer.php");
                        break;
                        
                        case 'vediographer'.'ika-delta'.'Delta':
                      header("location:ika-deltavediographer.php");
                        break;
                        
                         case 'vediographer'.'isoko-delta'.'Delta':
                      header("location:isoko-deltavediographer.php");
                        break;
                        
                         case 'vediographer'.'ndokwa-delta'.'Delta':
                      header("location:ndokwa-deltavediographer.php");
                        break;

                          case 'vediographer'.'okpe-delta'.'Delta':                
                      header("location:okpe-deltavediographer.php");                   
                        break;

                         case 'vediographer'.'oshimili-delta'.'Delta':                
                      header("location:oshimili-deltavediographer.php");                   
                        break;

                         case 'vediographer'.'patani-delta'.'Delta':                
                      header("location:patani-deltavediographer.php");                   
                        break;

                         case 'vediographer'.'sapele-delta'.'Delta':                
                      header("location:sapele-deltavediographer.php");                   
                        break;

                         case 'vediographer'.'udu-delta'.'Delta':                
                      header("location:udu-deltavediographer.php");                   
                        break;

                         case 'vediographer'.'ughelli-delta'.'Delta':                
                      header("location:ughelli-deltavediographer.php");                   
                        break;

                        case 'vediographer'.'ukwuani-delta'.'Delta':                
                      header("location:ukwuani-deltavediographer.php");                   
                        break;


                        case 'vediographer'.'uviwie-delta'.'Delta':                
                      header("location:uviwie-deltavediographer.php");                   
                        break;

                        case 'vediographer'.'warri-delta'.'Delta':                
                      header("location:warri-deltavediographer.php");                   
                        break;
                      
                      

                

                        #END VEDIOGRAPHERS LOCATION


                        #BEGINING CATERERS LOCATION
                        case 'caterers'.'aniocha-delta'.'Delta':
                      header("location:aniocha-deltacaterers.php");
                        break;
                        
                         case 'caterers'.'anioha-delta'.'Delta':
                      header("location:anioha-deltacaterers.php");
                        break;
                        
                         case 'caterers'.'bomadi-delta'.'Delta':
                      header("location:bomadi-deltacaterers.php");
                        break;
                        
                        
                         case 'caterers'.'burutu-delta'.'Delta':
                      header("location:burutu-deltacaterers.php");
                        break;
                        
                         case 'caterers'.'ethiope-delta'.'Delta':
                      header("location:ethiope-deltacaterers.php");
                        break;
                        
                         case 'caterers'.'ika-delta'.'Delta':
                      header("location:ika-deltacaterers.php");
                        break;
                        
                          case 'caterers'.'ndokwa-delta'.'Delta':
                      header("location:ndokwa-deltacaterers.php");
                        break;
                        
                           case 'caterers'.'isoko-delta'.'Delta':
                      header("location:isoko-deltacaterers.php");
                        break;

                          case 'caterers'.'okpe-delta'.'Delta':                
                      header("location:okpe-deltacaterers.php");                   
                        break;

                          case 'caterers'.'oshimili-delta'.'Delta':                
                      header("location:oshimili-deltacaterers.php");                   
                        break;

                          case 'caterers'.'patani-delta'.'Delta':                
                      header("location:patani-deltacaterers.php");                   
                        break;

                          case 'caterers'.'sapele-delta'.'Delta':                
                      header("location:sapele-deltacaterers.php");                   
                        break;

                          case 'caterers'.'udu-delta'.'Delta':                
                      header("location:udu-deltacaterers.php");                   
                        break;

                          case 'caterers'.'ughelli-delta'.'Delta':                
                      header("location:ughelli-deltacaterers.php");                   
                        break;

                        case 'caterers'.'ukwuani-delta'.'Delta':                
                      header("location:ukwuani-deltacaterers.php");                   
                        break;

                        case 'caterers'.'uviwie-delta'.'Delta':                
                      header("location:uviwie-deltacaterers.php");                   
                        break;

                        case 'caterers'.'warri-delta'.'Delta':                
                      header("location:warri-deltacaterers.php");                   
                        break;


                      
                        

                        #END CATERERS LOCATION


                        #BEGINING WINESELLER LOCATION
                        case 'wineseller'.'aniocha-delta'.'Delta':
                      header("location:aniocha-deltawineseller.php");
                        break;
                        
                        case 'wineseller'.'anioha-delta'.'Delta':
                      header("location:anioha-deltawineseller.php");
                        break;
                        
                         case 'wineseller'.'bomadi-delta'.'Delta':
                      header("location:bomadi-deltawineseller.php");
                        break;
                        
                         case 'wineseller'.'burutu-delta'.'Delta':
                      header("location:burutu-deltawineseller.php");
                        break;
                        
                         case 'wineseller'.'ethiope-delta'.'Delta':
                      header("location:ethiope-deltawineseller.php");
                        break;
                        
                    
                        
                         case 'wineseller'.'ika-delta'.'Delta':
                      header("location:ika-deltawineseller.php");
                        break;
                        
                         case 'wineseller'.'ndokwa-delta'.'Delta':
                      header("location:ndokwa-deltawineseller.php");
                        break;
                        
                         case 'wineseller'.'isoko-delta'.'Delta':
                      header("location:isoko-deltawineseller.php");
                        break;

                            case 'wineseller'.'okpe-delta'.'Delta':                
                      header("location:okpe-deltawineseller.php");                   
                        break;

                         case 'wineseller'.'oshimili-delta'.'Delta':                
                      header("location:oshimili-deltawineseller.php");                   
                        break;

                         case 'wineseller'.'patani-delta'.'Delta':                
                      header("location:patani-deltawineseller.php");                   
                        break;

                         case 'wineseller'.'sapele-delta'.'Delta':                
                      header("location:sapele-deltawineseller.php");                   
                        break;

                         case 'wineseller'.'udu-delta'.'Delta':                
                      header("location:udu-deltawineseller.php");                   
                        break;

                         case 'wineseller'.'ughelli-delta'.'Delta':                
                      header("location:ughelli-deltawineseller.php");                   
                        break;

                         case 'wineseller'.'ukwuani-delta'.'Delta':                
                      header("location:ukwuani-deltawineseller.php");                   
                        break;


                         case 'wineseller'.'uviwie-delta'.'Delta':                
                      header("location:uviwie-deltawineseller.php");                   
                        break;

                         case 'wineseller'.'warri-delta'.'Delta':                
                      header("location:warri-deltawineseller.php");                   
                        break;

                        

                       
                     

                        #END WINESELLER LOCATION


                      #BEGINING OF ENTERTAINER LOCATION
                        case 'entertainer'.'aniocha-delta'.'Delta':
                        header("location:aniocha-deltaentertainer.php");
                        break;
                        
                        case 'entertainer'.'anioha-delta'.'Delta':
                        header("location:anioha-deltaentertainer.php");
                        break;
                        
                        case 'entertainer'.'bomadi-delta'.'Delta':
                        header("location:bomadi-deltaentertainer.php");
                        break;
                        
                        case 'entertainer'.'burutu-delta'.'Delta':
                        header("location:burutu-deltaentertainer.php");
                        break;
                        
                        case 'entertainer'.'ethiope-delta'.'Delta':
                        header("location:ethiope-deltaentertainer.php");
                        break;
                        
                        case 'entertainer'.'ika-delta'.'Delta':
                        header("location:ika-deltaentertainer.php");
                        break;
                   
                        
                        case 'entertainer'.'ndokwa-delta'.'Delta':
                        header("location:ndokwa-deltaentertainer.php");
                        break;
                        
                        case 'entertainer'.'isoko-delta'.'Delta':
                        header("location:isoko-deltaentertainer.php");
                        break;

                            case 'entertainer'.'okpe-delta'.'Delta':               
                      header("location:okpe-deltaentertainer.php");                    
                        break;

                           case 'entertainer'.'oshimili-delta'.'Delta':               
                      header("location:oshimili-deltaentertainer.php");                    
                        break;

                           case 'entertainer'.'patani-delta'.'Delta':               
                      header("location:patani-deltaentertainer.php");                    
                        break;

                           case 'entertainer'.'sapele-delta'.'Delta':               
                      header("location:sapele-deltaentertainer.php");                    
                        break;

                           case 'entertainer'.'udu-delta'.'Delta':               
                      header("location:udu-deltaentertainer.php");                    
                        break;

                           case 'entertainer'.'ughelli-delta'.'Delta':               
                      header("location:ughelli-deltaentertainer.php");                    
                        break;

                          case 'entertainer'.'ukwuani-delta'.'Delta':               
                      header("location:ukwuani-deltaentertainer.php");                    
                        break;

                        case 'entertainer'.'uviwie-delta'.'Delta':               
                      header("location:uviwie-deltaentertainer.php");                    
                        break;

                        case 'entertainer'.'ukwuani-delta'.'Delta':               
                      header("location:warri-deltaentertainer.php");                    
                        break;

                     

                       

                    
                        #END ENTERTAINER / MC LOCATION


                        #BEGINING MUSIC ARTIST LOCATION
                        case 'music'.'aniocha-delta'.'Delta':
                      header("location:aniocha-deltamusicband.php");
                        break;
                        
                        case 'music'.'anioha-delta'.'Delta':
                      header("location:anioha-deltamusicband.php");
                        break;
                        
                        case 'music'.'bomadi-delta'.'Delta':
                      header("location:bomadi-deltamusicband.php");
                        break;
                        
                        case 'music'.'burutu-delta'.'Delta':
                      header("location:burutu-deltamusicband.php");
                        break;
                        
                        
                        case 'music'.'ethiope-delta'.'Delta':
                      header("location:ethiope-deltamusicband.php");
                        break;
                        
                        case 'music'.'ika-delta'.'Delta':
                      header("location:ika-deltamusicband.php");
                        break;
                        
                          case 'music'.'ndokwa-delta'.'Delta':
                      header("location:ndokwa-deltamusicband.php");
                        break;
                        
                           case 'music'.'isoko-delta'.'Delta':
                      header("location:isoko-deltamusicband.php");
                        break;

                        case 'music'.'okpe-delta'.'Delta':               
                      header("location:okpe-deltamusicband.php");                    
                        break;

                        case 'music'.'oshimili-delta'.'Delta':               
                      header("location:oshimili-deltamusicband.php");                    
                        break;

                        case 'music'.'patani-delta'.'Delta':               
                      header("location:patani-deltamusicband.php");                    
                        break;

                        case 'music'.'sapele-delta'.'Delta':               
                      header("location:sapele-deltamusicband.php");                    
                        break;

                        case 'music'.'udu-delta'.'Delta':               
                      header("location:udu-deltamusicband.php");                    
                        break;

                        case 'music'.'ughelli-delta'.'Delta':               
                      header("location:ughelli-deltamusicband.php");                    
                        break;

                        case 'music'.'ukwuani-delta'.'Delta':               
                      header("location:ukwuani-deltamusicband.php");                    
                        break;


                        case 'music'.'uviwie-delta'.'Delta':               
                      header("location:uviwie-deltamusicband.php");                    
                        break;

                        case 'music'.'warri-delta'.'Delta':               
                      header("location:warri-deltamusicband.php");                    
                        break;

                  
                        #END MUSIC ARTIST LOCATION




                      #BEGINING HALL DECORATORS LOCATION
                        case 'halldecorators'.'aniocha-delta'.'Delta':
                      header("location:aniocha-deltahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'anioha-delta'.'Delta':
                      header("location:anioha-deltahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'bomadi-delta'.'Delta':
                      header("location:bomadi-deltahalldecorators.php");
                        break;
                        
                        
                        case 'halldecorators'.'burutu-delta'.'Delta':
                      header("location:burutu-deltahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'ethiope-delta'.'Delta':
                      header("location:ethiope-deltahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'ika-delta'.'Delta':
                      header("location:ika-deltahalldecorators.php");
                        break;
                        
                         case 'halldecorators'.'ndokwa-delta'.'Delta':
                      header("location:ndokwa-deltahalldecorators.php");
                        break;
                        
                          case 'halldecorators'.'isoko-delta'.'Delta':
                      header("location:isoko-deltahalldecorators.php");
                        break;

                          case 'halldecorators'.'okpe-delta'.'Delta':                
                      header("location:okpe-deltahalldecorators.php");                   
                        break;

                         case 'halldecorators'.'oshimili-delta'.'Delta':                
                      header("location:oshimili-deltahalldecorators.php");                   
                        break;

                         case 'halldecorators'.'patani-delta'.'Delta':                
                      header("location:patani-deltahalldecorators.php");                   
                        break;

                         case 'halldecorators'.'sapele-delta'.'Delta':                
                      header("location:sapele-deltahalldecorators.php");                   
                        break;

                         case 'halldecorators'.'udu-delta'.'Delta':                
                      header("location:udu-deltahalldecorators.php");                   
                        break;

                         case 'halldecorators'.'ughelli-delta'.'Delta':                
                      header("location:ughelli-deltahalldecorators.php");                   
                        break;

                        case 'halldecorators'.'ukwuani-delta'.'Delta':                
                      header("location:ukwuani-deltahalldecorators.php");                   
                        break;


                        case 'halldecorators'.'uviwie-delta'.'Delta':                
                      header("location:uviwie-deltahalldecorators.php");                   
                        break;



                        case 'halldecorators'.'warri-delta'.'Delta':                
                      header("location:warri-deltahalldecorators.php");                   
                        break;


                      
                      

                        #END HALL DECORATORS LOCATION


                        #BEGINING Djs LOCATION
                        case 'dj'.'aniocha-delta'.'Delta':
                      header("location:aniocha-deltadj.php");
                        break;
                        
                         case 'dj'.'anioha-delta'.'Delta':
                      header("location:anioha-deltadj.php");
                        break;
                        
                        case 'dj'.'bomadi-delta'.'Delta':
                      header("location:bomadi-deltadj.php");
                        break;
                        
                        case 'dj'.'burutu-delta'.'Delta':
                      header("location:burutu-deltadj.php");
                        break;
                        
                    
                        
                        case 'dj'.'ethiope-delta'.'Delta':
                      header("location:ethiope-deltadj.php");
                        break;
                        
                        case 'dj'.'ika-delta'.'Delta':
                      header("location:ika-deltadj.php");
                        break;
                        
                        case 'dj'.'ndokwa-delta'.'Delta':
                      header("location:ndokwa-deltadj.php");
                        break;
                        
                        case 'dj'.'isoko-delta'.'Delta':
                      header("location:isoko-deltadj.php");
                        break;

                            case 'dj'.'okpe-delta'.'Delta':                
                      header("location:okpe-deltadj.php");                   
                        break;

                             case 'dj'.'oshimili-delta'.'Delta':                
                      header("location:oshimili-deltadj.php");                   
                        break;

                             case 'dj'.'patani-delta'.'Delta':                
                      header("location:patani-deltadj.php");                   
                        break;

                             case 'dj'.'sapele-delta'.'Delta':                
                      header("location:sapele-deltadj.php");                   
                        break;

                             case 'dj'.'udu-delta'.'Delta':                
                      header("location:udu-deltadj.php");                   
                        break;

                             case 'dj'.'ughelli-delta'.'Delta':                
                      header("location:ughelli-deltadj.php");                   
                        break;


                            case 'dj'.'ukwuani-delta'.'Delta':                
                      header("location:ukwuani-deltadj.php");                   
                        break;

                            case 'dj'.'uviwie-delta'.'Delta':                
                      header("location:uviwie-deltadj.php");                   
                        break;

                            case 'dj'.'warri-delta'.'Delta':                
                      header("location:warri-deltadj.php");                   
                        break;

                     
                       

                        #END Djs LOCATION
                      

                        #BEGINING MARKUP LOCATION
                        case 'markup'.'aniocha-delta'.'Delta':
                      header("location:aniocha-deltamarkup.php");
                        break;
                        
                         case 'markup'.'anioha-delta'.'Delta':
                      header("location:anioha-deltamarkup.php");
                        break;
                        
                   
                        
                          case 'markup'.'bomadi-delta'.'Delta':
                      header("location:bomadi-deltamarkup.php");
                        break;
                        
                          case 'markup'.'burutu-delta'.'Delta':
                      header("location:burutu-deltamarkup.php");
                        break;
                        
                          case 'markup'.'ethiope-delta'.'Delta':
                      header("location:ethiope-deltamarkup.php");
                        break;
                        
                          case 'markup'.'ika-delta'.'Delta':
                      header("location:ika-deltamarkup.php");
                        break;
                        
                        
                        case 'markup'.'ndokwa-delta'.'Delta':
                      header("location:ndokwa-deltamarkup.php");
                        break;
                        
                        case 'markup'.'isoko-delta'.'Delta':
                      header("location:isoko-deltamarkup.php");
                        break;


                        case 'markup'.'okpe-delta'.'Delta':                
                      header("location:okpe-deltamarkup.php");                   
                        break;

                        case 'markup'.'oshimili-delta'.'Delta':                
                      header("location:oshimili-deltamarkup.php");                   
                        break;


                        case 'markup'.'patani-delta'.'Delta':                
                      header("location:patani-deltamarkup.php");                   
                        break;

                        case 'markup'.'sapele-delta'.'Delta':                
                      header("location:sapele-deltamarkup.php");                   
                        break;

                        case 'markup'.'udu-delta'.'Delta':                
                      header("location:udu-deltamarkup.php");                   
                        break;


                        case 'markup'.'ughelli-delta'.'Delta':                
                      header("location:ughelli-deltamarkup.php");                   
                        break;

                        case 'markup'.'ukwuani-delta'.'Delta':                
                      header("location:ukwuani-deltamarkup.php");                   
                        break;

                        case 'markup'.'uviwie-delta'.'Delta':                
                      header("location:uviwie-deltamarkup.php");                   
                        break;

                        case 'markup'.'warri-delta'.'Delta':                
                      header("location:warri-deltamarkup.php");                   
                        break;

                        #END MARKUP LOCATION

                      #Delta STATE ENDING





                          

                                              #Zamfara STATE BEGINING

                         case 'photographer'.'bukkuyum-zamfara'.'Zamfara':
                      header("location:bukkuyum-zamfaraphotogra.php");
                        break;
                        
                         case 'photographer'.'dungudu-zamfara'.'Zamfara':
                      header("location:dungudu-zamfaraphotogra.php");
                        break;
                        
                        case 'photographer'.'chafe-zamfara'.'Zamfara':
                      header("location:chafe-zamfaraphotogra.php");
                        break;
                        
                         case 'photographer'.'gummi-zamfara'.'Zamfara':
                      header("location:gummi-zamfaraphotogra.php");
                        break;

                        case 'photographer'.'gusau-zamfara'.'Zamfara':                
                      header("location:gusau-zamfaraphotogra.php");                     
                        break;
                        
                          case 'photographer'.'isa-zamfara'.'Zamfara':                
                      header("location:isa-zamfaraphotogra.php");                     
                        break;
                        
                          case 'photographer'.'kaura-zamfara'.'Zamfara':                
                      header("location:kaura-zamfaraphotogra.php");                     
                        break;
                        
                          case 'photographer'.'maru-zamfara'.'Zamfara':                
                      header("location:maru-zamfaraphotogra.php");                     
                        break;
                        
                          case 'photographer'.'mradun-zamfara'.'Zamfara':                
                      header("location:mradun-zamfaraphotogra.php");                     
                        break;
                        

                           case 'photographer'.'shinkafi-zamfara'.'Zamfara':                
                      header("location:shinkafi-zamfaraphotogra.php");                     
                        break;

                           case 'photographer'.'talata-mafara-zamfara'.'Zamfara':                
                      header("location:talata-mafara-zamfaraphotogra.php");                     
                        break;

                           case 'photographer'.'zumi-zamfara'.'Zamfara':                
                      header("location:zumi-zamfaraphotogra.php");                     
                        break;
                 
                

                        #END PHOTGRAPHER LOCATION



                        #BEGINING VEDIOGRAPHERS LOCATION
                        case 'vediographer'.'bukkuyum-zamfara'.'Zamfara':
                      header("location:bukkuyum-zamfaravediographer.php");
                        break;
                        
                        
                         case 'vediographer'.'dungudu-zamfara'.'Zamfara':
                      header("location:dungudu-zamfaravediographer.php");
                        break;
                        
                        case 'vediographer'.'chafe-zamfara'.'Zamfara':
                      header("location:chafe-zamfaravediographer.php");
                        break;
                        
                        case 'vediographer'.'gummi-zamfara'.'Zamfara':
                      header("location:gummi-zamfaravediographer.php");
                        break;
                        
                        case 'vediographer'.'gusau-zamfara'.'Zamfara':
                      header("location:gusau-zamfaravediographer.php");
                        break;
                        
                        case 'vediographer'.'isa-zamfara'.'Zamfara':
                      header("location:isa-zamfaravediographer.php");
                        break;
                        
                         case 'vediographer'.'kaura-zamfara'.'Zamfara':
                      header("location:kaura-zamfaravediographer.php");
                        break;
                        
                         case 'vediographer'.'maru-zamfara'.'Zamfara':
                      header("location:maru-zamfaravediographer.php");
                        break;

                          case 'vediographer'.'mradun-zamfara'.'Zamfara':                
                      header("location:mradun-zamfaravediographer.php");                   
                        break;

                           case 'vediographer'.'shinkafi-zamfara'.'Zamfara':                
                      header("location:shinkafi-zamfaravediographer.php");                   
                        break;

                           case 'vediographer'.'talata-mafara-zamfara'.'Zamfara':                
                      header("location:talata-mafara-zamfaravediographer.php");                   
                        break;

                           case 'vediographer'.'zumi-zamfara'.'Zamfara':                
                      header("location:zumi-zamfaravediographer.php");                   
                        break;
                        
               

                

                        #END VEDIOGRAPHERS LOCATION


                        #BEGINING CATERERS LOCATION
                        case 'caterers'.'bukkuyum-zamfara'.'Zamfara':
                      header("location:bukkuyum-zamfaracaterers.php");
                        break;
                        
                         case 'caterers'.'dungudu-zamfara'.'Zamfara':
                      header("location:dungudu-zamfaracaterers.php");
                        break;
                        
                         case 'caterers'.'chafe-zamfara'.'Zamfara':
                      header("location:chafe-zamfaracaterers.php");
                        break;
                        
                  
                        
                         case 'caterers'.'gummi-zamfara'.'Zamfara':
                      header("location:gummi-zamfaracaterers.php");
                        break;
                        
                         case 'caterers'.'gusau-zamfara'.'Zamfara':
                      header("location:gusau-zamfaracaterers.php");
                        break;
                        
                         case 'caterers'.'isa-zamfara'.'Zamfara':
                      header("location:isa-zamfaracaterers.php");
                        break;
                        
                          case 'caterers'.'maru-zamfara'.'Zamfara':
                      header("location:maru-zamfaracaterers.php");
                        break;
                        
                           case 'caterers'.'kaura-zamfara'.'Zamfara':
                      header("location:kaura-zamfaracaterers.php");
                        break;

                          case 'caterers'.'mradun-zamfara'.'Zamfara':                
                      header("location:mradun-zamfaracaterers.php");                   
                        break;


                         case 'caterers'.'shinkafi-zamfara'.'Zamfara':                
                      header("location:shinkafi-zamfaracaterers.php");                   
                        break;


                         case 'caterers'.'talata-mafara-zamfara'.'Zamfara':                
                      header("location:talata-mafara-zamfaracaterers.php");                   
                        break;


                         case 'caterers'.'zumi-zamfara'.'Zamfara':                
                      header("location:zumi-zamfaracaterers.php");                   
                        break;

                        

                        

                        #END CATERERS LOCATION


                        #BEGINING WINESELLER LOCATION
                        case 'wineseller'.'bukkuyum-zamfara'.'Zamfara':
                      header("location:bukkuyum-zamfarawineseller.php");
                        break;
                        
                        case 'wineseller'.'dungudu-zamfara'.'Zamfara':
                      header("location:dungudu-zamfarawineseller.php");
                        break;
                        
                         case 'wineseller'.'chafe-zamfara'.'Zamfara':
                      header("location:chafe-zamfarawineseller.php");
                        break;
                        
                         case 'wineseller'.'gummi-zamfara'.'Zamfara':
                      header("location:gummi-zamfarawineseller.php");
                        break;
                        
                         case 'wineseller'.'gusau-zamfara'.'Zamfara':
                      header("location:gusau-zamfarawineseller.php");
                        break;
                        
                      
                        
                         case 'wineseller'.'isa-zamfara'.'Zamfara':
                      header("location:isa-zamfarawineseller.php");
                        break;
                        
                         case 'wineseller'.'maru-zamfara'.'Zamfara':
                      header("location:maru-zamfarawineseller.php");
                        break;
                        
                         case 'wineseller'.'kaura-zamfara'.'Zamfara':
                      header("location:kaura-zamfarawineseller.php");
                        break;

                            case 'wineseller'.'mradun-zamfara'.'Zamfara':                
                      header("location:mradun-zamfarawineseller.php");                   
                        break;

                            case 'wineseller'.'shinkafi-zamfara'.'Zamfara':                
                      header("location:shinkafi-zamfarawineseller.php");                   
                        break;


                            case 'wineseller'.'talata-mafara-zamfara'.'Zamfara':                
                      header("location:talata-mafara-zamfarawineseller.php");                   
                        break;


                            case 'wineseller'.'zumi-zamfara'.'Zamfara':                
                      header("location:zumi-zamfarawineseller.php");                   
                        break;



                     

                        #END WINESELLER LOCATION


                      #BEGINING OF ENTERTAINER LOCATION
                        case 'entertainer'.'bukkuyum-zamfara'.'Zamfara':
                        header("location:bukkuyum-zamfaraentertainer.php");
                        break;
                        
                        case 'entertainer'.'dungudu-zamfara'.'Zamfara':
                        header("location:dungudu-zamfaraentertainer.php");
                        break;
                        
                        case 'entertainer'.'chafe-zamfara'.'Zamfara':
                        header("location:chafe-zamfaraentertainer.php");
                        break;
                        
                        case 'entertainer'.'gummi-zamfara'.'Zamfara':
                        header("location:gummi-zamfaraentertainer.php");
                        break;
                        
                        case 'entertainer'.'gusau-zamfara'.'Zamfara':
                        header("location:gusau-zamfaraentertainer.php");
                        break;
                        
                        case 'entertainer'.'isa-zamfara'.'Zamfara':
                        header("location:isa-zamfaraentertainer.php");
                        break;
                        
                
                        case 'entertainer'.'maru-zamfara'.'Zamfara':
                        header("location:maru-zamfaraentertainer.php");
                        break;
                        
                        case 'entertainer'.'kaura-zamfara'.'Zamfara':
                        header("location:kaura-zamfaraentertainer.php");
                        break;

                            case 'entertainer'.'mradun-zamfara'.'Zamfara':               
                      header("location:mradun-zamfaraentertainer.php");                    
                        break;


                          case 'entertainer'.'shinkafi-zamfara'.'Zamfara':               
                      header("location:shinkafi-zamfaraentertainer.php");                    
                        break;

                          case 'entertainer'.'talata-mafara-zamfara'.'Zamfara':               
                      header("location:talata-mafara-zamfaraentertainer.php");                    
                        break;


                          case 'entertainer'.'zumi-zamfara'.'Zamfara':               
                      header("location:zumi-zamfaraentertainer.php");                    
                        break;


                    
                        #END ENTERTAINER / MC LOCATION


                        #BEGINING MUSIC ARTIST LOCATION
                        case 'music'.'bukkuyum-zamfara'.'Zamfara':
                      header("location:bukkuyum-zamfaramusicband.php");
                        break;
                        
                        case 'music'.'dungudu-zamfara'.'Zamfara':
                      header("location:dungudu-zamfaramusicband.php");
                        break;
                        
                        case 'music'.'chafe-zamfara'.'Zamfara':
                      header("location:chafe-zamfaramusicband.php");
                        break;
                        
                        case 'music'.'gummi-zamfara'.'Zamfara':
                      header("location:gummi-zamfaramusicband.php");
                        break;
                  
                        
                        case 'music'.'gusau-zamfara'.'Zamfara':
                      header("location:gusau-zamfaramusicband.php");
                        break;
                        
                        case 'music'.'isa-zamfara'.'Zamfara':
                      header("location:isa-zamfaramusicband.php");
                        break;
                        
                          case 'music'.'maru-zamfara'.'Zamfara':
                      header("location:maru-zamfaramusicband.php");
                        break;
                        
                           case 'music'.'kaura-zamfara'.'Zamfara':
                      header("location:kaura-zamfaramusicband.php");
                        break;

                        case 'music'.'mradun-zamfara'.'Zamfara':               
                      header("location:mradun-zamfaramusicband.php");                    
                        break;

                        case 'music'.'shinkafi-zamfara'.'Zamfara':               
                      header("location:shinkafi-zamfaramusicband.php");                    
                        break;

                        case 'music'.'talata-mafara-zamfara'.'Zamfara':               
                      header("location:talata-mafara-zamfaramusicband.php");                    
                        break;

                        case 'music'.'zumi-zamfara'.'Zamfara':               
                      header("location:zumi-zamfaramusicband.php");                    
                        break;

                     

                      
                        #END MUSIC ARTIST LOCATION


                      #BEGINING HALL DECORATORS LOCATION
                        case 'halldecorators'.'bukkuyum-zamfara'.'Zamfara':
                      header("location:bukkuyum-zamfarahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'dungudu-zamfara'.'Zamfara':
                      header("location:dungudu-zamfarahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'chafe-zamfara'.'Zamfara':
                      header("location:chafe-zamfarahalldecorators.php");
                        break;
                        
                   
                        
                        case 'halldecorators'.'gummi-zamfara'.'Zamfara':
                      header("location:gummi-zamfarahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'gusau-zamfara'.'Zamfara':
                      header("location:gusau-zamfarahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'isa-zamfara'.'Zamfara':
                      header("location:isa-zamfarahalldecorators.php");
                        break;
                        
                         case 'halldecorators'.'maru-zamfara'.'Zamfara':
                      header("location:maru-zamfarahalldecorators.php");
                        break;
                        
                          case 'halldecorators'.'kaura-zamfara'.'Zamfara':
                      header("location:kaura-zamfarahalldecorators.php");
                        break;

                          case 'halldecorators'.'mradun-zamfara'.'Zamfara':                
                      header("location:mradun-zamfarahalldecorators.php");                   
                        break;

                         case 'halldecorators'.'shinkafi-zamfara'.'Zamfara':                
                      header("location:shinkafi-zamfarahalldecorators.php");                   
                        break;

                         case 'halldecorators'.'talata-mafara-zamfara'.'Zamfara':                
                      header("location:talata-mafara-zamfarahalldecorators.php");                   
                        break;

                         case 'halldecorators'.'zumi-zamfara'.'Zamfara':                
                      header("location:zumi-zamfarahalldecorators.php");                   
                        break;

                     

                        #END HALL DECORATORS LOCATION


                        #BEGINING Djs LOCATION
                        case 'dj'.'bukkuyum-zamfara'.'Zamfara':
                      header("location:bukkuyum-zamfaradj.php");
                        break;
                        
                         case 'dj'.'dungudu-zamfara'.'Zamfara':
                      header("location:dungudu-zamfaradj.php");
                        break;
                        
                        case 'dj'.'chafe-zamfara'.'Zamfara':
                      header("location:chafe-zamfaradj.php");
                        break;
                        
                        case 'dj'.'gummi-zamfara'.'Zamfara':
                      header("location:gummi-zamfaradj.php");
                        break;
                        
                     
                        
                        case 'dj'.'gusau-zamfara'.'Zamfara':
                      header("location:gusau-zamfaradj.php");
                        break;
                        
                        case 'dj'.'isa-zamfara'.'Zamfara':
                      header("location:isa-zamfaradj.php");
                        break;
                        
                        case 'dj'.'maru-zamfara'.'Zamfara':
                      header("location:maru-zamfaradj.php");
                        break;
                        
                        case 'dj'.'kaura-zamfara'.'Zamfara':
                      header("location:kaura-zamfaradj.php");
                        break;

                            case 'dj'.'mradun-zamfara'.'Zamfara':                
                      header("location:mradun-zamfaradj.php");                   
                        break;


                          case 'dj'.'shinkafi-zamfara'.'Zamfara':                
                      header("location:shinkafi-zamfaradj.php");                   
                        break;

                          case 'dj'.'talata-mafara-zamfara'.'Zamfara':                
                      header("location:talata-mafara-zamfaradj.php");                   
                        break;

                          case 'dj'.'zumi-zamfara'.'Zamfara':                
                      header("location:zumi-zamfaradj.php");                   
                        break;


                        #END Djs LOCATION
                      

                        #BEGINING MARKUP LOCATION
                        case 'markup'.'bukkuyum-zamfara'.'Zamfara':
                      header("location:bukkuyum-zamfaramarkup.php");
                        break;
                        
                         case 'markup'.'dungudu-zamfara'.'Zamfara':
                      header("location:dungudu-zamfaramarkup.php");
                        break;
                        
                        
                          case 'markup'.'chafe-zamfara'.'Zamfara':
                      header("location:chafe-zamfaramarkup.php");
                        break;
                        
                          case 'markup'.'gummi-zamfara'.'Zamfara':
                      header("location:gummi-zamfaramarkup.php");
                        break;
                        
                          case 'markup'.'gusau-zamfara'.'Zamfara':
                      header("location:gusau-zamfaramarkup.php");
                        break;
                        
                          case 'markup'.'isa-zamfara'.'Zamfara':
                      header("location:isa-zamfaramarkup.php");
                        break;
                        
                        
                        case 'markup'.'maru-zamfara'.'Zamfara':
                      header("location:maru-zamfaramarkup.php");
                        break;
                        
                        case 'markup'.'kaura-zamfara'.'Zamfara':
                      header("location:kaura-zamfaramarkup.php");
                        break;


                        case 'markup'.'mradun-zamfara'.'Zamfara':                
                      header("location:mradun-zamfaramarkup.php");                   
                        break;


                         case 'markup'.'shinkafi-zamfara'.'Zamfara':                
                      header("location:shinkafi-zamfaramarkup.php");                   
                        break;

                         case 'markup'.'talata-mafara-zamfara'.'Zamfara':                
                      header("location:talata-mafara-zamfaramarkup.php");                   
                        break;

                         case 'markup'.'zumi-zamfara'.'Zamfara':                
                      header("location:zumi-zamfaramarkup.php");                   
                        break;

                        #END MARKUP LOCATION

                      #Zamfara STATE ENDING



                        

                            #Yobe STATE BEGINING

                         case 'photographer'.'borsari-yobe'.'Yobe':
                      header("location:borsari-yobephotogra.php");
                        break;
                        
                         case 'photographer'.'damaturu-yobe'.'Yobe':
                      header("location:damaturu-yobephotogra.php");
                        break;
                        
                        case 'photographer'.'fune-yobe'.'Yobe':
                      header("location:fune-yobephotogra.php");
                        break;
                        
                         case 'photographer'.'geidam-yobe'.'Yobe':
                      header("location:geidam-yobephotogra.php");
                        break;

                        case 'photographer'.'gujba-yobe'.'Yobe':                
                      header("location:gujba-yobephotogra.php");                     
                        break;
                        
                          case 'photographer'.'gulani-yobe'.'Yobe':                
                      header("location:gulani-yobephotogra.php");                     
                        break;
                        
                          case 'photographer'.'jakusko-yobe'.'Yobe':                
                      header("location:jakusko-yobephotogra.php");                     
                        break;
                        
                          case 'photographer'.'karasuwa-yobe'.'Yobe':                
                      header("location:karasuwa-yobephotogra.php");                     
                        break;
                        
                          case 'photographer'.'machina-yobe'.'Yobe':                
                      header("location:machina-yobephotogra.php");                     
                        break;

                         case 'photographer'.'nagere-yobe'.'Yobe':                
                      header("location:nagere-yobephotogra.php");                     
                        break;

                         case 'photographer'.'nguru-yobe'.'Yobe':                
                      header("location:nguru-yobephotogra.php");                     
                        break;

                         case 'photographer'.'potiskum-yobe'.'Yobe':                
                      header("location:potiskum-yobephotogra.php");                     
                        break;

                         case 'photographer'.'tarmua-yobe'.'Yobe':                
                      header("location:tarmua-yobephotogra.php");                     
                        break;

                         case 'photographer'.'yunusari-yobe'.'Yobe':                
                      header("location:yunusari-yobephotogra.php");                     
                        break;


                         case 'photographer'.'yusufari-yobe'.'Yobe':                
                      header("location:yusufari-yobephotogra.php");                     
                        break;

                          case 'photographer'.'gashua-yobe'.'Yobe':                
                      header("location:gashua-yobephotogra.php");                     
                        break;

                          case 'photographer'.'gogaram-yobe'.'Yobe':                
                      header("location:gogaram-yobephotogra.php");                     
                        break;
                     
                        
                       

                

                        #END PHOTGRAPHER LOCATION



                        #BEGINING VEDIOGRAPHERS LOCATION
                        case 'vediographer'.'borsari-yobe'.'Yobe':
                      header("location:borsari-yobevediographer.php");
                        break;
                        
                        
                         case 'vediographer'.'damaturu-yobe'.'Yobe':
                      header("location:damaturu-yobevediographer.php");
                        break;
                        
                        case 'vediographer'.'fune-yobe'.'Yobe':
                      header("location:fune-yobevediographer.php");
                        break;
                        
                        case 'vediographer'.'geidam-yobe'.'Yobe':
                      header("location:geidam-yobevediographer.php");
                        break;
                        
                        case 'vediographer'.'gujba-yobe'.'Yobe':
                      header("location:gujba-yobevediographer.php");
                        break;
                        
                        case 'vediographer'.'gulani-yobe'.'Yobe':
                      header("location:gulani-yobevediographer.php");
                        break;
                        
                         case 'vediographer'.'jakusko-yobe'.'Yobe':
                      header("location:jakusko-yobevediographer.php");
                        break;
                        
                         case 'vediographer'.'karasuwa-yobe'.'Yobe':
                      header("location:karasuwa-yobevediographer.php");
                        break;

                          case 'vediographer'.'machina-yobe'.'Yobe':                
                      header("location:machina-yobevediographer.php");                   
                        break;

                         case 'vediographer'.'nagere-yobe'.'Yobe':                
                      header("location:nagere-yobevediographer.php");                   
                        break;

                         case 'vediographer'.'nguru-yobe'.'Yobe':                
                      header("location:nguru-yobevediographer.php");                   
                        break;

                         case 'vediographer'.'potiskum-yobe'.'Yobe':                
                      header("location:potiskum-yobevediographer.php");                   
                        break;

                         case 'vediographer'.'tarmua-yobe'.'Yobe':                
                      header("location:tarmua-yobevediographer.php");                   
                        break;

                         case 'vediographer'.'yunusari-yobe'.'Yobe':                
                      header("location:yunusari-yobevediographer.php");                   
                        break;

                        case 'vediographer'.'yusufari-yobe'.'Yobe':                
                      header("location:yusufari-yobevediographer.php");                   
                        break;


                        case 'vediographer'.'gashua-yobe'.'Yobe':                
                      header("location:gashua-yobevediographer.php");                   
                        break;

                        case 'vediographer'.'gogaram-yobe'.'Yobe':                
                      header("location:gogaram-yobevediographer.php");                   
                        break;
                      
                      

                

                        #END VEDIOGRAPHERS LOCATION


                        #BEGINING CATERERS LOCATION
                        case 'caterers'.'borsari-yobe'.'Yobe':
                      header("location:borsari-yobecaterers.php");
                        break;
                        
                         case 'caterers'.'damaturu-yobe'.'Yobe':
                      header("location:damaturu-yobecaterers.php");
                        break;
                        
                         case 'caterers'.'fune-yobe'.'Yobe':
                      header("location:fune-yobecaterers.php");
                        break;
                        
                        
                         case 'caterers'.'geidam-yobe'.'Yobe':
                      header("location:geidam-yobecaterers.php");
                        break;
                        
                         case 'caterers'.'gujba-yobe'.'Yobe':
                      header("location:gujba-yobecaterers.php");
                        break;
                        
                         case 'caterers'.'gulani-yobe'.'Yobe':
                      header("location:gulani-yobecaterers.php");
                        break;
                        
                          case 'caterers'.'karasuwa-yobe'.'Yobe':
                      header("location:karasuwa-yobecaterers.php");
                        break;
                        
                           case 'caterers'.'jakusko-yobe'.'Yobe':
                      header("location:jakusko-yobecaterers.php");
                        break;

                          case 'caterers'.'machina-yobe'.'Yobe':                
                      header("location:machina-yobecaterers.php");                   
                        break;

                          case 'caterers'.'nagere-yobe'.'Yobe':                
                      header("location:nagere-yobecaterers.php");                   
                        break;

                          case 'caterers'.'nguru-yobe'.'Yobe':                
                      header("location:nguru-yobecaterers.php");                   
                        break;

                          case 'caterers'.'potiskum-yobe'.'Yobe':                
                      header("location:potiskum-yobecaterers.php");                   
                        break;

                          case 'caterers'.'tarmua-yobe'.'Yobe':                
                      header("location:tarmua-yobecaterers.php");                   
                        break;

                          case 'caterers'.'yunusari-yobe'.'Yobe':                
                      header("location:yunusari-yobecaterers.php");                   
                        break;

                        case 'caterers'.'yusufari-yobe'.'Yobe':                
                      header("location:yusufari-yobecaterers.php");                   
                        break;

                        case 'caterers'.'gashua-yobe'.'Yobe':                
                      header("location:gashua-yobecaterers.php");                   
                        break;

                        case 'caterers'.'gogaram-yobe'.'Yobe':                
                      header("location:gogaram-yobecaterers.php");                   
                        break;


                      
                        

                        #END CATERERS LOCATION


                        #BEGINING WINESELLER LOCATION
                        case 'wineseller'.'borsari-yobe'.'Yobe':
                      header("location:borsari-yobewineseller.php");
                        break;
                        
                        case 'wineseller'.'damaturu-yobe'.'Yobe':
                      header("location:damaturu-yobewineseller.php");
                        break;
                        
                         case 'wineseller'.'fune-yobe'.'Yobe':
                      header("location:fune-yobewineseller.php");
                        break;
                        
                         case 'wineseller'.'geidam-yobe'.'Yobe':
                      header("location:geidam-yobewineseller.php");
                        break;
                        
                         case 'wineseller'.'gujba-yobe'.'Yobe':
                      header("location:gujba-yobewineseller.php");
                        break;
                        
                    
                        
                         case 'wineseller'.'gulani-yobe'.'Yobe':
                      header("location:gulani-yobewineseller.php");
                        break;
                        
                         case 'wineseller'.'karasuwa-yobe'.'Yobe':
                      header("location:karasuwa-yobewineseller.php");
                        break;
                        
                         case 'wineseller'.'jakusko-yobe'.'Yobe':
                      header("location:jakusko-yobewineseller.php");
                        break;

                            case 'wineseller'.'machina-yobe'.'Yobe':                
                      header("location:machina-yobewineseller.php");                   
                        break;

                         case 'wineseller'.'nagere-yobe'.'Yobe':                
                      header("location:nagere-yobewineseller.php");                   
                        break;

                         case 'wineseller'.'nguru-yobe'.'Yobe':                
                      header("location:nguru-yobewineseller.php");                   
                        break;

                         case 'wineseller'.'potiskum-yobe'.'Yobe':                
                      header("location:potiskum-yobewineseller.php");                   
                        break;

                         case 'wineseller'.'tarmua-yobe'.'Yobe':                
                      header("location:tarmua-yobewineseller.php");                   
                        break;

                         case 'wineseller'.'yunusari-yobe'.'Yobe':                
                      header("location:yunusari-yobewineseller.php");                   
                        break;

                         case 'wineseller'.'yusufari-yobe'.'Yobe':                
                      header("location:yusufari-yobewineseller.php");                   
                        break;


                         case 'wineseller'.'gashua-yobe'.'Yobe':                
                      header("location:gashua-yobewineseller.php");                   
                        break;

                         case 'wineseller'.'gogaram-yobe'.'Yobe':                
                      header("location:gogaram-yobewineseller.php");                   
                        break;

                        

                       
                     

                        #END WINESELLER LOCATION


                      #BEGINING OF ENTERTAINER LOCATION
                        case 'entertainer'.'borsari-yobe'.'Yobe':
                        header("location:borsari-yobeentertainer.php");
                        break;
                        
                        case 'entertainer'.'damaturu-yobe'.'Yobe':
                        header("location:damaturu-yobeentertainer.php");
                        break;
                        
                        case 'entertainer'.'fune-yobe'.'Yobe':
                        header("location:fune-yobeentertainer.php");
                        break;
                        
                        case 'entertainer'.'geidam-yobe'.'Yobe':
                        header("location:geidam-yobeentertainer.php");
                        break;
                        
                        case 'entertainer'.'gujba-yobe'.'Yobe':
                        header("location:gujba-yobeentertainer.php");
                        break;
                        
                        case 'entertainer'.'gulani-yobe'.'Yobe':
                        header("location:gulani-yobeentertainer.php");
                        break;
                   
                        
                        case 'entertainer'.'karasuwa-yobe'.'Yobe':
                        header("location:karasuwa-yobeentertainer.php");
                        break;
                        
                        case 'entertainer'.'jakusko-yobe'.'Yobe':
                        header("location:jakusko-yobeentertainer.php");
                        break;

                            case 'entertainer'.'machina-yobe'.'Yobe':               
                      header("location:machina-yobeentertainer.php");                    
                        break;

                           case 'entertainer'.'nagere-yobe'.'Yobe':               
                      header("location:nagere-yobeentertainer.php");                    
                        break;

                           case 'entertainer'.'nguru-yobe'.'Yobe':               
                      header("location:nguru-yobeentertainer.php");                    
                        break;

                           case 'entertainer'.'potiskum-yobe'.'Yobe':               
                      header("location:potiskum-yobeentertainer.php");                    
                        break;

                           case 'entertainer'.'tarmua-yobe'.'Yobe':               
                      header("location:tarmua-yobeentertainer.php");                    
                        break;

                           case 'entertainer'.'yunusari-yobe'.'Yobe':               
                      header("location:yunusari-yobeentertainer.php");                    
                        break;

                          case 'entertainer'.'yusufari-yobe'.'Yobe':               
                      header("location:yusufari-yobeentertainer.php");                    
                        break;

                        case 'entertainer'.'gashua-yobe'.'Yobe':               
                      header("location:gashua-yobeentertainer.php");                    
                        break;

                        case 'entertainer'.'yusufari-yobe'.'Yobe':               
                      header("location:gogaram-yobeentertainer.php");                    
                        break;

                     

                       

                    
                        #END ENTERTAINER / MC LOCATION


                        #BEGINING MUSIC ARTIST LOCATION
                        case 'music'.'borsari-yobe'.'Yobe':
                      header("location:borsari-yobemusicband.php");
                        break;
                        
                        case 'music'.'damaturu-yobe'.'Yobe':
                      header("location:damaturu-yobemusicband.php");
                        break;
                        
                        case 'music'.'fune-yobe'.'Yobe':
                      header("location:fune-yobemusicband.php");
                        break;
                        
                        case 'music'.'geidam-yobe'.'Yobe':
                      header("location:geidam-yobemusicband.php");
                        break;
                        
                        
                        case 'music'.'gujba-yobe'.'Yobe':
                      header("location:gujba-yobemusicband.php");
                        break;
                        
                        case 'music'.'gulani-yobe'.'Yobe':
                      header("location:gulani-yobemusicband.php");
                        break;
                        
                          case 'music'.'karasuwa-yobe'.'Yobe':
                      header("location:karasuwa-yobemusicband.php");
                        break;
                        
                           case 'music'.'jakusko-yobe'.'Yobe':
                      header("location:jakusko-yobemusicband.php");
                        break;

                        case 'music'.'machina-yobe'.'Yobe':               
                      header("location:machina-yobemusicband.php");                    
                        break;

                        case 'music'.'nagere-yobe'.'Yobe':               
                      header("location:nagere-yobemusicband.php");                    
                        break;

                        case 'music'.'nguru-yobe'.'Yobe':               
                      header("location:nguru-yobemusicband.php");                    
                        break;

                        case 'music'.'potiskum-yobe'.'Yobe':               
                      header("location:potiskum-yobemusicband.php");                    
                        break;

                        case 'music'.'tarmua-yobe'.'Yobe':               
                      header("location:tarmua-yobemusicband.php");                    
                        break;

                        case 'music'.'yunusari-yobe'.'Yobe':               
                      header("location:yunusari-yobemusicband.php");                    
                        break;

                        case 'music'.'yusufari-yobe'.'Yobe':               
                      header("location:yusufari-yobemusicband.php");                    
                        break;


                        case 'music'.'gashua-yobe'.'Yobe':               
                      header("location:gashua-yobemusicband.php");                    
                        break;

                        case 'music'.'gogaram-yobe'.'Yobe':               
                      header("location:gogaram-yobemusicband.php");                    
                        break;

                  
                        #END MUSIC ARTIST LOCATION




                      #BEGINING HALL DECORATORS LOCATION
                        case 'halldecorators'.'borsari-yobe'.'Yobe':
                      header("location:borsari-yobehalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'damaturu-yobe'.'Yobe':
                      header("location:damaturu-yobehalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'fune-yobe'.'Yobe':
                      header("location:fune-yobehalldecorators.php");
                        break;
                        
                        
                        case 'halldecorators'.'geidam-yobe'.'Yobe':
                      header("location:geidam-yobehalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'gujba-yobe'.'Yobe':
                      header("location:gujba-yobehalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'gulani-yobe'.'Yobe':
                      header("location:gulani-yobehalldecorators.php");
                        break;
                        
                         case 'halldecorators'.'karasuwa-yobe'.'Yobe':
                      header("location:karasuwa-yobehalldecorators.php");
                        break;
                        
                          case 'halldecorators'.'jakusko-yobe'.'Yobe':
                      header("location:jakusko-yobehalldecorators.php");
                        break;

                          case 'halldecorators'.'machina-yobe'.'Yobe':                
                      header("location:machina-yobehalldecorators.php");                   
                        break;

                         case 'halldecorators'.'nagere-yobe'.'Yobe':                
                      header("location:nagere-yobehalldecorators.php");                   
                        break;

                         case 'halldecorators'.'nguru-yobe'.'Yobe':                
                      header("location:nguru-yobehalldecorators.php");                   
                        break;

                         case 'halldecorators'.'potiskum-yobe'.'Yobe':                
                      header("location:potiskum-yobehalldecorators.php");                   
                        break;

                         case 'halldecorators'.'tarmua-yobe'.'Yobe':                
                      header("location:tarmua-yobehalldecorators.php");                   
                        break;

                         case 'halldecorators'.'yunusari-yobe'.'Yobe':                
                      header("location:yunusari-yobehalldecorators.php");                   
                        break;

                        case 'halldecorators'.'yusufari-yobe'.'Yobe':                
                      header("location:yusufari-yobehalldecorators.php");                   
                        break;


                        case 'halldecorators'.'gashua-yobe'.'Yobe':                
                      header("location:gashua-yobehalldecorators.php");                   
                        break;



                        case 'halldecorators'.'gogaram-yobe'.'Yobe':                
                      header("location:gogaram-yobehalldecorators.php");                   
                        break;


                      
                      

                        #END HALL DECORATORS LOCATION


                        #BEGINING Djs LOCATION
                        case 'dj'.'borsari-yobe'.'Yobe':
                      header("location:borsari-yobedj.php");
                        break;
                        
                         case 'dj'.'damaturu-yobe'.'Yobe':
                      header("location:damaturu-yobedj.php");
                        break;
                        
                        case 'dj'.'fune-yobe'.'Yobe':
                      header("location:fune-yobedj.php");
                        break;
                        
                        case 'dj'.'geidam-yobe'.'Yobe':
                      header("location:geidam-yobedj.php");
                        break;
                        
                    
                        
                        case 'dj'.'gujba-yobe'.'Yobe':
                      header("location:gujba-yobedj.php");
                        break;
                        
                        case 'dj'.'gulani-yobe'.'Yobe':
                      header("location:gulani-yobedj.php");
                        break;
                        
                        case 'dj'.'karasuwa-yobe'.'Yobe':
                      header("location:karasuwa-yobedj.php");
                        break;
                        
                        case 'dj'.'jakusko-yobe'.'Yobe':
                      header("location:jakusko-yobedj.php");
                        break;

                            case 'dj'.'machina-yobe'.'Yobe':                
                      header("location:machina-yobedj.php");                   
                        break;

                             case 'dj'.'nagere-yobe'.'Yobe':                
                      header("location:nagere-yobedj.php");                   
                        break;

                             case 'dj'.'nguru-yobe'.'Yobe':                
                      header("location:nguru-yobedj.php");                   
                        break;

                             case 'dj'.'potiskum-yobe'.'Yobe':                
                      header("location:potiskum-yobedj.php");                   
                        break;

                             case 'dj'.'tarmua-yobe'.'Yobe':                
                      header("location:tarmua-yobedj.php");                   
                        break;

                             case 'dj'.'yunusari-yobe'.'Yobe':                
                      header("location:yunusari-yobedj.php");                   
                        break;


                            case 'dj'.'yusufari-yobe'.'Yobe':                
                      header("location:yusufari-yobedj.php");                   
                        break;

                            case 'dj'.'gashua-yobe'.'Yobe':                
                      header("location:gashua-yobedj.php");                   
                        break;

                            case 'dj'.'gogaram-yobe'.'Yobe':                
                      header("location:gogaram-yobedj.php");                   
                        break;

                     
                       

                        #END Djs LOCATION
                      

                        #BEGINING MARKUP LOCATION
                        case 'markup'.'borsari-yobe'.'Yobe':
                      header("location:borsari-yobemarkup.php");
                        break;
                        
                         case 'markup'.'damaturu-yobe'.'Yobe':
                      header("location:damaturu-yobemarkup.php");
                        break;
                        
                   
                        
                          case 'markup'.'fune-yobe'.'Yobe':
                      header("location:fune-yobemarkup.php");
                        break;
                        
                          case 'markup'.'geidam-yobe'.'Yobe':
                      header("location:geidam-yobemarkup.php");
                        break;
                        
                          case 'markup'.'gujba-yobe'.'Yobe':
                      header("location:gujba-yobemarkup.php");
                        break;
                        
                          case 'markup'.'gulani-yobe'.'Yobe':
                      header("location:gulani-yobemarkup.php");
                        break;
                        
                        
                        case 'markup'.'karasuwa-yobe'.'Yobe':
                      header("location:karasuwa-yobemarkup.php");
                        break;
                        
                        case 'markup'.'jakusko-yobe'.'Yobe':
                      header("location:jakusko-yobemarkup.php");
                        break;


                        case 'markup'.'machina-yobe'.'Yobe':                
                      header("location:machina-yobemarkup.php");                   
                        break;

                        case 'markup'.'nagere-yobe'.'Yobe':                
                      header("location:nagere-yobemarkup.php");                   
                        break;


                        case 'markup'.'nguru-yobe'.'Yobe':                
                      header("location:nguru-yobemarkup.php");                   
                        break;

                        case 'markup'.'potiskum-yobe'.'Yobe':                
                      header("location:potiskum-yobemarkup.php");                   
                        break;

                        case 'markup'.'tarmua-yobe'.'Yobe':                
                      header("location:tarmua-yobemarkup.php");                   
                        break;


                        case 'markup'.'yunusari-yobe'.'Yobe':                
                      header("location:yunusari-yobemarkup.php");                   
                        break;

                        case 'markup'.'yusufari-yobe'.'Yobe':                
                      header("location:yusufari-yobemarkup.php");                   
                        break;

                        case 'markup'.'gashua-yobe'.'Yobe':                
                      header("location:gashua-yobemarkup.php");                   
                        break;

                        case 'markup'.'gogaram-yobe'.'Yobe':                
                      header("location:gogaram-yobemarkup.php");                   
                        break;

                        #END MARKUP LOCATION

                      #Yobe STATE ENDING





                        

                                              #Kogi STATE BEGINING

                         case 'photographer'.'adavi-kogi'.'Kogi':
                      header("location:adavi-kogiphotogra.php");
                        break;
                        
                         case 'photographer'.'ajaokuta-kogi'.'Kogi':
                      header("location:ajaokuta-kogiphotogra.php");
                        break;
                        
                        case 'photographer'.'ankpa-kogi'.'Kogi':
                      header("location:ankpa-kogiphotogra.php");
                        break;
                        
                         case 'photographer'.'bassa-kogi'.'Kogi':
                      header("location:bassa-kogiphotogra.php");
                        break;

                        case 'photographer'.'dekina-kogi'.'Kogi':                
                      header("location:dekina-kogiphotogra.php");                     
                        break;
                        
                          case 'photographer'.'yagba-kogi'.'Kogi':                
                      header("location:yagba-kogiphotogra.php");                     
                        break;
                        
                          case 'photographer'.'ibaji-kogi'.'Kogi':                
                      header("location:ibaji-kogiphotogra.php");                     
                        break;
                        
                          case 'photographer'.'idah-kogi'.'Kogi':                
                      header("location:idah-kogiphotogra.php");                     
                        break;
                        
                          case 'photographer'.'igalamela-kogi'.'Kogi':                
                      header("location:igalamela-kogiphotogra.php");                     
                        break;
                        
                        case 'photographer'.'ijumu-kogi'.'Kogi':                
                      header("location:ijumu-kogiphotogra.php");                     
                        break;
                        
                          case 'photographer'.'lokoja-kogi'.'Kogi':                
                      header("location:lokoja-kogiphotogra.php");                     
                        break;

                           case 'photographer'.'kabba-bunu-kogi'.'Kogi':                
                      header("location:kabba-bunu-kogiphotogra.php");                     
                        break;

                           case 'photographer'.'kogi-kogi'.'Kogi':                
                      header("location:kogi-kogiphotogra.php");                     
                        break;

                           case 'photographer'.'mopa-muro-kogi'.'Kogi':                
                      header("location:mopa-muro-kogiphotogra.php");                     
                        break;

                           case 'photographer'.'ofu-kogi'.'Kogi':                
                      header("location:ofu-kogiphotogra.php");                     
                        break;

                         case 'photographer'.'ogori-magongo-kogi'.'Kogi':                
                      header("location:ogori-magongo-kogiphotogra.php");                     
                        break;

                         case 'photographer'.'okehi-kogi'.'Kogi':                
                      header("location:okehi-kogiphotogra.php");                     
                        break;

                         case 'photographer'.'okene-kogi'.'Kogi':                
                      header("location:okene-kogiphotogra.php");                     
                        break;

                         case 'photographer'.'olamaboro-kogi'.'Kogi':                
                      header("location:olamaboro-kogiphotogra.php");                     
                        break;

                         case 'photographer'.'omala-kogi'.'Kogi':                
                      header("location:omala-kogiphotogra.php");                     
                        break;



                      
                

                        #END PHOTGRAPHER LOCATION



                        #BEGINING VEDIOGRAPHERS LOCATION
                        case 'vediographer'.'adavi-kogi'.'Kogi':
                      header("location:adavi-kogivediographer.php");
                        break;
                        
                        
                         case 'vediographer'.'ajaokuta-kogi'.'Kogi':
                      header("location:ajaokuta-kogivediographer.php");
                        break;
                        
                        case 'vediographer'.'ankpa-kogi'.'Kogi':
                      header("location:ankpa-kogivediographer.php");
                        break;
                        
                        case 'vediographer'.'bassa-kogi'.'Kogi':
                      header("location:bassa-kogivediographer.php");
                        break;
                        
                        case 'vediographer'.'dekina-kogi'.'Kogi':
                      header("location:dekina-kogivediographer.php");
                        break;
                        
                        case 'vediographer'.'yagba-kogi'.'Kogi':
                      header("location:yagba-kogivediographer.php");
                        break;
                        
                         case 'vediographer'.'ibaji-kogi'.'Kogi':
                      header("location:ibaji-kogivediographer.php");
                        break;
                        
                         case 'vediographer'.'idah-kogi'.'Kogi':
                      header("location:idah-kogivediographer.php");
                        break;

                          case 'vediographer'.'igalamela-kogi'.'Kogi':                
                      header("location:igalamela-kogivediographer.php");                   
                        break;
                        
                          case 'vediographer'.'ijumu-kogi'.'Kogi':                
                      header("location:ijumu-kogivediographer.php");                   
                        break;
                        
                          case 'vediographer'.'lokoja-kogi'.'Kogi':                
                      header("location:lokoja-kogivediographer.php");                   
                        break;

                        case 'vediographer'.'kabba-bunu-kogi'.'Kogi':                
                      header("location:kabba-bunu-kogivediographer.php");                   
                        break;

                        case 'vediographer'.'kogi-kogi'.'Kogi':                
                      header("location:kogi-kogivediographer.php");                   
                        break;

                        case 'vediographer'.'mopa-muro-kogi'.'Kogi':                
                      header("location:mopa-muro-kogivediographer.php");                   
                        break;

                         case 'vediographer'.'ofu-kogi'.'Kogi':                
                      header("location:ofu-kogivediographer.php");                   
                        break;

                          case 'vediographer'.'ogori-magongo-kogi'.'Kogi':                
                      header("location:ogori-magongo-kogivediographer.php");                   
                        break;

                          case 'vediographer'.'okehi-kogi'.'Kogi':                
                      header("location:okehi-kogivediographer.php");                   
                        break;

                          case 'vediographer'.'okene-kogi'.'Kogi':                
                      header("location:okene-kogivediographer.php");                   
                        break;

                          case 'vediographer'.'olamaboro-kogi'.'Kogi':                
                      header("location:olamaboro-kogivediographer.php");                   
                        break;

                          case 'vediographer'.'omala-kogi'.'Kogi':                
                      header("location:omala-kogivediographer.php");                   
                        break;


                     

                      

                

                        #END VEDIOGRAPHERS LOCATION


                        #BEGINING CATERERS LOCATION
                        case 'caterers'.'adavi-kogi'.'Kogi':
                      header("location:adavi-kogicaterers.php");
                        break;
                        
                         case 'caterers'.'ajaokuta-kogi'.'Kogi':
                      header("location:ajaokuta-kogicaterers.php");
                        break;
                        
                         case 'caterers'.'ankpa-kogi'.'Kogi':
                      header("location:ankpa-kogicaterers.php");
                        break;
                        
                          case 'caterers'.'ijumu-kogi'.'Kogi':
                      header("location:ijumu-kogicaterers.php");
                        break;
                        
                          case 'caterers'.'lokoja-kogi'.'Kogi':
                      header("location:lokoja-kogicaterers.php");
                        break;

                           case 'caterers'.'kabba-bunu-kogi'.'Kogi':
                      header("location:kabba-bunu-kogicaterers.php");
                        break;

                           case 'caterers'.'kogi-kogi'.'Kogi':
                      header("location:kogi-kogicaterers.php");
                        break;

                           case 'caterers'.'mopa-muro-kogi'.'Kogi':
                      header("location:mopa-muro-kogicaterers.php");
                        break;

                          case 'caterers'.'ofu-kogi'.'Kogi':
                      header("location:ofu-kogicaterers.php");
                        break;

                           case 'caterers'.'ogori-magongo-kogi'.'Kogi':
                      header("location:ogori-magongo-kogicaterers.php");
                        break;


                           case 'caterers'.'okehi-kogi'.'Kogi':
                      header("location:okehi-kogicaterers.php");
                        break;


                           case 'caterers'.'okene-kogi'.'Kogi':
                      header("location:okene-kogicaterers.php");
                        break;

                           case 'caterers'.'olamaboro-kogi'.'Kogi':
                      header("location:olamaboro-kogicaterers.php");
                        break;


                           case 'caterers'.'omala-kogi'.'Kogi':
                      header("location:omala-kogicaterers.php");
                        break;

                        
                         case 'caterers'.'bassa-kogi'.'Kogi':
                      header("location:bassa-kogicaterers.php");
                        break;
                        
                         case 'caterers'.'dekina-kogi'.'Kogi':
                      header("location:dekina-kogicaterers.php");
                        break;
                        
                         case 'caterers'.'yagba-kogi'.'Kogi':
                      header("location:yagba-kogicaterers.php");
                        break;
                        
                          case 'caterers'.'idah-kogi'.'Kogi':
                      header("location:idah-kogicaterers.php");
                        break;
                        
                           case 'caterers'.'ibaji-kogi'.'Kogi':
                      header("location:ibaji-kogicaterers.php");
                        break;

                          case 'caterers'.'igalamela-kogi'.'Kogi':                
                      header("location:igalamela-kogicaterers.php");                   
                        break;


                      

                     

                        

                        #END CATERERS LOCATION


                        #BEGINING WINESELLER LOCATION
                        case 'wineseller'.'adavi-kogi'.'Kogi':
                      header("location:adavi-kogiwineseller.php");
                        break;
                        
                        case 'wineseller'.'ajaokuta-kogi'.'Kogi':
                      header("location:ajaokuta-kogiwineseller.php");
                        break;
                        
                         case 'wineseller'.'ankpa-kogi'.'Kogi':
                      header("location:ankpa-kogiwineseller.php");
                        break;
                        
                         case 'wineseller'.'bassa-kogi'.'Kogi':
                      header("location:bassa-kogiwineseller.php");
                        break;
                        
                         case 'wineseller'.'dekina-kogi'.'Kogi':
                      header("location:dekina-kogiwineseller.php");
                        break;
                        
                           case 'wineseller'.'ijumu-kogi'.'Kogi':
                      header("location:ijumu-kogiwineseller.php");
                        break;
                        
                           case 'wineseller'.'lokoja-kogi'.'Kogi':
                      header("location:lokoja-kogiwineseller.php");
                        break;

                          case 'wineseller'.'kabba-bunu-kogi'.'Kogi':
                      header("location:kabba-bunu-kogiwineseller.php");
                        break;

                          case 'wineseller'.'kogi-kogi'.'Kogi':
                      header("location:kogi-kogiwineseller.php");
                        break;

                          case 'wineseller'.'mopa-muro-kogi'.'Kogi':
                      header("location:mopa-muro-kogiwineseller.php");
                        break;

                         case 'wineseller'.'ofu-kogi'.'Kogi':
                      header("location:ofu-kogiwineseller.php");
                        break;

                        case 'wineseller'.'ogori-magongo-kogi'.'Kogi':
                      header("location:ogori-magongo-kogiwineseller.php");
                        break;


                        case 'wineseller'.'okehi-kogi'.'Kogi':
                      header("location:okehi-kogiwineseller.php");
                        break;

                        case 'wineseller'.'okene-kogi'.'Kogi':
                      header("location:okene-kogiwineseller.php");
                        break;

                        case 'wineseller'.'olamaboro-kogi'.'Kogi':
                      header("location:olamaboro-kogiwineseller.php");
                        break;

                        case 'wineseller'.'omala-kogi'.'Kogi':
                      header("location:omala-kogiwineseller.php");
                        break;
                        
                         case 'wineseller'.'yagba-kogi'.'Kogi':
                      header("location:yagba-kogiwineseller.php");
                        break;
                        
                         case 'wineseller'.'idah-kogi'.'Kogi':
                      header("location:idah-kogiwineseller.php");
                        break;
                        
                         case 'wineseller'.'ibaji-kogi'.'Kogi':
                      header("location:ibaji-kogiwineseller.php");
                        break;

                            case 'wineseller'.'igalamela-kogi'.'Kogi':                
                      header("location:igalamela-kogiwineseller.php");                   
                        break;


                        

                    

                        #END WINESELLER LOCATION


                      #BEGINING OF ENTERTAINER LOCATION
                        case 'entertainer'.'adavi-kogi'.'Kogi':
                        header("location:adavi-kogientertainer.php");
                        break;
                        
                        case 'entertainer'.'ajaokuta-kogi'.'Kogi':
                        header("location:ajaokuta-kogientertainer.php");
                        break;
                        
                        case 'entertainer'.'ankpa-kogi'.'Kogi':
                        header("location:ankpa-kogientertainer.php");
                        break;
                        
                        case 'entertainer'.'bassa-kogi'.'Kogi':
                        header("location:bassa-kogientertainer.php");
                        break;
                        
                        case 'entertainer'.'dekina-kogi'.'Kogi':
                        header("location:dekina-kogientertainer.php");
                        break;
                        
                        case 'entertainer'.'yagba-kogi'.'Kogi':
                        header("location:yagba-kogientertainer.php");
                        break;
                        
                        case 'entertainer'.'ijumu-kogi'.'Kogi':
                        header("location:ijumu-kogientertainer.php");
                        break;
                        
                        
                        case 'entertainer'.'lokoja-kogi'.'Kogi':
                        header("location:lokoja-kogientertainer.php");
                        break;

                         case 'entertainer'.'kabba-bunu-kogi'.'Kogi':
                        header("location:kabba-bunu-kogientertainer.php");
                        break;

                         case 'entertainer'.'kogi-kogi'.'Kogi':
                        header("location:kogi-kogientertainer.php");
                        break;

                         case 'entertainer'.'mopa-muro-kogi'.'Kogi':
                        header("location:mopa-muro-kogientertainer.php");
                        break;

                          case 'entertainer'.'ofu-kogi'.'Kogi':
                        header("location:ofu-kogientertainer.php");
                        break;

                        case 'entertainer'.'ogori-magongo-kogi'.'Kogi':
                        header("location:ogori-magongo-kogientertainer.php");
                        break;

                        case 'entertainer'.'okehi-kogi'.'Kogi':
                        header("location:okehi-kogientertainer.php");
                        break;

                        case 'entertainer'.'okene-kogi'.'Kogi':
                        header("location:okene-kogientertainer.php");
                        break;

                        case 'entertainer'.'olamaboro-kogi'.'Kogi':
                        header("location:olamaboro-kogientertainer.php");
                        break;

                        case 'entertainer'.'omala-kogi'.'Kogi':
                        header("location:omala-kogientertainer.php");
                        break;
                        
                        case 'entertainer'.'idah-kogi'.'Kogi':
                        header("location:idah-kogientertainer.php");
                        break;
                        
                        case 'entertainer'.'ibaji-kogi'.'Kogi':
                        header("location:ibaji-kogientertainer.php");
                        break;

                            case 'entertainer'.'igalamela-kogi'.'Kogi':               
                      header("location:igalamela-kogientertainer.php");                    
                        break;



                      
                        #END ENTERTAINER / MC LOCATION


                        #BEGINING MUSIC ARTIST LOCATION
                        case 'music'.'adavi-kogi'.'Kogi':
                      header("location:adavi-kogimusicband.php");
                        break;
                        
                        case 'music'.'ajaokuta-kogi'.'Kogi':
                      header("location:ajaokuta-kogimusicband.php");
                        break;
                        
                        case 'music'.'ankpa-kogi'.'Kogi':
                      header("location:ankpa-kogimusicband.php");
                        break;
                        
                        case 'music'.'bassa-kogi'.'Kogi':
                      header("location:bassa-kogimusicband.php");
                        break;
                        
                        case 'music'.'ijumu-kogi'.'Kogi':
                      header("location:ijumu-kogimusicband.php");
                        break;
                        
                        case 'music'.'lokoja-kogi'.'Kogi':
                      header("location:lokoja-kogimusicband.php");
                        break;

                         case 'music'.'kabba-bunu-kogi'.'Kogi':
                      header("location:kabba-bunu-kogimusicband.php");
                        break;

                         case 'music'.'kogi-kogi'.'Kogi':
                      header("location:kogi-kogimusicband.php");
                        break;

                         case 'music'.'mopa-muro-kogi'.'Kogi':
                      header("location:mopa-muro-kogimusicband.php");
                        break;

                         case 'music'.'ofu-kogi'.'Kogi':
                      header("location:ofu-kogimusicband.php");
                        break;


                         case 'music'.'ogori-magongo-kogi'.'Kogi':
                      header("location:ogori-magongo-kogimusicband.php");
                        break;

                         case 'music'.'okehi-kogi'.'Kogi':
                      header("location:okehi-kogimusicband.php");
                        break;

                         case 'music'.'okene-kogi'.'Kogi':
                      header("location:okene-kogimusicband.php");
                        break;

                         case 'music'.'olamaboro-kogi'.'Kogi':
                      header("location:olamaboro-kogimusicband.php");
                        break;

                         case 'music'.'omala-kogi'.'Kogi':
                      header("location:omala-kogimusicband.php");
                        break;
                        
                        
                        case 'music'.'dekina-kogi'.'Kogi':
                      header("location:dekina-kogimusicband.php");
                        break;
                        
                        case 'music'.'yagba-kogi'.'Kogi':
                      header("location:yagba-kogimusicband.php");
                        break;
                        
                          case 'music'.'idah-kogi'.'Kogi':
                      header("location:idah-kogimusicband.php");
                        break;
                        
                           case 'music'.'ibaji-kogi'.'Kogi':
                      header("location:ibaji-kogimusicband.php");
                        break;

                        case 'music'.'igalamela-kogi'.'Kogi':               
                      header("location:igalamela-kogimusicband.php");                    
                        break;



                      
                        #END MUSIC ARTIST LOCATION


                      #BEGINING HALL DECORATORS LOCATION
                        case 'halldecorators'.'adavi-kogi'.'Kogi':
                      header("location:adavi-kogihalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'ajaokuta-kogi'.'Kogi':
                      header("location:ajaokuta-kogihalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'ankpa-kogi'.'Kogi':
                      header("location:ankpa-kogihalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'ijumu-kogi'.'Kogi':
                      header("location:ijumu-kogihalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'lokoja-kogi'.'Kogi':
                      header("location:lokoja-kogihalldecorators.php");
                        break;

                        case 'halldecorators'.'mopa-muro-kogi'.'Kogi':
                      header("location:mopa-muro-kogihalldecorators.php");
                        break;

                        case 'halldecorators'.'ofu-kogi'.'Kogi':
                      header("location:ofu-kogihalldecorators.php");
                        break;

                        case 'halldecorators'.'ogori-magongo-kogi'.'Kogi':
                      header("location:ogori-magongo-kogihalldecorators.php");
                        break;

                        case 'halldecorators'.'okehi-kogi'.'Kogi':
                      header("location:okehi-kogihalldecorators.php");
                        break;

                        case 'halldecorators'.'okene-kogi'.'Kogi':
                      header("location:okene-kogihalldecorators.php");
                        break;

                        case 'halldecorators'.'olamaboro-kogi'.'Kogi':
                      header("location:olamaboro-kogihalldecorators.php");
                        break;

                        case 'halldecorators'.'omala-kogi'.'Kogi':
                      header("location:omala-kogihalldecorators.php");
                        break;

                        case 'halldecorators'.'kabba-bunu-kogi'.'Kogi':
                      header("location:kabba-bunu-kogihalldecorators.php");
                        break;

                        case 'halldecorators'.'kogi-kogi'.'Kogi':
                      header("location:kogi-kogihalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'bassa-kogi3'.'Kogi':
                      header("location:bassa-kogihalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'dekina-kogi'.'Kogi':
                      header("location:dekina-kogihalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'yagba-kogi'.'Kogi':
                      header("location:yagba-kogihalldecorators.php");
                        break;
                        
                         case 'halldecorators'.'idah-kogi'.'Kogi':
                      header("location:idah-kogihalldecorators.php");
                        break;
                        
                          case 'halldecorators'.'ibaji-kogi'.'Kogi':
                      header("location:ibaji-kogihalldecorators.php");
                        break;

                          case 'halldecorators'.'igalamela-kogi'.'Kogi':                
                      header("location:igalamela-kogihalldecorators.php");                   
                        break;



                    

                        #END HALL DECORATORS LOCATION


                        #BEGINING Djs LOCATION
                        case 'dj'.'adavi-kogi'.'Kogi':
                      header("location:adavi-kogidj.php");
                        break;
                        
                         case 'dj'.'ajaokuta-kogi'.'Kogi':
                      header("location:ajaokuta-kogidj.php");
                        break;
                        
                        case 'dj'.'ankpa-kogi'.'Kogi':
                      header("location:ankpa-kogidj.php");
                        break;
                        
                        case 'dj'.'bassa-kogi'.'Kogi':
                      header("location:bassa-kogidj.php");
                        break;
                        
                        case 'dj'.'ijumu-kogi'.'Kogi':
                      header("location:ijumu-kogidj.php");
                        break;
                        
                        case 'dj'.'lokoja-kogi'.'Kogi':
                      header("location:lokoja-kogidj.php");
                        break;

                         case 'dj'.'kabba-bunu-kogi'.'Kogi':
                      header("location:kabba-bunu-kogidj.php");
                        break;

                         case 'dj'.'kogi-kogi'.'Kogi':
                      header("location:kogi-kogidj.php");
                        break;

                         case 'dj'.'mopa-muro-kogi'.'Kogi':
                      header("location:mopa-muro-kogidj.php");
                        break;

                        case 'dj'.'ofu-kogi'.'Kogi':
                      header("location:ofu-kogidj.php");
                        break;

                        case 'dj'.'ogori-magongo-kogi'.'Kogi':
                      header("location:ogori-magongo-kogidj.php");
                        break;

                        case 'dj'.'okehi-kogi'.'Kogi':
                      header("location:okehi-kogidj.php");
                        break;

                        case 'dj'.'okene-kogi'.'Kogi':
                      header("location:okene-kogidj.php");
                        break;

                        case 'dj'.'olamaboro-kogi'.'Kogi':
                      header("location:olamaboro-kogidj.php");
                        break;

                        case 'dj'.'omala-kogi'.'Kogi':
                      header("location:omala-kogidj.php");
                        break;
                        
                        case 'dj'.'dekina-kogi'.'Kogi':
                      header("location:dekina-kogidj.php");
                        break;
                        
                        case 'dj'.'yagba-kogi'.'Kogi':
                      header("location:yagba-kogidj.php");
                        break;
                        
                        case 'dj'.'idah-kogi'.'Kogi':
                      header("location:idah-kogidj.php");
                        break;
                        
                        case 'dj'.'ibaji-kogi'.'Kogi':
                      header("location:ibaji-kogidj.php");
                        break;

                            case 'dj'.'igalamela-kogi'.'Kogi':                
                      header("location:igalamela-kogidj.php");                   
                        break;


                      
                        #END Djs LOCATION
                      

                        #BEGINING MARKUP LOCATION
                        case 'markup'.'adavi-kogi'.'Kogi':
                      header("location:adavi-kogimarkup.php");
                        break;
                        
                         case 'markup'.'ajaokuta-kogi'.'Kogi':
                      header("location:ajaokuta-kogimarkup.php");
                        break;
                        
                        case 'markup'.'ijumu-kogi'.'Kogi':
                      header("location:ijumu-kogimarkup.php");
                        break;
                        
                        case 'markup'.'lokoja-kogi'.'Kogi':
                      header("location:lokoja-kogimarkup.php");
                        break;

                        case 'markup'.'kabba-bunu-kogi'.'Kogi':
                      header("location:kabba-bunu-kogimarkup.php");
                        break;

                        case 'markup'.'kogi-kogi'.'Kogi':
                      header("location:kogi-kogimarkup.php");
                        break;

                        case 'markup'.'mopa-muro-kogi'.'Kogi':
                      header("location:mopa-muro-kogimarkup.php");
                        break;

                        case 'markup'.'ofu-kogi'.'Kogi':
                      header("location:ofu-kogimarkup.php");
                        break;

                        case 'markup'.'ogori-magongo-kogi'.'Kogi':
                      header("location:ogori-magongo-kogimarkup.php");
                        break;


                        case 'markup'.'okehi-kogi'.'Kogi':
                      header("location:okehi-kogimarkup.php");
                        break;


                        case 'markup'.'okene-kogi'.'Kogi':
                      header("location:okene-kogimarkup.php");
                        break;


                        case 'markup'.'olamaboro-kogi'.'Kogi':
                      header("location:olamaboro-kogimarkup.php");
                        break;


                        case 'markup'.'omala-kogi'.'Kogi':
                      header("location:omala-kogimarkup.php");
                        break;

                        
                          case 'markup'.'ankpa-kogi'.'Kogi':
                      header("location:ankpa-kogimarkup.php");
                        break;
                        
                          case 'markup'.'bassa-kogi'.'Kogi':
                      header("location:bassa-kogimarkup.php");
                        break;
                        
                          case 'markup'.'dekina-kogi'.'Kogi':
                      header("location:dekina-kogimarkup.php");
                        break;
                        
                          case 'markup'.'yagba-kogi'.'Kogi':
                      header("location:yagba-kogimarkup.php");
                        break;
                        
                        
                        case 'markup'.'idah-kogi'.'Kogi':
                      header("location:idah-kogimarkup.php");
                        break;
                        
                        case 'markup'.'ibaji-kogi'.'Kogi':
                      header("location:ibaji-kogimarkup.php");
                        break;


                        case 'markup'.'igalamela-kogi'.'Kogi':                
                      header("location:igalamela-kogimarkup.php");                   
                        break;

                        #END MARKUP LOCATION

                      #Kogi STATE ENDING






                                              #Kebbi STATE BEGINING

                         case 'photographer'.'aliero-kebbi'.'Kebbi':
                      header("location:aliero-kebbiphotogra.php");
                        break;
                        
                         case 'photographer'.'arewa-dandi-kebbi'.'Kebbi':
                      header("location:arewa-dandi-kebbiphotogra.php");
                        break;
                        
                        case 'photographer'.'argungu-kebbi'.'Kebbi':
                      header("location:argungu-kebbiphotogra.php");
                        break;
                        
                         case 'photographer'.'augie-kebbi'.'Kebbi':
                      header("location:augie-kebbiphotogra.php");
                        break;

                        case 'photographer'.'bagudo-kebbi'.'Kebbi':                
                      header("location:bagudo-kebbiphotogra.php");                     
                        break;
                        
                          case 'photographer'.'birnin-kebbi'.'Kebbi':                
                      header("location:birnin-kebbiphotogra.php");                     
                        break;
                        
                          case 'photographer'.'bunza-kebbi'.'Kebbi':                
                      header("location:bunza-kebbiphotogra.php");                     
                        break;
                        
                          case 'photographer'.'dandi-kebbi'.'Kebbi':                
                      header("location:dandi-kebbiphotogra.php");                     
                        break;
                        
                          case 'photographer'.'danko-kebbi'.'Kebbi':                
                      header("location:danko-kebbiphotogra.php");                     
                        break;
                        
                        case 'photographer'.'fakai-kebbi'.'Kebbi':                
                      header("location:fakai-kebbiphotogra.php");                     
                        break;
                        
                          case 'photographer'.'gwandu-kebbi'.'Kebbi':                
                      header("location:gwandu-kebbiphotogra.php");                     
                        break;

                           case 'photographer'.'jeda-kebbi'.'Kebbi':                
                      header("location:jeda-kebbiphotogra.php");                     
                        break;

                           case 'photographer'.'kalgo-kebbi'.'Kebbi':                
                      header("location:kalgo-kebbiphotogra.php");                     
                        break;

                           case 'photographer'.'koko-besse-kebbi'.'Kebbi':                
                      header("location:koko-besse-kebbiphotogra.php");                     
                        break;

                           case 'photographer'.'maiyaama-kebbi'.'Kebbi':                
                      header("location:maiyaama-kebbiphotogra.php");                     
                        break;

                         case 'photographer'.'ngaski-kebbi'.'Kebbi':                
                      header("location:ngaski-kebbiphotogra.php");                     
                        break;

                         case 'photographer'.'sakaba-kebbi'.'Kebbi':                
                      header("location:sakaba-kebbiphotogra.php");                     
                        break;

                         case 'photographer'.'shanga-kebbi'.'Kebbi':                
                      header("location:shanga-kebbiphotogra.php");                     
                        break;

                         case 'photographer'.'suru-kebbi'.'Kebbi':                
                      header("location:suru-kebbiphotogra.php");                     
                        break;

                         case 'photographer'.'wasugu-kebbi'.'Kebbi':                
                      header("location:wasugu-kebbiphotogra.php");                     
                        break;


                          case 'photographer'.'yauri-kebbi'.'Kebbi':                
                      header("location:yauri-kebbiphotogra.php");                     
                        break;


                          case 'photographer'.'zuru-kebbi'.'Kebbi':                
                      header("location:zuru-kebbiphotogra.php");                     
                        break;



                      
                

                        #END PHOTGRAPHER LOCATION



                        #BEGINING VEDIOGRAPHERS LOCATION
                        case 'vediographer'.'aliero-kebbi'.'Kebbi':
                      header("location:aliero-kebbivediographer.php");
                        break;
                        
                        
                         case 'vediographer'.'arewa-dandi-kebbi'.'Kebbi':
                      header("location:arewa-dandi-kebbivediographer.php");
                        break;
                        
                        case 'vediographer'.'argungu-kebbi'.'Kebbi':
                      header("location:argungu-kebbivediographer.php");
                        break;
                        
                        case 'vediographer'.'augie-kebbi'.'Kebbi':
                      header("location:augie-kebbivediographer.php");
                        break;
                        
                        case 'vediographer'.'bagudo-kebbi'.'Kebbi':
                      header("location:bagudo-kebbivediographer.php");
                        break;
                        
                        case 'vediographer'.'birnin-kebbi'.'Kebbi':
                      header("location:birnin-kebbivediographer.php");
                        break;
                        
                         case 'vediographer'.'bunza-kebbi'.'Kebbi':
                      header("location:bunza-kebbivediographer.php");
                        break;
                        
                         case 'vediographer'.'dandi-kebbi'.'Kebbi':
                      header("location:dandi-kebbivediographer.php");
                        break;

                          case 'vediographer'.'danko-kebbi'.'Kebbi':                
                      header("location:danko-kebbivediographer.php");                   
                        break;
                        
                          case 'vediographer'.'fakai-kebbi'.'Kebbi':                
                      header("location:fakai-kebbivediographer.php");                   
                        break;
                        
                          case 'vediographer'.'gwandu-kebbi'.'Kebbi':                
                      header("location:gwandu-kebbivediographer.php");                   
                        break;

                        case 'vediographer'.'jeda-kebbi'.'Kebbi':                
                      header("location:jeda-kebbivediographer.php");                   
                        break;

                        case 'vediographer'.'kalgo-kebbi'.'Kebbi':                
                      header("location:kalgo-kebbivediographer.php");                   
                        break;

                        case 'vediographer'.'koko-besse-kebbi'.'Kebbi':                
                      header("location:koko-besse-kebbivediographer.php");                   
                        break;

                         case 'vediographer'.'maiyaama-kebbi'.'Kebbi':                
                      header("location:maiyaama-kebbivediographer.php");                   
                        break;

                          case 'vediographer'.'ngaski-kebbi'.'Kebbi':                
                      header("location:ngaski-kebbivediographer.php");                   
                        break;

                          case 'vediographer'.'sakaba-kebbi'.'Kebbi':                
                      header("location:sakaba-kebbivediographer.php");                   
                        break;

                          case 'vediographer'.'shanga-kebbi'.'Kebbi':                
                      header("location:shanga-kebbivediographer.php");                   
                        break;

                          case 'vediographer'.'suru-kebbi'.'Kebbi':                
                      header("location:suru-kebbivediographer.php");                   
                        break;

                          case 'vediographer'.'wasugu-kebbi'.'Kebbi':                
                      header("location:wasugu-kebbivediographer.php");                   
                        break;


                          case 'vediographer'.'yauri-kebbi'.'Kebbi':                
                      header("location:yauri-kebbivediographer.php");                   
                        break;


                          case 'vediographer'.'zuru-kebbi'.'Kebbi':                
                      header("location:zuru-kebbivediographer.php");                   
                        break;


                     

                      

                

                        #END VEDIOGRAPHERS LOCATION


                        #BEGINING CATERERS LOCATION
                        case 'caterers'.'aliero-kebbi'.'Kebbi':
                      header("location:aliero-kebbicaterers.php");
                        break;
                        
                         case 'caterers'.'arewa-dandi-kebbi'.'Kebbi':
                      header("location:arewa-dandi-kebbicaterers.php");
                        break;
                        
                         case 'caterers'.'argungu-kebbi'.'Kebbi':
                      header("location:argungu-kebbicaterers.php");
                        break;
                        
                          case 'caterers'.'fakai-kebbi'.'Kebbi':
                      header("location:fakai-kebbicaterers.php");
                        break;
                        
                          case 'caterers'.'gwandu-kebbi'.'Kebbi':
                      header("location:gwandu-kebbicaterers.php");
                        break;

                           case 'caterers'.'jeda-kebbi'.'Kebbi':
                      header("location:jeda-kebbicaterers.php");
                        break;

                           case 'caterers'.'kalgo-kebbi'.'Kebbi':
                      header("location:kalgo-kebbicaterers.php");
                        break;

                           case 'caterers'.'koko-besse-kebbi'.'Kebbi':
                      header("location:koko-besse-kebbicaterers.php");
                        break;

                          case 'caterers'.'maiyaama-kebbi'.'Kebbi':
                      header("location:maiyaama-kebbicaterers.php");
                        break;

                           case 'caterers'.'ngaski-kebbi'.'Kebbi':
                      header("location:ngaski-kebbicaterers.php");
                        break;

                         case 'caterers'.'yauri-kebbi'.'Kebbi':
                      header("location:yauri-kebbicaterers.php");
                        break;

                         case 'caterers'.'zuru-kebbi'.'Kebbi':
                      header("location:zuru-kebbicaterers.php");
                        break;


                           case 'caterers'.'sakaba-kebbi'.'Kebbi':
                      header("location:sakaba-kebbicaterers.php");
                        break;


                           case 'caterers'.'shanga-kebbi'.'Kebbi':
                      header("location:shanga-kebbicaterers.php");
                        break;

                           case 'caterers'.'suru-kebbi'.'Kebbi':
                      header("location:suru-kebbicaterers.php");
                        break;


                           case 'caterers'.'wasugu-kebbi'.'Kebbi':
                      header("location:wasugu-kebbicaterers.php");
                        break;

                        
                         case 'caterers'.'augie-kebbi'.'Kebbi':
                      header("location:augie-kebbicaterers.php");
                        break;
                        
                         case 'caterers'.'bagudo-kebbi'.'Kebbi':
                      header("location:bagudo-kebbicaterers.php");
                        break;
                        
                         case 'caterers'.'birnin-kebbi'.'Kebbi':
                      header("location:birnin-kebbicaterers.php");
                        break;
                        
                          case 'caterers'.'dandi-kebbi'.'Kebbi':
                      header("location:dandi-kebbicaterers.php");
                        break;
                        
                           case 'caterers'.'bunza-kebbi'.'Kebbi':
                      header("location:bunza-kebbicaterers.php");
                        break;

                          case 'caterers'.'danko-kebbi'.'Kebbi':                
                      header("location:danko-kebbicaterers.php");                   
                        break;


                      

                     

                        

                        #END CATERERS LOCATION


                        #BEGINING WINESELLER LOCATION
                        case 'wineseller'.'aliero-kebbi'.'Kebbi':
                      header("location:aliero-kebbiwineseller.php");
                        break;
                        
                        case 'wineseller'.'arewa-dandi-kebbi'.'Kebbi':
                      header("location:arewa-dandi-kebbiwineseller.php");
                        break;
                        
                         case 'wineseller'.'argungu-kebbi'.'Kebbi':
                      header("location:argungu-kebbiwineseller.php");
                        break;
                        
                         case 'wineseller'.'augie-kebbi'.'Kebbi':
                      header("location:augie-kebbiwineseller.php");
                        break;
                        
                         case 'wineseller'.'bagudo-kebbi'.'Kebbi':
                      header("location:bagudo-kebbiwineseller.php");
                        break;
                        
                           case 'wineseller'.'fakai-kebbi'.'Kebbi':
                      header("location:fakai-kebbiwineseller.php");
                        break;
                        
                           case 'wineseller'.'gwandu-kebbi'.'Kebbi':
                      header("location:gwandu-kebbiwineseller.php");
                        break;

                          case 'wineseller'.'jeda-kebbi'.'Kebbi':
                      header("location:jeda-kebbiwineseller.php");
                        break;

                          case 'wineseller'.'kalgo-kebbi'.'Kebbi':
                      header("location:kalgo-kebbiwineseller.php");
                        break;

                          case 'wineseller'.'koko-besse-kebbi'.'Kebbi':
                      header("location:koko-besse-kebbiwineseller.php");
                        break;

                         case 'wineseller'.'maiyaama-kebbi'.'Kebbi':
                      header("location:maiyaama-kebbiwineseller.php");
                        break;

                        case 'wineseller'.'ngaski-kebbi'.'Kebbi':
                      header("location:ngaski-kebbiwineseller.php");
                        break;


                        case 'wineseller'.'sakaba-kebbi'.'Kebbi':
                      header("location:sakaba-kebbiwineseller.php");
                        break;

                        case 'wineseller'.'shanga-kebbi'.'Kebbi':
                      header("location:shanga-kebbiwineseller.php");
                        break;

                        case 'wineseller'.'suru-kebbi'.'Kebbi':
                      header("location:suru-kebbiwineseller.php");
                        break;

                        case 'wineseller'.'yauri-kebbi'.'Kebbi':
                      header("location:yauri-kebbiwineseller.php");
                        break;

                         case 'wineseller'.'zuru-kebbi'.'Kebbi':
                      header("location:zuru-kebbiwineseller.php");
                        break;

                         case 'wineseller'.'wasugu-kebbi'.'Kebbi':
                      header("location:wasugu-kebbiwineseller.php");
                        break;
                        
                         case 'wineseller'.'birnin-kebbi'.'Kebbi':
                      header("location:birnin-kebbiwineseller.php");
                        break;
                        
                         case 'wineseller'.'dandi-kebbi'.'Kebbi':
                      header("location:dandi-kebbiwineseller.php");
                        break;
                        
                         case 'wineseller'.'bunza-kebbi'.'Kebbi':
                      header("location:bunza-kebbiwineseller.php");
                        break;

                            case 'wineseller'.'danko-kebbi'.'Kebbi':                
                      header("location:danko-kebbiwineseller.php");                   
                        break;


                        

                    

                        #END WINESELLER LOCATION


                      #BEGINING OF ENTERTAINER LOCATION
                        case 'entertainer'.'aliero-kebbi'.'Kebbi':
                        header("location:aliero-kebbientertainer.php");
                        break;
                        
                        case 'entertainer'.'arewa-dandi-kebbi'.'Kebbi':
                        header("location:arewa-dandi-kebbientertainer.php");
                        break;
                        
                        case 'entertainer'.'argungu-kebbi'.'Kebbi':
                        header("location:argungu-kebbientertainer.php");
                        break;
                        
                        case 'entertainer'.'augie-kebbi'.'Kebbi':
                        header("location:augie-kebbientertainer.php");
                        break;
                        
                        case 'entertainer'.'bagudo-kebbi'.'Kebbi':
                        header("location:bagudo-kebbientertainer.php");
                        break;
                        
                        case 'entertainer'.'birnin-kebbi'.'Kebbi':
                        header("location:birnin-kebbientertainer.php");
                        break;
                        
                        case 'entertainer'.'fakai-kebbi'.'Kebbi':
                        header("location:fakai-kebbientertainer.php");
                        break;
                        
                        
                        case 'entertainer'.'gwandu-kebbi'.'Kebbi':
                        header("location:gwandu-kebbientertainer.php");
                        break;

                         case 'entertainer'.'jeda-kebbi'.'Kebbi':
                        header("location:jeda-kebbientertainer.php");
                        break;

                         case 'entertainer'.'kalgo-kebbi'.'Kebbi':
                        header("location:kalgo-kebbientertainer.php");
                        break;

                         case 'entertainer'.'koko-besse-kebbi'.'Kebbi':
                        header("location:koko-besse-kebbientertainer.php");
                        break;

                          case 'entertainer'.'maiyaama-kebbi'.'Kebbi':
                        header("location:maiyaama-kebbientertainer.php");
                        break;

                        case 'entertainer'.'ngaski-kebbi'.'Kebbi':
                        header("location:ngaski-kebbientertainer.php");
                        break;

                        case 'entertainer'.'sakaba-kebbi'.'Kebbi':
                        header("location:sakaba-kebbientertainer.php");
                        break;

                        case 'entertainer'.'shanga-kebbi'.'Kebbi':
                        header("location:shanga-kebbientertainer.php");
                        break;

                        case 'entertainer'.'suru-kebbi'.'Kebbi':
                        header("location:suru-kebbientertainer.php");
                        break;

                        case 'entertainer'.'wasugu-kebbi'.'Kebbi':
                        header("location:wasugu-kebbientertainer.php");
                        break;

                        case 'entertainer'.'yauri-kebbi'.'Kebbi':
                        header("location:yauri-kebbientertainer.php");
                        break;

                        case 'entertainer'.'zuru-kebbi'.'Kebbi':
                        header("location:zuru-kebbientertainer.php");
                        break;
                        
                        case 'entertainer'.'dandi-kebbi'.'Kebbi':
                        header("location:dandi-kebbientertainer.php");
                        break;
                        
                        case 'entertainer'.'bunza-kebbi'.'Kebbi':
                        header("location:bunza-kebbientertainer.php");
                        break;

                            case 'entertainer'.'danko-kebbi'.'Kebbi':               
                      header("location:danko-kebbientertainer.php");                    
                        break;



                      
                        #END ENTERTAINER / MC LOCATION


                        #BEGINING MUSIC ARTIST LOCATION
                        case 'music'.'aliero-kebbi'.'Kebbi':
                      header("location:aliero-kebbimusicband.php");
                        break;
                        
                        case 'music'.'arewa-dandi-kebbi'.'Kebbi':
                      header("location:arewa-dandi-kebbimusicband.php");
                        break;
                        
                        case 'music'.'argungu-kebbi'.'Kebbi':
                      header("location:argungu-kebbimusicband.php");
                        break;
                        
                        case 'music'.'augie-kebbi'.'Kebbi':
                      header("location:augie-kebbimusicband.php");
                        break;
                        
                        case 'music'.'fakai-kebbi'.'Kebbi':
                      header("location:fakai-kebbimusicband.php");
                        break;
                        
                        case 'music'.'gwandu-kebbi'.'Kebbi':
                      header("location:gwandu-kebbimusicband.php");
                        break;

                         case 'music'.'jeda-kebbi'.'Kebbi':
                      header("location:jeda-kebbimusicband.php");
                        break;

                         case 'music'.'kalgo-kebbi'.'Kebbi':
                      header("location:kalgo-kebbimusicband.php");
                        break;

                         case 'music'.'koko-besse-kebbi'.'Kebbi':
                      header("location:koko-besse-kebbimusicband.php");
                        break;

                         case 'music'.'maiyaama-kebbi'.'Kebbi':
                      header("location:maiyaama-kebbimusicband.php");
                        break;


                         case 'music'.'ngaski-kebbi'.'Kebbi':
                      header("location:ngaski-kebbimusicband.php");
                        break;

                         case 'music'.'sakaba-kebbi'.'Kebbi':
                      header("location:sakaba-kebbimusicband.php");
                        break;

                         case 'music'.'shanga-kebbi'.'Kebbi':
                      header("location:shanga-kebbimusicband.php");
                        break;

                         case 'music'.'suru-kebbi'.'Kebbi':
                      header("location:suru-kebbimusicband.php");
                        break;

                         case 'music'.'wasugu-kebbi'.'Kebbi':
                      header("location:wasugu-kebbimusicband.php");
                        break;

                        case 'music'.'yauri-kebbi'.'Kebbi':
                      header("location:yauri-kebbimusicband.php");
                        break;

                        case 'music'.'zuru-kebbi'.'Kebbi':
                      header("location:zuru-kebbimusicband.php");
                        break;
                        
                        
                        case 'music'.'bagudo-kebbi'.'Kebbi':
                      header("location:bagudo-kebbimusicband.php");
                        break;
                        
                        case 'music'.'birnin-kebbi'.'Kebbi':
                      header("location:birnin-kebbimusicband.php");
                        break;
                        
                          case 'music'.'dandi-kebbi'.'Kebbi':
                      header("location:dandi-kebbimusicband.php");
                        break;
                        
                           case 'music'.'bunza-kebbi'.'Kebbi':
                      header("location:bunza-kebbimusicband.php");
                        break;

                        case 'music'.'danko-kebbi'.'Kebbi':               
                      header("location:danko-kebbimusicband.php");                    
                        break;



                      
                        #END MUSIC ARTIST LOCATION


                      #BEGINING HALL DECORATORS LOCATION
                        case 'halldecorators'.'aliero-kebbi'.'Kebbi':
                      header("location:aliero-kebbihalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'arewa-dandi-kebbi'.'Kebbi':
                      header("location:arewa-dandi-kebbihalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'argungu-kebbi'.'Kebbi':
                      header("location:argungu-kebbihalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'fakai-kebbi'.'Kebbi':
                      header("location:fakai-kebbihalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'gwandu-kebbi'.'Kebbi':
                      header("location:gwandu-kebbihalldecorators.php");
                        break;

                        case 'halldecorators'.'koko-besse-kebbi'.'Kebbi':
                      header("location:koko-besse-kebbihalldecorators.php");
                        break;

                        case 'halldecorators'.'maiyaama-kebbi'.'Kebbi':
                      header("location:maiyaama-kebbihalldecorators.php");
                        break;

                        case 'halldecorators'.'ngaski-kebbi'.'Kebbi':
                      header("location:ngaski-kebbihalldecorators.php");
                        break;

                        case 'halldecorators'.'sakaba-kebbi'.'Kebbi':
                      header("location:sakaba-kebbihalldecorators.php");
                        break;

                        case 'halldecorators'.'shanga-kebbi'.'Kebbi':
                      header("location:shanga-kebbihalldecorators.php");
                        break;

                        case 'halldecorators'.'suru-kebbi'.'Kebbi':
                      header("location:suru-kebbihalldecorators.php");
                        break;

                        case 'halldecorators'.'wasugu-kebbi'.'Kebbi':
                      header("location:wasugu-kebbihalldecorators.php");
                        break;

                        case 'halldecorators'.'yauri-kebbi'.'Kebbi':
                      header("location:yauri-kebbihalldecorators.php");
                        break;

                        case 'halldecorators'.'zuru-kebbi'.'Kebbi':
                      header("location:zuru-kebbihalldecorators.php");
                        break;

                        case 'halldecorators'.'jeda-kebbi'.'Kebbi':
                      header("location:jeda-kebbihalldecorators.php");
                        break;

                        case 'halldecorators'.'kalgo-kebbi'.'Kebbi':
                      header("location:kalgo-kebbihalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'augie-kebbi3'.'Kebbi':
                      header("location:augie-kebbihalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'bagudo-kebbi'.'Kebbi':
                      header("location:bagudo-kebbihalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'birnin-kebbi'.'Kebbi':
                      header("location:birnin-kebbihalldecorators.php");
                        break;
                        
                         case 'halldecorators'.'dandi-kebbi'.'Kebbi':
                      header("location:dandi-kebbihalldecorators.php");
                        break;
                        
                          case 'halldecorators'.'bunza-kebbi'.'Kebbi':
                      header("location:bunza-kebbihalldecorators.php");
                        break;

                          case 'halldecorators'.'danko-kebbi'.'Kebbi':                
                      header("location:danko-kebbihalldecorators.php");                   
                        break;



                    

                        #END HALL DECORATORS LOCATION


                        #BEGINING Djs LOCATION
                        case 'dj'.'aliero-kebbi'.'Kebbi':
                      header("location:aliero-kebbidj.php");
                        break;
                        
                         case 'dj'.'arewa-dandi-kebbi'.'Kebbi':
                      header("location:arewa-dandi-kebbidj.php");
                        break;
                        
                        case 'dj'.'argungu-kebbi'.'Kebbi':
                      header("location:argungu-kebbidj.php");
                        break;
                        
                        case 'dj'.'augie-kebbi'.'Kebbi':
                      header("location:augie-kebbidj.php");
                        break;
                        
                        case 'dj'.'fakai-kebbi'.'Kebbi':
                      header("location:fakai-kebbidj.php");
                        break;
                        
                        case 'dj'.'gwandu-kebbi'.'Kebbi':
                      header("location:gwandu-kebbidj.php");
                        break;

                         case 'dj'.'jeda-kebbi'.'Kebbi':
                      header("location:jeda-kebbidj.php");
                        break;

                         case 'dj'.'kalgo-kebbi'.'Kebbi':
                      header("location:kalgo-kebbidj.php");
                        break;

                         case 'dj'.'koko-besse-kebbi'.'Kebbi':
                      header("location:koko-besse-kebbidj.php");
                        break;

                        case 'dj'.'maiyaama-kebbi'.'Kebbi':
                      header("location:maiyaama-kebbidj.php");
                        break;

                        case 'dj'.'ngaski-kebbi'.'Kebbi':
                      header("location:ngaski-kebbidj.php");
                        break;

                        case 'dj'.'sakaba-kebbi'.'Kebbi':
                      header("location:sakaba-kebbidj.php");
                        break;

                        case 'dj'.'shanga-kebbi'.'Kebbi':
                      header("location:shanga-kebbidj.php");
                        break;

                        case 'dj'.'suru-kebbi'.'Kebbi':
                      header("location:suru-kebbidj.php");
                        break;

                        case 'dj'.'wasugu-kebbi'.'Kebbi':
                      header("location:wasugu-kebbidj.php");
                        break;

                        case 'dj'.'yauri-kebbi'.'Kebbi':
                      header("location:yauri-kebbidj.php");
                        break;


                        case 'dj'.'zuru-kebbi'.'Kebbi':
                      header("location:zuru-kebbidj.php");
                        break;
                        
                        case 'dj'.'bagudo-kebbi'.'Kebbi':
                      header("location:bagudo-kebbidj.php");
                        break;
                        
                        case 'dj'.'birnin-kebbi'.'Kebbi':
                      header("location:birnin-kebbidj.php");
                        break;
                        
                        case 'dj'.'dandi-kebbi'.'Kebbi':
                      header("location:dandi-kebbidj.php");
                        break;
                        
                        case 'dj'.'bunza-kebbi'.'Kebbi':
                      header("location:bunza-kebbidj.php");
                        break;

                            case 'dj'.'danko-kebbi'.'Kebbi':                
                      header("location:danko-kebbidj.php");                   
                        break;


                      
                        #END Djs LOCATION
                      

                        #BEGINING MARKUP LOCATION
                        case 'markup'.'aliero-kebbi'.'Kebbi':
                      header("location:aliero-kebbimarkup.php");
                        break;
                        
                         case 'markup'.'arewa-dandi-kebbi'.'Kebbi':
                      header("location:arewa-dandi-kebbimarkup.php");
                        break;
                        
                        case 'markup'.'fakai-kebbi'.'Kebbi':
                      header("location:fakai-kebbimarkup.php");
                        break;
                        
                        case 'markup'.'gwandu-kebbi'.'Kebbi':
                      header("location:gwandu-kebbimarkup.php");
                        break;

                        case 'markup'.'jeda-kebbi'.'Kebbi':
                      header("location:jeda-kebbimarkup.php");
                        break;

                        case 'markup'.'kalgo-kebbi'.'Kebbi':
                      header("location:kalgo-kebbimarkup.php");
                        break;

                        case 'markup'.'koko-besse-kebbi'.'Kebbi':
                      header("location:koko-besse-kebbimarkup.php");
                        break;

                        case 'markup'.'maiyaama-kebbi'.'Kebbi':
                      header("location:maiyaama-kebbimarkup.php");
                        break;

                        case 'markup'.'ngaski-kebbi'.'Kebbi':
                      header("location:ngaski-kebbimarkup.php");
                        break;


                        case 'markup'.'sakaba-kebbi'.'Kebbi':
                      header("location:sakaba-kebbimarkup.php");
                        break;


                        case 'markup'.'shanga-kebbi'.'Kebbi':
                      header("location:shanga-kebbimarkup.php");
                        break;


                        case 'markup'.'suru-kebbi'.'Kebbi':
                      header("location:suru-kebbimarkup.php");
                        break;


                        case 'markup'.'wasugu-kebbi'.'Kebbi':
                      header("location:wasugu-kebbimarkup.php");
                        break;

                        case 'markup'.'yauri-kebbi'.'Kebbi':
                      header("location:yauri-kebbimarkup.php");
                        break;

                        case 'markup'.'zuru-kebbi'.'Kebbi':
                      header("location:zuru-kebbimarkup.php");
                        break;

                        
                          case 'markup'.'argungu-kebbi'.'Kebbi':
                      header("location:argungu-kebbimarkup.php");
                        break;
                        
                          case 'markup'.'augie-kebbi'.'Kebbi':
                      header("location:augie-kebbimarkup.php");
                        break;
                        
                          case 'markup'.'bagudo-kebbi'.'Kebbi':
                      header("location:bagudo-kebbimarkup.php");
                        break;
                        
                          case 'markup'.'birnin-kebbi'.'Kebbi':
                      header("location:birnin-kebbimarkup.php");
                        break;
                        
                        
                        case 'markup'.'dandi-kebbi'.'Kebbi':
                      header("location:dandi-kebbimarkup.php");
                        break;
                        
                        case 'markup'.'bunza-kebbi'.'Kebbi':
                      header("location:bunza-kebbimarkup.php");
                        break;


                        case 'markup'.'danko-kebbi'.'Kebbi':                
                      header("location:danko-kebbimarkup.php");                   
                        break;
                        #END MARKUP LOCATION

                      #Kebbi STATE ENDING




                        

                                              #Sokoto STATE BEGINING

                         case 'photographer'.'binji-sokoto'.'Sokoto':
                      header("location:binji-sokotophotogra.php");
                        break;
                        
                         case 'photographer'.'bodinga-sokoto'.'Sokoto':
                      header("location:bodinga-sokotophotogra.php");
                        break;
                        
                        case 'photographer'.'dange-shuni-sokoto'.'Sokoto':
                      header("location:dange-shuni-sokotophotogra.php");
                        break;
                        
                         case 'photographer'.'gada-sokoto'.'Sokoto':
                      header("location:gada-sokotophotogra.php");
                        break;

                        case 'photographer'.'goronyo-sokoto'.'Sokoto':                
                      header("location:goronyo-sokotophotogra.php");                     
                        break;
                        
                          case 'photographer'.'gudu-sokoto'.'Sokoto':                
                      header("location:gudu-sokotophotogra.php");                     
                        break;
                        
                          case 'photographer'.'gwadabawa-sokoto'.'Sokoto':                
                      header("location:gwadabawa-sokotophotogra.php");                     
                        break;
                        
                          case 'photographer'.'illella-sokoto'.'Sokoto':                
                      header("location:illella-sokotophotogra.php");                     
                        break;
                        
                          case 'photographer'.'kebbe-sokoto'.'Sokoto':                
                      header("location:kebbe-sokotophotogra.php");                     
                        break;
                        
                        case 'photographer'.'kware-sokoto'.'Sokoto':                
                      header("location:kware-sokotophotogra.php");                     
                        break;
                        
                          case 'photographer'.'rabah-sokoto'.'Sokoto':                
                      header("location:rabah-sokotophotogra.php");                     
                        break;

                           case 'photographer'.'sabon-birni-sokoto'.'Sokoto':                
                      header("location:sabon-birni-sokotophotogra.php");                     
                        break;

                           case 'photographer'.'shagari-sokoto'.'Sokoto':                
                      header("location:shagari-sokotophotogra.php");                     
                        break;

                           case 'photographer'.'silame-sokoto'.'Sokoto':                
                      header("location:silame-sokotophotogra.php");                     
                        break;

                           case 'photographer'.'sokoto-sokoto'.'Sokoto':                
                      header("location:sokoto-sokotophotogra.php");                     
                        break;

                         case 'photographer'.'tambuwal-sokoto'.'Sokoto':                
                      header("location:tambuwal-sokotophotogra.php");                     
                        break;

                         case 'photographer'.'tangaza-sokoto'.'Sokoto':                
                      header("location:tangaza-sokotophotogra.php");                     
                        break;

                         case 'photographer'.'tureta-sokoto'.'Sokoto':                
                      header("location:tureta-sokotophotogra.php");                     
                        break;

                         case 'photographer'.'wamakko-sokoto'.'Sokoto':                
                      header("location:wamakko-sokotophotogra.php");                     
                        break;

                         case 'photographer'.'wurno-sokoto'.'Sokoto':                
                      header("location:wurno-sokotophotogra.php");                     
                        break;


                          case 'photographer'.'yabo-sokoto'.'Sokoto':                
                      header("location:yabo-sokotophotogra.php");                     
                        break;


                          case 'photographer'.''.'Sokoto':                
                      header("location:photogra.php");                     
                        break;



                      
                

                        #END PHOTGRAPHER LOCATION



                        #BEGINING VEDIOGRAPHERS LOCATION
                        case 'vediographer'.'binji-sokoto'.'Sokoto':
                      header("location:binji-sokotovediographer.php");
                        break;
                        
                        
                         case 'vediographer'.'bodinga-sokoto'.'Sokoto':
                      header("location:bodinga-sokotovediographer.php");
                        break;
                        
                        case 'vediographer'.'dange-shuni-sokoto'.'Sokoto':
                      header("location:dange-shuni-sokotovediographer.php");
                        break;
                        
                        case 'vediographer'.'gada-sokoto'.'Sokoto':
                      header("location:gada-sokotovediographer.php");
                        break;
                        
                        case 'vediographer'.'goronyo-sokoto'.'Sokoto':
                      header("location:goronyo-sokotovediographer.php");
                        break;
                        
                        case 'vediographer'.'gudu-sokoto'.'Sokoto':
                      header("location:gudu-sokotovediographer.php");
                        break;
                        
                         case 'vediographer'.'gwadabawa-sokoto'.'Sokoto':
                      header("location:gwadabawa-sokotovediographer.php");
                        break;
                        
                         case 'vediographer'.'illella-sokoto'.'Sokoto':
                      header("location:illella-sokotovediographer.php");
                        break;

                          case 'vediographer'.'kebbe-sokoto'.'Sokoto':                
                      header("location:kebbe-sokotovediographer.php");                   
                        break;
                        
                          case 'vediographer'.'kware-sokoto'.'Sokoto':                
                      header("location:kware-sokotovediographer.php");                   
                        break;
                        
                          case 'vediographer'.'rabah-sokoto'.'Sokoto':                
                      header("location:rabah-sokotovediographer.php");                   
                        break;

                        case 'vediographer'.'sabon-birni-sokoto'.'Sokoto':                
                      header("location:sabon-birni-sokotovediographer.php");                   
                        break;

                        case 'vediographer'.'shagari-sokoto'.'Sokoto':                
                      header("location:shagari-sokotovediographer.php");                   
                        break;

                        case 'vediographer'.'silame-sokoto'.'Sokoto':                
                      header("location:silame-sokotovediographer.php");                   
                        break;

                         case 'vediographer'.'sokoto-sokoto'.'Sokoto':                
                      header("location:sokoto-sokotovediographer.php");                   
                        break;

                          case 'vediographer'.'tambuwal-sokoto'.'Sokoto':                
                      header("location:tambuwal-sokotovediographer.php");                   
                        break;

                          case 'vediographer'.'tangaza-sokoto'.'Sokoto':                
                      header("location:tangaza-sokotovediographer.php");                   
                        break;

                          case 'vediographer'.'tureta-sokoto'.'Sokoto':                
                      header("location:tureta-sokotovediographer.php");                   
                        break;

                          case 'vediographer'.'wamakko-sokoto'.'Sokoto':                
                      header("location:wamakko-sokotovediographer.php");                   
                        break;

                          case 'vediographer'.'wurno-sokoto'.'Sokoto':                
                      header("location:wurno-sokotovediographer.php");                   
                        break;


                          case 'vediographer'.'yabo-sokoto'.'Sokoto':                
                      header("location:yabo-sokotovediographer.php");                   
                        break;


                          case 'vediographer'.''.'Sokoto':                
                      header("location:vediographer.php");                   
                        break;


                     

                      

                

                        #END VEDIOGRAPHERS LOCATION


                        #BEGINING CATERERS LOCATION
                        case 'caterers'.'binji-sokoto'.'Sokoto':
                      header("location:binji-sokotocaterers.php");
                        break;
                        
                         case 'caterers'.'bodinga-sokoto'.'Sokoto':
                      header("location:bodinga-sokotocaterers.php");
                        break;
                        
                         case 'caterers'.'dange-shuni-sokoto'.'Sokoto':
                      header("location:dange-shuni-sokotocaterers.php");
                        break;
                        
                          case 'caterers'.'kware-sokoto'.'Sokoto':
                      header("location:kware-sokotocaterers.php");
                        break;
                        
                          case 'caterers'.'rabah-sokoto'.'Sokoto':
                      header("location:rabah-sokotocaterers.php");
                        break;

                           case 'caterers'.'sabon-birni-sokoto'.'Sokoto':
                      header("location:sabon-birni-sokotocaterers.php");
                        break;

                           case 'caterers'.'shagari-sokoto'.'Sokoto':
                      header("location:shagari-sokotocaterers.php");
                        break;

                           case 'caterers'.'silame-sokoto'.'Sokoto':
                      header("location:silame-sokotocaterers.php");
                        break;

                          case 'caterers'.'sokoto-sokoto'.'Sokoto':
                      header("location:sokoto-sokotocaterers.php");
                        break;

                           case 'caterers'.'tambuwal-sokoto'.'Sokoto':
                      header("location:tambuwal-sokotocaterers.php");
                        break;

                         case 'caterers'.'yabo-sokoto'.'Sokoto':
                      header("location:yabo-sokotocaterers.php");
                        break;

                         case 'caterers'.''.'Sokoto':
                      header("location:caterers.php");
                        break;


                           case 'caterers'.'tangaza-sokoto'.'Sokoto':
                      header("location:tangaza-sokotocaterers.php");
                        break;


                           case 'caterers'.'tureta-sokoto'.'Sokoto':
                      header("location:tureta-sokotocaterers.php");
                        break;

                           case 'caterers'.'wamakko-sokoto'.'Sokoto':
                      header("location:wamakko-sokotocaterers.php");
                        break;


                           case 'caterers'.'wurno-sokoto'.'Sokoto':
                      header("location:wurno-sokotocaterers.php");
                        break;

                        
                         case 'caterers'.'gada-sokoto'.'Sokoto':
                      header("location:gada-sokotocaterers.php");
                        break;
                        
                         case 'caterers'.'goronyo-sokoto'.'Sokoto':
                      header("location:goronyo-sokotocaterers.php");
                        break;
                        
                         case 'caterers'.'gudu-sokoto'.'Sokoto':
                      header("location:gudu-sokotocaterers.php");
                        break;
                        
                          case 'caterers'.'illella-sokoto'.'Sokoto':
                      header("location:illella-sokotocaterers.php");
                        break;
                        
                           case 'caterers'.'gwadabawa-sokoto'.'Sokoto':
                      header("location:gwadabawa-sokotocaterers.php");
                        break;

                          case 'caterers'.'kebbe-sokoto'.'Sokoto':                
                      header("location:kebbe-sokotocaterers.php");                   
                        break;


                      

                     

                        

                        #END CATERERS LOCATION


                        #BEGINING WINESELLER LOCATION
                        case 'wineseller'.'binji-sokoto'.'Sokoto':
                      header("location:binji-sokotowineseller.php");
                        break;
                        
                        case 'wineseller'.'bodinga-sokoto'.'Sokoto':
                      header("location:bodinga-sokotowineseller.php");
                        break;
                        
                         case 'wineseller'.'dange-shuni-sokoto'.'Sokoto':
                      header("location:dange-shuni-sokotowineseller.php");
                        break;
                        
                         case 'wineseller'.'gada-sokoto'.'Sokoto':
                      header("location:gada-sokotowineseller.php");
                        break;
                        
                         case 'wineseller'.'goronyo-sokoto'.'Sokoto':
                      header("location:goronyo-sokotowineseller.php");
                        break;
                        
                           case 'wineseller'.'kware-sokoto'.'Sokoto':
                      header("location:kware-sokotowineseller.php");
                        break;
                        
                           case 'wineseller'.'rabah-sokoto'.'Sokoto':
                      header("location:rabah-sokotowineseller.php");
                        break;

                          case 'wineseller'.'sabon-birni-sokoto'.'Sokoto':
                      header("location:sabon-birni-sokotowineseller.php");
                        break;

                          case 'wineseller'.'shagari-sokoto'.'Sokoto':
                      header("location:shagari-sokotowineseller.php");
                        break;

                          case 'wineseller'.'silame-sokoto'.'Sokoto':
                      header("location:silame-sokotowineseller.php");
                        break;

                         case 'wineseller'.'sokoto-sokoto'.'Sokoto':
                      header("location:sokoto-sokotowineseller.php");
                        break;

                        case 'wineseller'.'tambuwal-sokoto'.'Sokoto':
                      header("location:tambuwal-sokotowineseller.php");
                        break;


                        case 'wineseller'.'tangaza-sokoto'.'Sokoto':
                      header("location:tangaza-sokotowineseller.php");
                        break;

                        case 'wineseller'.'tureta-sokoto'.'Sokoto':
                      header("location:tureta-sokotowineseller.php");
                        break;

                        case 'wineseller'.'wamakko-sokoto'.'Sokoto':
                      header("location:wamakko-sokotowineseller.php");
                        break;

                        case 'wineseller'.'yabo-sokoto'.'Sokoto':
                      header("location:yabo-sokotowineseller.php");
                        break;

                         case 'wineseller'.''.'Sokoto':
                      header("location:wineseller.php");
                        break;

                         case 'wineseller'.'wurno-sokoto'.'Sokoto':
                      header("location:wurno-sokotowineseller.php");
                        break;
                        
                         case 'wineseller'.'gudu-sokoto'.'Sokoto':
                      header("location:gudu-sokotowineseller.php");
                        break;
                        
                         case 'wineseller'.'illella-sokoto'.'Sokoto':
                      header("location:illella-sokotowineseller.php");
                        break;
                        
                         case 'wineseller'.'gwadabawa-sokoto'.'Sokoto':
                      header("location:gwadabawa-sokotowineseller.php");
                        break;

                            case 'wineseller'.'kebbe-sokoto'.'Sokoto':                
                      header("location:kebbe-sokotowineseller.php");                   
                        break;


                        

                    

                        #END WINESELLER LOCATION


                      #BEGINING OF ENTERTAINER LOCATION
                        case 'entertainer'.'binji-sokoto'.'Sokoto':
                        header("location:binji-sokotoentertainer.php");
                        break;
                        
                        case 'entertainer'.'bodinga-sokoto'.'Sokoto':
                        header("location:bodinga-sokotoentertainer.php");
                        break;
                        
                        case 'entertainer'.'dange-shuni-sokoto'.'Sokoto':
                        header("location:dange-shuni-sokotoentertainer.php");
                        break;
                        
                        case 'entertainer'.'gada-sokoto'.'Sokoto':
                        header("location:gada-sokotoentertainer.php");
                        break;
                        
                        case 'entertainer'.'goronyo-sokoto'.'Sokoto':
                        header("location:goronyo-sokotoentertainer.php");
                        break;
                        
                        case 'entertainer'.'gudu-sokoto'.'Sokoto':
                        header("location:gudu-sokotoentertainer.php");
                        break;
                        
                        case 'entertainer'.'kware-sokoto'.'Sokoto':
                        header("location:kware-sokotoentertainer.php");
                        break;
                        
                        
                        case 'entertainer'.'rabah-sokoto'.'Sokoto':
                        header("location:rabah-sokotoentertainer.php");
                        break;

                         case 'entertainer'.'sabon-birni-sokoto'.'Sokoto':
                        header("location:sabon-birni-sokotoentertainer.php");
                        break;

                         case 'entertainer'.'shagari-sokoto'.'Sokoto':
                        header("location:shagari-sokotoentertainer.php");
                        break;

                         case 'entertainer'.'silame-sokoto'.'Sokoto':
                        header("location:silame-sokotoentertainer.php");
                        break;

                          case 'entertainer'.'sokoto-sokoto'.'Sokoto':
                        header("location:sokoto-sokotoentertainer.php");
                        break;

                        case 'entertainer'.'tambuwal-sokoto'.'Sokoto':
                        header("location:tambuwal-sokotoentertainer.php");
                        break;

                        case 'entertainer'.'tangaza-sokoto'.'Sokoto':
                        header("location:tangaza-sokotoentertainer.php");
                        break;

                        case 'entertainer'.'tureta-sokoto'.'Sokoto':
                        header("location:tureta-sokotoentertainer.php");
                        break;

                        case 'entertainer'.'wamakko-sokoto'.'Sokoto':
                        header("location:wamakko-sokotoentertainer.php");
                        break;

                        case 'entertainer'.'wurno-sokoto'.'Sokoto':
                        header("location:wurno-sokotoentertainer.php");
                        break;

                        case 'entertainer'.'yabo-sokoto'.'Sokoto':
                        header("location:yabo-sokotoentertainer.php");
                        break;

                        case 'entertainer'.''.'Sokoto':
                        header("location:entertainer.php");
                        break;
                        
                        case 'entertainer'.'illella-sokoto'.'Sokoto':
                        header("location:illella-sokotoentertainer.php");
                        break;
                        
                        case 'entertainer'.'gwadabawa-sokoto'.'Sokoto':
                        header("location:gwadabawa-sokotoentertainer.php");
                        break;

                            case 'entertainer'.'kebbe-sokoto'.'Sokoto':               
                      header("location:kebbe-sokotoentertainer.php");                    
                        break;



                      
                        #END ENTERTAINER / MC LOCATION


                        #BEGINING MUSIC ARTIST LOCATION
                        case 'music'.'binji-sokoto'.'Sokoto':
                      header("location:binji-sokotomusicband.php");
                        break;
                        
                        case 'music'.'bodinga-sokoto'.'Sokoto':
                      header("location:bodinga-sokotomusicband.php");
                        break;
                        
                        case 'music'.'dange-shuni-sokoto'.'Sokoto':
                      header("location:dange-shuni-sokotomusicband.php");
                        break;
                        
                        case 'music'.'gada-sokoto'.'Sokoto':
                      header("location:gada-sokotomusicband.php");
                        break;
                        
                        case 'music'.'kware-sokoto'.'Sokoto':
                      header("location:kware-sokotomusicband.php");
                        break;
                        
                        case 'music'.'rabah-sokoto'.'Sokoto':
                      header("location:rabah-sokotomusicband.php");
                        break;

                         case 'music'.'sabon-birni-sokoto'.'Sokoto':
                      header("location:sabon-birni-sokotomusicband.php");
                        break;

                         case 'music'.'shagari-sokoto'.'Sokoto':
                      header("location:shagari-sokotomusicband.php");
                        break;

                         case 'music'.'silame-sokoto'.'Sokoto':
                      header("location:silame-sokotomusicband.php");
                        break;

                         case 'music'.'sokoto-sokoto'.'Sokoto':
                      header("location:sokoto-sokotomusicband.php");
                        break;


                         case 'music'.'tambuwal-sokoto'.'Sokoto':
                      header("location:tambuwal-sokotomusicband.php");
                        break;

                         case 'music'.'tangaza-sokoto'.'Sokoto':
                      header("location:tangaza-sokotomusicband.php");
                        break;

                         case 'music'.'tureta-sokoto'.'Sokoto':
                      header("location:tureta-sokotomusicband.php");
                        break;

                         case 'music'.'wamakko-sokoto'.'Sokoto':
                      header("location:wamakko-sokotomusicband.php");
                        break;

                         case 'music'.'wurno-sokoto'.'Sokoto':
                      header("location:wurno-sokotomusicband.php");
                        break;

                        case 'music'.'yabo-sokoto'.'Sokoto':
                      header("location:yabo-sokotomusicband.php");
                        break;

                        case 'music'.''.'Sokoto':
                      header("location:musicband.php");
                        break;
                        
                        
                        case 'music'.'goronyo-sokoto'.'Sokoto':
                      header("location:goronyo-sokotomusicband.php");
                        break;
                        
                        case 'music'.'gudu-sokoto'.'Sokoto':
                      header("location:gudu-sokotomusicband.php");
                        break;
                        
                          case 'music'.'illella-sokoto'.'Sokoto':
                      header("location:illella-sokotomusicband.php");
                        break;
                        
                           case 'music'.'gwadabawa-sokoto'.'Sokoto':
                      header("location:gwadabawa-sokotomusicband.php");
                        break;

                        case 'music'.'kebbe-sokoto'.'Sokoto':               
                      header("location:kebbe-sokotomusicband.php");                    
                        break;



                      
                        #END MUSIC ARTIST LOCATION


                      #BEGINING HALL DECORATORS LOCATION
                        case 'halldecorators'.'binji-sokoto'.'Sokoto':
                      header("location:binji-sokotohalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'bodinga-sokoto'.'Sokoto':
                      header("location:bodinga-sokotohalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'dange-shuni-sokoto'.'Sokoto':
                      header("location:dange-shuni-sokotohalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'kware-sokoto'.'Sokoto':
                      header("location:kware-sokotohalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'rabah-sokoto'.'Sokoto':
                      header("location:rabah-sokotohalldecorators.php");
                        break;

                        case 'halldecorators'.'silame-sokoto'.'Sokoto':
                      header("location:silame-sokotohalldecorators.php");
                        break;

                        case 'halldecorators'.'sokoto-sokoto'.'Sokoto':
                      header("location:sokoto-sokotohalldecorators.php");
                        break;

                        case 'halldecorators'.'tambuwal-sokoto'.'Sokoto':
                      header("location:tambuwal-sokotohalldecorators.php");
                        break;

                        case 'halldecorators'.'tangaza-sokoto'.'Sokoto':
                      header("location:tangaza-sokotohalldecorators.php");
                        break;

                        case 'halldecorators'.'tureta-sokoto'.'Sokoto':
                      header("location:tureta-sokotohalldecorators.php");
                        break;

                        case 'halldecorators'.'wamakko-sokoto'.'Sokoto':
                      header("location:wamakko-sokotohalldecorators.php");
                        break;

                        case 'halldecorators'.'wurno-sokoto'.'Sokoto':
                      header("location:wurno-sokotohalldecorators.php");
                        break;

                        case 'halldecorators'.'yabo-sokoto'.'Sokoto':
                      header("location:yabo-sokotohalldecorators.php");
                        break;

                        case 'halldecorators'.''.'Sokoto':
                      header("location:halldecorators.php");
                        break;

                        case 'halldecorators'.'sabon-birni-sokoto'.'Sokoto':
                      header("location:sabon-birni-sokotohalldecorators.php");
                        break;

                        case 'halldecorators'.'shagari-sokoto'.'Sokoto':
                      header("location:shagari-sokotohalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'gada-sokoto3'.'Sokoto':
                      header("location:gada-sokotohalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'goronyo-sokoto'.'Sokoto':
                      header("location:goronyo-sokotohalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'gudu-sokoto'.'Sokoto':
                      header("location:gudu-sokotohalldecorators.php");
                        break;
                        
                         case 'halldecorators'.'illella-sokoto'.'Sokoto':
                      header("location:illella-sokotohalldecorators.php");
                        break;
                        
                          case 'halldecorators'.'gwadabawa-sokoto'.'Sokoto':
                      header("location:gwadabawa-sokotohalldecorators.php");
                        break;

                          case 'halldecorators'.'kebbe-sokoto'.'Sokoto':                
                      header("location:kebbe-sokotohalldecorators.php");                   
                        break;



                    

                        #END HALL DECORATORS LOCATION


                        #BEGINING Djs LOCATION
                        case 'dj'.'binji-sokoto'.'Sokoto':
                      header("location:binji-sokotodj.php");
                        break;
                        
                         case 'dj'.'bodinga-sokoto'.'Sokoto':
                      header("location:bodinga-sokotodj.php");
                        break;
                        
                        case 'dj'.'dange-shuni-sokoto'.'Sokoto':
                      header("location:dange-shuni-sokotodj.php");
                        break;
                        
                        case 'dj'.'gada-sokoto'.'Sokoto':
                      header("location:gada-sokotodj.php");
                        break;
                        
                        case 'dj'.'kware-sokoto'.'Sokoto':
                      header("location:kware-sokotodj.php");
                        break;
                        
                        case 'dj'.'rabah-sokoto'.'Sokoto':
                      header("location:rabah-sokotodj.php");
                        break;

                         case 'dj'.'sabon-birni-sokoto'.'Sokoto':
                      header("location:sabon-birni-sokotodj.php");
                        break;

                         case 'dj'.'shagari-sokoto'.'Sokoto':
                      header("location:shagari-sokotodj.php");
                        break;

                         case 'dj'.'silame-sokoto'.'Sokoto':
                      header("location:silame-sokotodj.php");
                        break;

                        case 'dj'.'sokoto-sokoto'.'Sokoto':
                      header("location:sokoto-sokotodj.php");
                        break;

                        case 'dj'.'tambuwal-sokoto'.'Sokoto':
                      header("location:tambuwal-sokotodj.php");
                        break;

                        case 'dj'.'tangaza-sokoto'.'Sokoto':
                      header("location:tangaza-sokotodj.php");
                        break;

                        case 'dj'.'tureta-sokoto'.'Sokoto':
                      header("location:tureta-sokotodj.php");
                        break;

                        case 'dj'.'wamakko-sokoto'.'Sokoto':
                      header("location:wamakko-sokotodj.php");
                        break;

                        case 'dj'.'wurno-sokoto'.'Sokoto':
                      header("location:wurno-sokotodj.php");
                        break;

                        case 'dj'.'yabo-sokoto'.'Sokoto':
                      header("location:yabo-sokotodj.php");
                        break;


                        case 'dj'.''.'Sokoto':
                      header("location:dj.php");
                        break;
                        
                        case 'dj'.'goronyo-sokoto'.'Sokoto':
                      header("location:goronyo-sokotodj.php");
                        break;
                        
                        case 'dj'.'gudu-sokoto'.'Sokoto':
                      header("location:gudu-sokotodj.php");
                        break;
                        
                        case 'dj'.'illella-sokoto'.'Sokoto':
                      header("location:illella-sokotodj.php");
                        break;
                        
                        case 'dj'.'gwadabawa-sokoto'.'Sokoto':
                      header("location:gwadabawa-sokotodj.php");
                        break;

                            case 'dj'.'kebbe-sokoto'.'Sokoto':                
                      header("location:kebbe-sokotodj.php");                   
                        break;


                      
                        #END Djs LOCATION
                      

                        #BEGINING MARKUP LOCATION
                        case 'markup'.'binji-sokoto'.'Sokoto':
                      header("location:binji-sokotomarkup.php");
                        break;
                        
                         case 'markup'.'bodinga-sokoto'.'Sokoto':
                      header("location:bodinga-sokotomarkup.php");
                        break;
                        
                        case 'markup'.'kware-sokoto'.'Sokoto':
                      header("location:kware-sokotomarkup.php");
                        break;
                        
                        case 'markup'.'rabah-sokoto'.'Sokoto':
                      header("location:rabah-sokotomarkup.php");
                        break;

                        case 'markup'.'sabon-birni-sokoto'.'Sokoto':
                      header("location:sabon-birni-sokotomarkup.php");
                        break;

                        case 'markup'.'shagari-sokoto'.'Sokoto':
                      header("location:shagari-sokotomarkup.php");
                        break;

                        case 'markup'.'silame-sokoto'.'Sokoto':
                      header("location:silame-sokotomarkup.php");
                        break;

                        case 'markup'.'sokoto-sokoto'.'Sokoto':
                      header("location:sokoto-sokotomarkup.php");
                        break;

                        case 'markup'.'tambuwal-sokoto'.'Sokoto':
                      header("location:tambuwal-sokotomarkup.php");
                        break;


                        case 'markup'.'tangaza-sokoto'.'Sokoto':
                      header("location:tangaza-sokotomarkup.php");
                        break;


                        case 'markup'.'tureta-sokoto'.'Sokoto':
                      header("location:tureta-sokotomarkup.php");
                        break;


                        case 'markup'.'wamakko-sokoto'.'Sokoto':
                      header("location:wamakko-sokotomarkup.php");
                        break;


                        case 'markup'.'wurno-sokoto'.'Sokoto':
                      header("location:wurno-sokotomarkup.php");
                        break;

                        case 'markup'.'yabo-sokoto'.'Sokoto':
                      header("location:yabo-sokotomarkup.php");
                        break;

                        case 'markup'.''.'Sokoto':
                      header("location:markup.php");
                        break;

                        
                          case 'markup'.'dange-shuni-sokoto'.'Sokoto':
                      header("location:dange-shuni-sokotomarkup.php");
                        break;
                        
                          case 'markup'.'gada-sokoto'.'Sokoto':
                      header("location:gada-sokotomarkup.php");
                        break;
                        
                          case 'markup'.'goronyo-sokoto'.'Sokoto':
                      header("location:goronyo-sokotomarkup.php");
                        break;
                        
                          case 'markup'.'gudu-sokoto'.'Sokoto':
                      header("location:gudu-sokotomarkup.php");
                        break;
                        
                        
                        case 'markup'.'illella-sokoto'.'Sokoto':
                      header("location:illella-sokotomarkup.php");
                        break;
                        
                        case 'markup'.'gwadabawa-sokoto'.'Sokoto':
                      header("location:gwadabawa-sokotomarkup.php");
                        break;


                        case 'markup'.'kebbe-sokoto'.'Sokoto':                
                      header("location:kebbe-sokotomarkup.php");                   
                        break;


                     

                        #END MARKUP LOCATION

                      #Sokoto STATE ENDING






                        

                                              #Rivers STATE BEGINING

                         case 'photographer'.'abua-odial-rivers'.'Rivers':
                      header("location:abua-odial-riversphotogra.php");
                        break;
                        
                         case 'photographer'.'ahoada-west-rivers'.'Rivers':
                      header("location:ahoada-west-riversphotogra.php");
                        break;
                        
                        case 'photographer'.'akuku-toru-rivers'.'Rivers':
                      header("location:akuku-toru-riversphotogra.php");
                        break;
                        
                         case 'photographer'.'andoni-rivers'.'Rivers':
                      header("location:andoni-riversphotogra.php");
                        break;

                        case 'photographer'.'asari-toru-rivers'.'Rivers':                
                      header("location:asari-toru-riversphotogra.php");                     
                        break;
                        
                          case 'photographer'.'bonny-rivers'.'Rivers':                
                      header("location:bonny-riversphotogra.php");                     
                        break;
                        
                          case 'photographer'.'degema-rivers'.'Rivers':                
                      header("location:degema-riversphotogra.php");                     
                        break;
                        
                          case 'photographer'.'eleme-rivers'.'Rivers':                
                      header("location:eleme-riversphotogra.php");                     
                        break;
                        
                          case 'photographer'.'emohua-rivers'.'Rivers':                
                      header("location:emohua-riversphotogra.php");                     
                        break;
                        
                        case 'photographer'.'etche-rivers'.'Rivers':                
                      header("location:etche-riversphotogra.php");                     
                        break;
                        
                          case 'photographer'.'gokana-rivers'.'Rivers':                
                      header("location:gokana-riversphotogra.php");                     
                        break;

                           case 'photographer'.'ikwerre-rivers'.'Rivers':                
                      header("location:ikwerre-riversphotogra.php");                     
                        break;

                           case 'photographer'.'oyigbo-rivers'.'Rivers':                
                      header("location:oyigbo-riversphotogra.php");                     
                        break;

                           case 'photographer'.'khana-rivers'.'Rivers':                
                      header("location:khana-riversphotogra.php");                     
                        break;

                           case 'photographer'.'obio-akpor-rivers'.'Rivers':                
                      header("location:obio-akpor-riversphotogra.php");                     
                        break;

                         case 'photographer'.'ogba-east-edoni-rivers'.'Rivers':                
                      header("location:ogba-east-edoni-riversphotogra.php");                     
                        break;

                         case 'photographer'.'ogu-bolo-rivers'.'Rivers':                
                      header("location:ogu-bolo-riversphotogra.php");                     
                        break;

                         case 'photographer'.'okrika-rivers'.'Rivers':                
                      header("location:okrika-riversphotogra.php");                     
                        break;

                         case 'photographer'.'omumma-rivers'.'Rivers':                
                      header("location:omumma-riversphotogra.php");                     
                        break;

                         case 'photographer'.'portharcourt-rivers'.'Rivers':                
                      header("location:portharcourt-riversphotogra.php");                     
                        break;


                          case 'photographer'.'tai-rivers'.'Rivers':                
                      header("location:tai-riversphotogra.php");                     
                        break;


                          case 'photographer'.''.'Rivers':                
                      header("location:photogra.php");                     
                        break;



                      
                

                        #END PHOTGRAPHER LOCATION



                        #BEGINING VEDIOGRAPHERS LOCATION
                        case 'vediographer'.'abua-odial-rivers'.'Rivers':
                      header("location:abua-odial-riversvediographer.php");
                        break;
                        
                        
                         case 'vediographer'.'ahoada-west-rivers'.'Rivers':
                      header("location:ahoada-west-riversvediographer.php");
                        break;
                        
                        case 'vediographer'.'akuku-toru-rivers'.'Rivers':
                      header("location:akuku-toru-riversvediographer.php");
                        break;
                        
                        case 'vediographer'.'andoni-rivers'.'Rivers':
                      header("location:andoni-riversvediographer.php");
                        break;
                        
                        case 'vediographer'.'asari-toru-rivers'.'Rivers':
                      header("location:asari-toru-riversvediographer.php");
                        break;
                        
                        case 'vediographer'.'bonny-rivers'.'Rivers':
                      header("location:bonny-riversvediographer.php");
                        break;
                        
                         case 'vediographer'.'degema-rivers'.'Rivers':
                      header("location:degema-riversvediographer.php");
                        break;
                        
                         case 'vediographer'.'eleme-rivers'.'Rivers':
                      header("location:eleme-riversvediographer.php");
                        break;

                          case 'vediographer'.'emohua-rivers'.'Rivers':                
                      header("location:emohua-riversvediographer.php");                   
                        break;
                        
                          case 'vediographer'.'etche-rivers'.'Rivers':                
                      header("location:etche-riversvediographer.php");                   
                        break;
                        
                          case 'vediographer'.'gokana-rivers'.'Rivers':                
                      header("location:gokana-riversvediographer.php");                   
                        break;

                        case 'vediographer'.'ikwerre-rivers'.'Rivers':                
                      header("location:ikwerre-riversvediographer.php");                   
                        break;

                        case 'vediographer'.'oyigbo-rivers'.'Rivers':                
                      header("location:oyigbo-riversvediographer.php");                   
                        break;

                        case 'vediographer'.'khana-rivers'.'Rivers':                
                      header("location:khana-riversvediographer.php");                   
                        break;

                         case 'vediographer'.'obio-akpor-rivers'.'Rivers':                
                      header("location:obio-akpor-riversvediographer.php");                   
                        break;

                          case 'vediographer'.'ogba-east-edoni-rivers'.'Rivers':                
                      header("location:ogba-east-edoni-riversvediographer.php");                   
                        break;

                          case 'vediographer'.'ogu-bolo-rivers'.'Rivers':                
                      header("location:ogu-bolo-riversvediographer.php");                   
                        break;

                          case 'vediographer'.'okrika-rivers'.'Rivers':                
                      header("location:okrika-riversvediographer.php");                   
                        break;

                          case 'vediographer'.'omumma-rivers'.'Rivers':                
                      header("location:omumma-riversvediographer.php");                   
                        break;

                          case 'vediographer'.'portharcourt-rivers'.'Rivers':                
                      header("location:portharcourt-riversvediographer.php");                   
                        break;


                          case 'vediographer'.'tai-rivers'.'Rivers':                
                      header("location:tai-riversvediographer.php");                   
                        break;


                          case 'vediographer'.''.'Rivers':                
                      header("location:vediographer.php");                   
                        break;


                     

                      

                

                        #END VEDIOGRAPHERS LOCATION


                        #BEGINING CATERERS LOCATION
                        case 'caterers'.'abua-odial-rivers'.'Rivers':
                      header("location:abua-odial-riverscaterers.php");
                        break;
                        
                         case 'caterers'.'ahoada-west-rivers'.'Rivers':
                      header("location:ahoada-west-riverscaterers.php");
                        break;
                        
                         case 'caterers'.'akuku-toru-rivers'.'Rivers':
                      header("location:akuku-toru-riverscaterers.php");
                        break;
                        
                          case 'caterers'.'etche-rivers'.'Rivers':
                      header("location:etche-riverscaterers.php");
                        break;
                        
                          case 'caterers'.'gokana-rivers'.'Rivers':
                      header("location:gokana-riverscaterers.php");
                        break;

                           case 'caterers'.'ikwerre-rivers'.'Rivers':
                      header("location:ikwerre-riverscaterers.php");
                        break;

                           case 'caterers'.'oyigbo-rivers'.'Rivers':
                      header("location:oyigbo-riverscaterers.php");
                        break;

                           case 'caterers'.'khana-rivers'.'Rivers':
                      header("location:khana-riverscaterers.php");
                        break;

                          case 'caterers'.'obio-akpor-rivers'.'Rivers':
                      header("location:obio-akpor-riverscaterers.php");
                        break;

                           case 'caterers'.'ogba-east-edoni-rivers'.'Rivers':
                      header("location:ogba-east-edoni-riverscaterers.php");
                        break;

                         case 'caterers'.'tai-rivers'.'Rivers':
                      header("location:tai-riverscaterers.php");
                        break;

                         case 'caterers'.''.'Rivers':
                      header("location:caterers.php");
                        break;


                           case 'caterers'.'ogu-bolo-rivers'.'Rivers':
                      header("location:ogu-bolo-riverscaterers.php");
                        break;


                           case 'caterers'.'okrika-rivers'.'Rivers':
                      header("location:okrika-riverscaterers.php");
                        break;

                           case 'caterers'.'omumma-rivers'.'Rivers':
                      header("location:omumma-riverscaterers.php");
                        break;


                           case 'caterers'.'portharcourt-rivers'.'Rivers':
                      header("location:portharcourt-riverscaterers.php");
                        break;

                        
                         case 'caterers'.'andoni-rivers'.'Rivers':
                      header("location:andoni-riverscaterers.php");
                        break;
                        
                         case 'caterers'.'asari-toru-rivers'.'Rivers':
                      header("location:asari-toru-riverscaterers.php");
                        break;
                        
                         case 'caterers'.'bonny-rivers'.'Rivers':
                      header("location:bonny-riverscaterers.php");
                        break;
                        
                          case 'caterers'.'eleme-rivers'.'Rivers':
                      header("location:eleme-riverscaterers.php");
                        break;
                        
                           case 'caterers'.'degema-rivers'.'Rivers':
                      header("location:degema-riverscaterers.php");
                        break;

                          case 'caterers'.'emohua-rivers'.'Rivers':                
                      header("location:emohua-riverscaterers.php");                   
                        break;


                      

                     

                        

                        #END CATERERS LOCATION


                        #BEGINING WINESELLER LOCATION
                        case 'wineseller'.'abua-odial-rivers'.'Rivers':
                      header("location:abua-odial-riverswineseller.php");
                        break;
                        
                        case 'wineseller'.'ahoada-west-rivers'.'Rivers':
                      header("location:ahoada-west-riverswineseller.php");
                        break;
                        
                         case 'wineseller'.'akuku-toru-rivers'.'Rivers':
                      header("location:akuku-toru-riverswineseller.php");
                        break;
                        
                         case 'wineseller'.'andoni-rivers'.'Rivers':
                      header("location:andoni-riverswineseller.php");
                        break;
                        
                         case 'wineseller'.'asari-toru-rivers'.'Rivers':
                      header("location:asari-toru-riverswineseller.php");
                        break;
                        
                           case 'wineseller'.'etche-rivers'.'Rivers':
                      header("location:etche-riverswineseller.php");
                        break;
                        
                           case 'wineseller'.'gokana-rivers'.'Rivers':
                      header("location:gokana-riverswineseller.php");
                        break;

                          case 'wineseller'.'ikwerre-rivers'.'Rivers':
                      header("location:ikwerre-riverswineseller.php");
                        break;

                          case 'wineseller'.'oyigbo-rivers'.'Rivers':
                      header("location:oyigbo-riverswineseller.php");
                        break;

                          case 'wineseller'.'khana-rivers'.'Rivers':
                      header("location:khana-riverswineseller.php");
                        break;

                         case 'wineseller'.'obio-akpor-rivers'.'Rivers':
                      header("location:obio-akpor-riverswineseller.php");
                        break;

                        case 'wineseller'.'ogba-east-edoni-rivers'.'Rivers':
                      header("location:ogba-east-edoni-riverswineseller.php");
                        break;


                        case 'wineseller'.'ogu-bolo-rivers'.'Rivers':
                      header("location:ogu-bolo-riverswineseller.php");
                        break;

                        case 'wineseller'.'okrika-rivers'.'Rivers':
                      header("location:okrika-riverswineseller.php");
                        break;

                        case 'wineseller'.'omumma-rivers'.'Rivers':
                      header("location:omumma-riverswineseller.php");
                        break;

                        case 'wineseller'.'tai-rivers'.'Rivers':
                      header("location:tai-riverswineseller.php");
                        break;

                         case 'wineseller'.''.'Rivers':
                      header("location:wineseller.php");
                        break;

                         case 'wineseller'.'portharcourt-rivers'.'Rivers':
                      header("location:portharcourt-riverswineseller.php");
                        break;
                        
                         case 'wineseller'.'bonny-rivers'.'Rivers':
                      header("location:bonny-riverswineseller.php");
                        break;
                        
                         case 'wineseller'.'eleme-rivers'.'Rivers':
                      header("location:eleme-riverswineseller.php");
                        break;
                        
                         case 'wineseller'.'degema-rivers'.'Rivers':
                      header("location:degema-riverswineseller.php");
                        break;

                            case 'wineseller'.'emohua-rivers'.'Rivers':                
                      header("location:emohua-riverswineseller.php");                   
                        break;


                        

                    

                        #END WINESELLER LOCATION


                      #BEGINING OF ENTERTAINER LOCATION
                        case 'entertainer'.'abua-odial-rivers'.'Rivers':
                        header("location:abua-odial-riversentertainer.php");
                        break;
                        
                        case 'entertainer'.'ahoada-west-rivers'.'Rivers':
                        header("location:ahoada-west-riversentertainer.php");
                        break;
                        
                        case 'entertainer'.'akuku-toru-rivers'.'Rivers':
                        header("location:akuku-toru-riversentertainer.php");
                        break;
                        
                        case 'entertainer'.'andoni-rivers'.'Rivers':
                        header("location:andoni-riversentertainer.php");
                        break;
                        
                        case 'entertainer'.'asari-toru-rivers'.'Rivers':
                        header("location:asari-toru-riversentertainer.php");
                        break;
                        
                        case 'entertainer'.'bonny-rivers'.'Rivers':
                        header("location:bonny-riversentertainer.php");
                        break;
                        
                        case 'entertainer'.'etche-rivers'.'Rivers':
                        header("location:etche-riversentertainer.php");
                        break;
                        
                        
                        case 'entertainer'.'gokana-rivers'.'Rivers':
                        header("location:gokana-riversentertainer.php");
                        break;

                         case 'entertainer'.'ikwerre-rivers'.'Rivers':
                        header("location:ikwerre-riversentertainer.php");
                        break;

                         case 'entertainer'.'oyigbo-rivers'.'Rivers':
                        header("location:oyigbo-riversentertainer.php");
                        break;

                         case 'entertainer'.'khana-rivers'.'Rivers':
                        header("location:khana-riversentertainer.php");
                        break;

                          case 'entertainer'.'obio-akpor-rivers'.'Rivers':
                        header("location:obio-akpor-riversentertainer.php");
                        break;

                        case 'entertainer'.'ogba-east-edoni-rivers'.'Rivers':
                        header("location:ogba-east-edoni-riversentertainer.php");
                        break;

                        case 'entertainer'.'ogu-bolo-rivers'.'Rivers':
                        header("location:ogu-bolo-riversentertainer.php");
                        break;

                        case 'entertainer'.'okrika-rivers'.'Rivers':
                        header("location:okrika-riversentertainer.php");
                        break;

                        case 'entertainer'.'omumma-rivers'.'Rivers':
                        header("location:omumma-riversentertainer.php");
                        break;

                        case 'entertainer'.'portharcourt-rivers'.'Rivers':
                        header("location:portharcourt-riversentertainer.php");
                        break;

                        case 'entertainer'.'tai-rivers'.'Rivers':
                        header("location:tai-riversentertainer.php");
                        break;

                        case 'entertainer'.''.'Rivers':
                        header("location:entertainer.php");
                        break;
                        
                        case 'entertainer'.'eleme-rivers'.'Rivers':
                        header("location:eleme-riversentertainer.php");
                        break;
                        
                        case 'entertainer'.'degema-rivers'.'Rivers':
                        header("location:degema-riversentertainer.php");
                        break;

                            case 'entertainer'.'emohua-rivers'.'Rivers':               
                      header("location:emohua-riversentertainer.php");                    
                        break;



                      
                        #END ENTERTAINER / MC LOCATION


                        #BEGINING MUSIC ARTIST LOCATION
                        case 'music'.'abua-odial-rivers'.'Rivers':
                      header("location:abua-odial-riversmusicband.php");
                        break;
                        
                        case 'music'.'ahoada-west-rivers'.'Rivers':
                      header("location:ahoada-west-riversmusicband.php");
                        break;
                        
                        case 'music'.'akuku-toru-rivers'.'Rivers':
                      header("location:akuku-toru-riversmusicband.php");
                        break;
                        
                        case 'music'.'andoni-rivers'.'Rivers':
                      header("location:andoni-riversmusicband.php");
                        break;
                        
                        case 'music'.'etche-rivers'.'Rivers':
                      header("location:etche-riversmusicband.php");
                        break;
                        
                        case 'music'.'gokana-rivers'.'Rivers':
                      header("location:gokana-riversmusicband.php");
                        break;

                         case 'music'.'ikwerre-rivers'.'Rivers':
                      header("location:ikwerre-riversmusicband.php");
                        break;

                         case 'music'.'oyigbo-rivers'.'Rivers':
                      header("location:oyigbo-riversmusicband.php");
                        break;

                         case 'music'.'khana-rivers'.'Rivers':
                      header("location:khana-riversmusicband.php");
                        break;

                         case 'music'.'obio-akpor-rivers'.'Rivers':
                      header("location:obio-akpor-riversmusicband.php");
                        break;


                         case 'music'.'ogba-east-edoni-rivers'.'Rivers':
                      header("location:ogba-east-edoni-riversmusicband.php");
                        break;

                         case 'music'.'ogu-bolo-rivers'.'Rivers':
                      header("location:ogu-bolo-riversmusicband.php");
                        break;

                         case 'music'.'okrika-rivers'.'Rivers':
                      header("location:okrika-riversmusicband.php");
                        break;

                         case 'music'.'omumma-rivers'.'Rivers':
                      header("location:omumma-riversmusicband.php");
                        break;

                         case 'music'.'portharcourt-rivers'.'Rivers':
                      header("location:portharcourt-riversmusicband.php");
                        break;

                        case 'music'.'tai-rivers'.'Rivers':
                      header("location:tai-riversmusicband.php");
                        break;

                        case 'music'.''.'Rivers':
                      header("location:musicband.php");
                        break;
                        
                        
                        case 'music'.'asari-toru-rivers'.'Rivers':
                      header("location:asari-toru-riversmusicband.php");
                        break;
                        
                        case 'music'.'bonny-rivers'.'Rivers':
                      header("location:bonny-riversmusicband.php");
                        break;
                        
                          case 'music'.'eleme-rivers'.'Rivers':
                      header("location:eleme-riversmusicband.php");
                        break;
                        
                           case 'music'.'degema-rivers'.'Rivers':
                      header("location:degema-riversmusicband.php");
                        break;

                        case 'music'.'emohua-rivers'.'Rivers':               
                      header("location:emohua-riversmusicband.php");                    
                        break;



                      
                        #END MUSIC ARTIST LOCATION


                      #BEGINING HALL DECORATORS LOCATION
                        case 'halldecorators'.'abua-odial-rivers'.'Rivers':
                      header("location:abua-odial-rivershalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'ahoada-west-rivers'.'Rivers':
                      header("location:ahoada-west-rivershalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'akuku-toru-rivers'.'Rivers':
                      header("location:akuku-toru-rivershalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'etche-rivers'.'Rivers':
                      header("location:etche-rivershalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'gokana-rivers'.'Rivers':
                      header("location:gokana-rivershalldecorators.php");
                        break;

                        case 'halldecorators'.'khana-rivers'.'Rivers':
                      header("location:khana-rivershalldecorators.php");
                        break;

                        case 'halldecorators'.'obio-akpor-rivers'.'Rivers':
                      header("location:obio-akpor-rivershalldecorators.php");
                        break;

                        case 'halldecorators'.'ogba-east-edoni-rivers'.'Rivers':
                      header("location:ogba-east-edoni-rivershalldecorators.php");
                        break;

                        case 'halldecorators'.'ogu-bolo-rivers'.'Rivers':
                      header("location:ogu-bolo-rivershalldecorators.php");
                        break;

                        case 'halldecorators'.'okrika-rivers'.'Rivers':
                      header("location:okrika-rivershalldecorators.php");
                        break;

                        case 'halldecorators'.'omumma-rivers'.'Rivers':
                      header("location:omumma-rivershalldecorators.php");
                        break;

                        case 'halldecorators'.'portharcourt-rivers'.'Rivers':
                      header("location:portharcourt-rivershalldecorators.php");
                        break;

                        case 'halldecorators'.'tai-rivers'.'Rivers':
                      header("location:tai-rivershalldecorators.php");
                        break;

                        case 'halldecorators'.''.'Rivers':
                      header("location:halldecorators.php");
                        break;

                        case 'halldecorators'.'ikwerre-rivers'.'Rivers':
                      header("location:ikwerre-rivershalldecorators.php");
                        break;

                        case 'halldecorators'.'oyigbo-rivers'.'Rivers':
                      header("location:oyigbo-rivershalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'andoni-rivers3'.'Rivers':
                      header("location:andoni-rivershalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'asari-toru-rivers'.'Rivers':
                      header("location:asari-toru-rivershalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'bonny-rivers'.'Rivers':
                      header("location:bonny-rivershalldecorators.php");
                        break;
                        
                         case 'halldecorators'.'eleme-rivers'.'Rivers':
                      header("location:eleme-rivershalldecorators.php");
                        break;
                        
                          case 'halldecorators'.'degema-rivers'.'Rivers':
                      header("location:degema-rivershalldecorators.php");
                        break;

                          case 'halldecorators'.'emohua-rivers'.'Rivers':                
                      header("location:emohua-rivershalldecorators.php");                   
                        break;



                    

                        #END HALL DECORATORS LOCATION


                        #BEGINING Djs LOCATION
                        case 'dj'.'abua-odial-rivers'.'Rivers':
                      header("location:abua-odial-riversdj.php");
                        break;
                        
                         case 'dj'.'ahoada-west-rivers'.'Rivers':
                      header("location:ahoada-west-riversdj.php");
                        break;
                        
                        case 'dj'.'akuku-toru-rivers'.'Rivers':
                      header("location:akuku-toru-riversdj.php");
                        break;
                        
                        case 'dj'.'andoni-rivers'.'Rivers':
                      header("location:andoni-riversdj.php");
                        break;
                        
                        case 'dj'.'etche-rivers'.'Rivers':
                      header("location:etche-riversdj.php");
                        break;
                        
                        case 'dj'.'gokana-rivers'.'Rivers':
                      header("location:gokana-riversdj.php");
                        break;

                         case 'dj'.'ikwerre-rivers'.'Rivers':
                      header("location:ikwerre-riversdj.php");
                        break;

                         case 'dj'.'oyigbo-rivers'.'Rivers':
                      header("location:oyigbo-riversdj.php");
                        break;

                         case 'dj'.'khana-rivers'.'Rivers':
                      header("location:khana-riversdj.php");
                        break;

                        case 'dj'.'obio-akpor-rivers'.'Rivers':
                      header("location:obio-akpor-riversdj.php");
                        break;

                        case 'dj'.'ogba-east-edoni-rivers'.'Rivers':
                      header("location:ogba-east-edoni-riversdj.php");
                        break;

                        case 'dj'.'ogu-bolo-rivers'.'Rivers':
                      header("location:ogu-bolo-riversdj.php");
                        break;

                        case 'dj'.'okrika-rivers'.'Rivers':
                      header("location:okrika-riversdj.php");
                        break;

                        case 'dj'.'omumma-rivers'.'Rivers':
                      header("location:omumma-riversdj.php");
                        break;

                        case 'dj'.'portharcourt-rivers'.'Rivers':
                      header("location:portharcourt-riversdj.php");
                        break;

                        case 'dj'.'tai-rivers'.'Rivers':
                      header("location:tai-riversdj.php");
                        break;


                        case 'dj'.''.'Rivers':
                      header("location:dj.php");
                        break;
                        
                        case 'dj'.'asari-toru-rivers'.'Rivers':
                      header("location:asari-toru-riversdj.php");
                        break;
                        
                        case 'dj'.'bonny-rivers'.'Rivers':
                      header("location:bonny-riversdj.php");
                        break;
                        
                        case 'dj'.'eleme-rivers'.'Rivers':
                      header("location:eleme-riversdj.php");
                        break;
                        
                        case 'dj'.'degema-rivers'.'Rivers':
                      header("location:degema-riversdj.php");
                        break;

                            case 'dj'.'emohua-rivers'.'Rivers':                
                      header("location:emohua-riversdj.php");                   
                        break;


                      
                        #END Djs LOCATION
                      

                        #BEGINING MARKUP LOCATION
                        case 'markup'.'abua-odial-rivers'.'Rivers':
                      header("location:abua-odial-riversmarkup.php");
                        break;
                        
                         case 'markup'.'ahoada-west-rivers'.'Rivers':
                      header("location:ahoada-west-riversmarkup.php");
                        break;
                        
                        case 'markup'.'etche-rivers'.'Rivers':
                      header("location:etche-riversmarkup.php");
                        break;
                        
                        case 'markup'.'gokana-rivers'.'Rivers':
                      header("location:gokana-riversmarkup.php");
                        break;

                        case 'markup'.'ikwerre-rivers'.'Rivers':
                      header("location:ikwerre-riversmarkup.php");
                        break;

                        case 'markup'.'oyigbo-rivers'.'Rivers':
                      header("location:oyigbo-riversmarkup.php");
                        break;

                        case 'markup'.'khana-rivers'.'Rivers':
                      header("location:khana-riversmarkup.php");
                        break;

                        case 'markup'.'obio-akpor-rivers'.'Rivers':
                      header("location:obio-akpor-riversmarkup.php");
                        break;

                        case 'markup'.'ogba-east-edoni-rivers'.'Rivers':
                      header("location:ogba-east-edoni-riversmarkup.php");
                        break;


                        case 'markup'.'ogu-bolo-rivers'.'Rivers':
                      header("location:ogu-bolo-riversmarkup.php");
                        break;


                        case 'markup'.'okrika-rivers'.'Rivers':
                      header("location:okrika-riversmarkup.php");
                        break;


                        case 'markup'.'omumma-rivers'.'Rivers':
                      header("location:omumma-riversmarkup.php");
                        break;


                        case 'markup'.'portharcourt-rivers'.'Rivers':
                      header("location:portharcourt-riversmarkup.php");
                        break;

                        case 'markup'.'tai-rivers'.'Rivers':
                      header("location:tai-riversmarkup.php");
                        break;

                        case 'markup'.''.'Rivers':
                      header("location:markup.php");
                        break;

                        
                          case 'markup'.'akuku-toru-rivers'.'Rivers':
                      header("location:akuku-toru-riversmarkup.php");
                        break;
                        
                          case 'markup'.'andoni-rivers'.'Rivers':
                      header("location:andoni-riversmarkup.php");
                        break;
                        
                          case 'markup'.'asari-toru-rivers'.'Rivers':
                      header("location:asari-toru-riversmarkup.php");
                        break;
                        
                          case 'markup'.'bonny-rivers'.'Rivers':
                      header("location:bonny-riversmarkup.php");
                        break;
                        
                        
                        case 'markup'.'eleme-rivers'.'Rivers':
                      header("location:eleme-riversmarkup.php");
                        break;
                        
                        case 'markup'.'degema-rivers'.'Rivers':
                      header("location:degema-riversmarkup.php");
                        break;


                        case 'markup'.'emohua-rivers'.'Rivers':                
                      header("location:emohua-riversmarkup.php");                   
                        break;


                     

                        #END MARKUP LOCATION

                      #Rivers STATE ENDING






                                              #Kaduna STATE BEGINING

                         case 'photographer'.'brnin-gwari-kaduna'.'Kaduna':
                      header("location:brnin-gwari-kadunaphotogra.php");
                        break;
                        
                         case 'photographer'.'chukun-kaduna'.'Kaduna':
                      header("location:chukun-kadunaphotogra.php");
                        break;
                        
                        case 'photographer'.'giwa-kaduna'.'Kaduna':
                      header("location:giwa-kadunaphotogra.php");
                        break;
                        
                         case 'photographer'.'kajuru-kaduna'.'Kaduna':
                      header("location:kajuru-kadunaphotogra.php");
                        break;

                        case 'photographer'.'igabi-kaduna'.'Kaduna':                
                      header("location:igabi-kadunaphotogra.php");                     
                        break;
                        
                          case 'photographer'.'ikara-kaduna'.'Kaduna':                
                      header("location:ikara-kadunaphotogra.php");                     
                        break;
                        
                          case 'photographer'.'jaba-kaduna'.'Kaduna':                
                      header("location:jaba-kadunaphotogra.php");                     
                        break;
                        
                          case 'photographer'.'jamaa-kaduna'.'Kaduna':                
                      header("location:jamaa-kadunaphotogra.php");                     
                        break;
                        
                          case 'photographer'.'kachia-kaduna'.'Kaduna':                
                      header("location:kachia-kadunaphotogra.php");                     
                        break;
                        
                        case 'photographer'.'kaduna-kaduna'.'Kaduna':                
                      header("location:kaduna-kadunaphotogra.php");                     
                        break;
                        
                          case 'photographer'.'kagarok-kaduna'.'Kaduna':                
                      header("location:kagarok-kadunaphotogra.php");                     
                        break;

                           case 'photographer'.'kauru-kaduna'.'Kaduna':                
                      header("location:kauru-kadunaphotogra.php");                     
                        break;

                           case 'photographer'.'kabau-kaduna'.'Kaduna':                
                      header("location:kabau-kadunaphotogra.php");                     
                        break;

                           case 'photographer'.'kudan-kaduna'.'Kaduna':                
                      header("location:kudan-kadunaphotogra.php");                     
                        break;

                           case 'photographer'.'kere-kaduna'.'Kaduna':                
                      header("location:kere-kadunaphotogra.php");                     
                        break;

                         case 'photographer'.'makarfi-kaduna'.'Kaduna':                
                      header("location:makarfi-kadunaphotogra.php");                     
                        break;

                         case 'photographer'.'sabongari-kaduna'.'Kaduna':                
                      header("location:sabongari-kadunaphotogra.php");                     
                        break;

                         case 'photographer'.'sanga-kaduna'.'Kaduna':                
                      header("location:sanga-kadunaphotogra.php");                     
                        break;

                         case 'photographer'.'sanga-kaduna'.'Kaduna':                
                      header("location:sanga-kadunaphotogra.php");                     
                        break;

                         case 'photographer'.'soba-kaduna'.'Kaduna':                
                      header("location:soba-kadunaphotogra.php");                     
                        break;


                          case 'photographer'.'zangon-kataf-kaduna'.'Kaduna':                
                      header("location:zangon-kataf-kadunaphotogra.php");                     
                        break;


                          case 'photographer'.'zaria-kaduna'.'Kaduna':                
                      header("location:zaria-kadunaphotogra.php");                     
                        break;



                      
                

                        #END PHOTGRAPHER LOCATION



                        #BEGINING VEDIOGRAPHERS LOCATION
                        case 'vediographer'.'brnin-gwari-kaduna'.'Kaduna':
                      header("location:brnin-gwari-kadunavediographer.php");
                        break;
                        
                        
                         case 'vediographer'.'chukun-kaduna'.'Kaduna':
                      header("location:chukun-kadunavediographer.php");
                        break;
                        
                        case 'vediographer'.'giwa-kaduna'.'Kaduna':
                      header("location:giwa-kadunavediographer.php");
                        break;
                        
                        case 'vediographer'.'kajuru-kaduna'.'Kaduna':
                      header("location:kajuru-kadunavediographer.php");
                        break;
                        
                        case 'vediographer'.'igabi-kaduna'.'Kaduna':
                      header("location:igabi-kadunavediographer.php");
                        break;
                        
                        case 'vediographer'.'ikara-kaduna'.'Kaduna':
                      header("location:ikara-kadunavediographer.php");
                        break;
                        
                         case 'vediographer'.'jaba-kaduna'.'Kaduna':
                      header("location:jaba-kadunavediographer.php");
                        break;
                        
                         case 'vediographer'.'jamaa-kaduna'.'Kaduna':
                      header("location:jamaa-kadunavediographer.php");
                        break;

                          case 'vediographer'.'kachia-kaduna'.'Kaduna':                
                      header("location:kachia-kadunavediographer.php");                   
                        break;
                        
                          case 'vediographer'.'kaduna-kaduna'.'Kaduna':                
                      header("location:kaduna-kadunavediographer.php");                   
                        break;
                        
                          case 'vediographer'.'kagarok-kaduna'.'Kaduna':                
                      header("location:kagarok-kadunavediographer.php");                   
                        break;

                        case 'vediographer'.'kauru-kaduna'.'Kaduna':                
                      header("location:kauru-kadunavediographer.php");                   
                        break;

                        case 'vediographer'.'kabau-kaduna'.'Kaduna':                
                      header("location:kabau-kadunavediographer.php");                   
                        break;

                        case 'vediographer'.'kudan-kaduna'.'Kaduna':                
                      header("location:kudan-kadunavediographer.php");                   
                        break;

                         case 'vediographer'.'kere-kaduna'.'Kaduna':                
                      header("location:kere-kadunavediographer.php");                   
                        break;

                          case 'vediographer'.'makarfi-kaduna'.'Kaduna':                
                      header("location:makarfi-kadunavediographer.php");                   
                        break;

                          case 'vediographer'.'sabongari-kaduna'.'Kaduna':                
                      header("location:sabongari-kadunavediographer.php");                   
                        break;

                          case 'vediographer'.'sanga-kaduna'.'Kaduna':                
                      header("location:sanga-kadunavediographer.php");                   
                        break;

                          case 'vediographer'.'sanga-kaduna'.'Kaduna':                
                      header("location:sanga-kadunavediographer.php");                   
                        break;

                          case 'vediographer'.'soba-kaduna'.'Kaduna':                
                      header("location:soba-kadunavediographer.php");                   
                        break;


                          case 'vediographer'.'zangon-kataf-kaduna'.'Kaduna':                
                      header("location:zangon-kataf-kadunavediographer.php");                   
                        break;


                          case 'vediographer'.'zaria-kaduna'.'Kaduna':                
                      header("location:zaria-kadunavediographer.php");                   
                        break;


                     

                      

                

                        #END VEDIOGRAPHERS LOCATION


                        #BEGINING CATERERS LOCATION
                        case 'caterers'.'brnin-gwari-kaduna'.'Kaduna':
                      header("location:brnin-gwari-kadunacaterers.php");
                        break;
                        
                         case 'caterers'.'chukun-kaduna'.'Kaduna':
                      header("location:chukun-kadunacaterers.php");
                        break;
                        
                         case 'caterers'.'giwa-kaduna'.'Kaduna':
                      header("location:giwa-kadunacaterers.php");
                        break;
                        
                          case 'caterers'.'kaduna-kaduna'.'Kaduna':
                      header("location:kaduna-kadunacaterers.php");
                        break;
                        
                          case 'caterers'.'kagarok-kaduna'.'Kaduna':
                      header("location:kagarok-kadunacaterers.php");
                        break;

                           case 'caterers'.'kauru-kaduna'.'Kaduna':
                      header("location:kauru-kadunacaterers.php");
                        break;

                           case 'caterers'.'kabau-kaduna'.'Kaduna':
                      header("location:kabau-kadunacaterers.php");
                        break;

                           case 'caterers'.'kudan-kaduna'.'Kaduna':
                      header("location:kudan-kadunacaterers.php");
                        break;

                          case 'caterers'.'kere-kaduna'.'Kaduna':
                      header("location:kere-kadunacaterers.php");
                        break;

                           case 'caterers'.'makarfi-kaduna'.'Kaduna':
                      header("location:makarfi-kadunacaterers.php");
                        break;

                         case 'caterers'.'zangon-kataf-kaduna'.'Kaduna':
                      header("location:zangon-kataf-kadunacaterers.php");
                        break;

                         case 'caterers'.'zaria-kaduna'.'Kaduna':
                      header("location:zaria-kadunacaterers.php");
                        break;


                           case 'caterers'.'sabongari-kaduna'.'Kaduna':
                      header("location:sabongari-kadunacaterers.php");
                        break;


                           case 'caterers'.'sanga-kaduna'.'Kaduna':
                      header("location:sanga-kadunacaterers.php");
                        break;

                           case 'caterers'.'sanga-kaduna'.'Kaduna':
                      header("location:sanga-kadunacaterers.php");
                        break;


                           case 'caterers'.'soba-kaduna'.'Kaduna':
                      header("location:soba-kadunacaterers.php");
                        break;

                        
                         case 'caterers'.'kajuru-kaduna'.'Kaduna':
                      header("location:kajuru-kadunacaterers.php");
                        break;
                        
                         case 'caterers'.'igabi-kaduna'.'Kaduna':
                      header("location:igabi-kadunacaterers.php");
                        break;
                        
                         case 'caterers'.'ikara-kaduna'.'Kaduna':
                      header("location:ikara-kadunacaterers.php");
                        break;
                        
                          case 'caterers'.'jamaa-kaduna'.'Kaduna':
                      header("location:jamaa-kadunacaterers.php");
                        break;
                        
                           case 'caterers'.'jaba-kaduna'.'Kaduna':
                      header("location:jaba-kadunacaterers.php");
                        break;

                          case 'caterers'.'kachia-kaduna'.'Kaduna':                
                      header("location:kachia-kadunacaterers.php");                   
                        break;


                      

                     

                        

                        #END CATERERS LOCATION


                        #BEGINING WINESELLER LOCATION
                        case 'wineseller'.'brnin-gwari-kaduna'.'Kaduna':
                      header("location:brnin-gwari-kadunawineseller.php");
                        break;
                        
                        case 'wineseller'.'chukun-kaduna'.'Kaduna':
                      header("location:chukun-kadunawineseller.php");
                        break;
                        
                         case 'wineseller'.'giwa-kaduna'.'Kaduna':
                      header("location:giwa-kadunawineseller.php");
                        break;
                        
                         case 'wineseller'.'kajuru-kaduna'.'Kaduna':
                      header("location:kajuru-kadunawineseller.php");
                        break;
                        
                         case 'wineseller'.'igabi-kaduna'.'Kaduna':
                      header("location:igabi-kadunawineseller.php");
                        break;
                        
                           case 'wineseller'.'kaduna-kaduna'.'Kaduna':
                      header("location:kaduna-kadunawineseller.php");
                        break;
                        
                           case 'wineseller'.'kagarok-kaduna'.'Kaduna':
                      header("location:kagarok-kadunawineseller.php");
                        break;

                          case 'wineseller'.'kauru-kaduna'.'Kaduna':
                      header("location:kauru-kadunawineseller.php");
                        break;

                          case 'wineseller'.'kabau-kaduna'.'Kaduna':
                      header("location:kabau-kadunawineseller.php");
                        break;

                          case 'wineseller'.'kudan-kaduna'.'Kaduna':
                      header("location:kudan-kadunawineseller.php");
                        break;

                         case 'wineseller'.'kere-kaduna'.'Kaduna':
                      header("location:kere-kadunawineseller.php");
                        break;

                        case 'wineseller'.'makarfi-kaduna'.'Kaduna':
                      header("location:makarfi-kadunawineseller.php");
                        break;


                        case 'wineseller'.'sabongari-kaduna'.'Kaduna':
                      header("location:sabongari-kadunawineseller.php");
                        break;

                        case 'wineseller'.'sanga-kaduna'.'Kaduna':
                      header("location:sanga-kadunawineseller.php");
                        break;

                        case 'wineseller'.'sanga-kaduna'.'Kaduna':
                      header("location:sanga-kadunawineseller.php");
                        break;

                        case 'wineseller'.'zangon-kataf-kaduna'.'Kaduna':
                      header("location:zangon-kataf-kadunawineseller.php");
                        break;

                         case 'wineseller'.'zaria-kaduna'.'Kaduna':
                      header("location:zaria-kadunawineseller.php");
                        break;

                         case 'wineseller'.'soba-kaduna'.'Kaduna':
                      header("location:soba-kadunawineseller.php");
                        break;
                        
                         case 'wineseller'.'ikara-kaduna'.'Kaduna':
                      header("location:ikara-kadunawineseller.php");
                        break;
                        
                         case 'wineseller'.'jamaa-kaduna'.'Kaduna':
                      header("location:jamaa-kadunawineseller.php");
                        break;
                        
                         case 'wineseller'.'jaba-kaduna'.'Kaduna':
                      header("location:jaba-kadunawineseller.php");
                        break;

                            case 'wineseller'.'kachia-kaduna'.'Kaduna':                
                      header("location:kachia-kadunawineseller.php");                   
                        break;


                        

                    

                        #END WINESELLER LOCATION


                      #BEGINING OF ENTERTAINER LOCATION
                        case 'entertainer'.'brnin-gwari-kaduna'.'Kaduna':
                        header("location:brnin-gwari-kadunaentertainer.php");
                        break;
                        
                        case 'entertainer'.'chukun-kaduna'.'Kaduna':
                        header("location:chukun-kadunaentertainer.php");
                        break;
                        
                        case 'entertainer'.'giwa-kaduna'.'Kaduna':
                        header("location:giwa-kadunaentertainer.php");
                        break;
                        
                        case 'entertainer'.'kajuru-kaduna'.'Kaduna':
                        header("location:kajuru-kadunaentertainer.php");
                        break;
                        
                        case 'entertainer'.'igabi-kaduna'.'Kaduna':
                        header("location:igabi-kadunaentertainer.php");
                        break;
                        
                        case 'entertainer'.'ikara-kaduna'.'Kaduna':
                        header("location:ikara-kadunaentertainer.php");
                        break;
                        
                        case 'entertainer'.'kaduna-kaduna'.'Kaduna':
                        header("location:kaduna-kadunaentertainer.php");
                        break;
                        
                        
                        case 'entertainer'.'kagarok-kaduna'.'Kaduna':
                        header("location:kagarok-kadunaentertainer.php");
                        break;

                         case 'entertainer'.'kauru-kaduna'.'Kaduna':
                        header("location:kauru-kadunaentertainer.php");
                        break;

                         case 'entertainer'.'kabau-kaduna'.'Kaduna':
                        header("location:kabau-kadunaentertainer.php");
                        break;

                         case 'entertainer'.'kudan-kaduna'.'Kaduna':
                        header("location:kudan-kadunaentertainer.php");
                        break;

                          case 'entertainer'.'kere-kaduna'.'Kaduna':
                        header("location:kere-kadunaentertainer.php");
                        break;

                        case 'entertainer'.'makarfi-kaduna'.'Kaduna':
                        header("location:makarfi-kadunaentertainer.php");
                        break;

                        case 'entertainer'.'sabongari-kaduna'.'Kaduna':
                        header("location:sabongari-kadunaentertainer.php");
                        break;

                        case 'entertainer'.'sanga-kaduna'.'Kaduna':
                        header("location:sanga-kadunaentertainer.php");
                        break;

                        case 'entertainer'.'sanga-kaduna'.'Kaduna':
                        header("location:sanga-kadunaentertainer.php");
                        break;

                        case 'entertainer'.'soba-kaduna'.'Kaduna':
                        header("location:soba-kadunaentertainer.php");
                        break;

                        case 'entertainer'.'zangon-kataf-kaduna'.'Kaduna':
                        header("location:zangon-kataf-kadunaentertainer.php");
                        break;

                        case 'entertainer'.'zaria-kaduna'.'Kaduna':
                        header("location:zaria-kadunaentertainer.php");
                        break;
                        
                        case 'entertainer'.'jamaa-kaduna'.'Kaduna':
                        header("location:jamaa-kadunaentertainer.php");
                        break;
                        
                        case 'entertainer'.'jaba-kaduna'.'Kaduna':
                        header("location:jaba-kadunaentertainer.php");
                        break;

                            case 'entertainer'.'kachia-kaduna'.'Kaduna':               
                      header("location:kachia-kadunaentertainer.php");                    
                        break;



                      
                        #END ENTERTAINER / MC LOCATION


                        #BEGINING MUSIC ARTIST LOCATION
                        case 'music'.'brnin-gwari-kaduna'.'Kaduna':
                      header("location:brnin-gwari-kadunamusicband.php");
                        break;
                        
                        case 'music'.'chukun-kaduna'.'Kaduna':
                      header("location:chukun-kadunamusicband.php");
                        break;
                        
                        case 'music'.'giwa-kaduna'.'Kaduna':
                      header("location:giwa-kadunamusicband.php");
                        break;
                        
                        case 'music'.'kajuru-kaduna'.'Kaduna':
                      header("location:kajuru-kadunamusicband.php");
                        break;
                        
                        case 'music'.'kaduna-kaduna'.'Kaduna':
                      header("location:kaduna-kadunamusicband.php");
                        break;
                        
                        case 'music'.'kagarok-kaduna'.'Kaduna':
                      header("location:kagarok-kadunamusicband.php");
                        break;

                         case 'music'.'kauru-kaduna'.'Kaduna':
                      header("location:kauru-kadunamusicband.php");
                        break;

                         case 'music'.'kabau-kaduna'.'Kaduna':
                      header("location:kabau-kadunamusicband.php");
                        break;

                         case 'music'.'kudan-kaduna'.'Kaduna':
                      header("location:kudan-kadunamusicband.php");
                        break;

                         case 'music'.'kere-kaduna'.'Kaduna':
                      header("location:kere-kadunamusicband.php");
                        break;


                         case 'music'.'makarfi-kaduna'.'Kaduna':
                      header("location:makarfi-kadunamusicband.php");
                        break;

                         case 'music'.'sabongari-kaduna'.'Kaduna':
                      header("location:sabongari-kadunamusicband.php");
                        break;

                         case 'music'.'sanga-kaduna'.'Kaduna':
                      header("location:sanga-kadunamusicband.php");
                        break;

                         case 'music'.'sanga-kaduna'.'Kaduna':
                      header("location:sanga-kadunamusicband.php");
                        break;

                         case 'music'.'soba-kaduna'.'Kaduna':
                      header("location:soba-kadunamusicband.php");
                        break;

                        case 'music'.'zangon-kataf-kaduna'.'Kaduna':
                      header("location:zangon-kataf-kadunamusicband.php");
                        break;

                        case 'music'.'zaria-kaduna'.'Kaduna':
                      header("location:zaria-kadunamusicband.php");
                        break;
                        
                        
                        case 'music'.'igabi-kaduna'.'Kaduna':
                      header("location:igabi-kadunamusicband.php");
                        break;
                        
                        case 'music'.'ikara-kaduna'.'Kaduna':
                      header("location:ikara-kadunamusicband.php");
                        break;
                        
                          case 'music'.'jamaa-kaduna'.'Kaduna':
                      header("location:jamaa-kadunamusicband.php");
                        break;
                        
                           case 'music'.'jaba-kaduna'.'Kaduna':
                      header("location:jaba-kadunamusicband.php");
                        break;

                        case 'music'.'kachia-kaduna'.'Kaduna':               
                      header("location:kachia-kadunamusicband.php");                    
                        break;



                      
                        #END MUSIC ARTIST LOCATION


                      #BEGINING HALL DECORATORS LOCATION
                        case 'halldecorators'.'brnin-gwari-kaduna'.'Kaduna':
                      header("location:brnin-gwari-kadunahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'chukun-kaduna'.'Kaduna':
                      header("location:chukun-kadunahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'giwa-kaduna'.'Kaduna':
                      header("location:giwa-kadunahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'kaduna-kaduna'.'Kaduna':
                      header("location:kaduna-kadunahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'kagarok-kaduna'.'Kaduna':
                      header("location:kagarok-kadunahalldecorators.php");
                        break;

                        case 'halldecorators'.'kudan-kaduna'.'Kaduna':
                      header("location:kudan-kadunahalldecorators.php");
                        break;

                        case 'halldecorators'.'kere-kaduna'.'Kaduna':
                      header("location:kere-kadunahalldecorators.php");
                        break;

                        case 'halldecorators'.'makarfi-kaduna'.'Kaduna':
                      header("location:makarfi-kadunahalldecorators.php");
                        break;

                        case 'halldecorators'.'sabongari-kaduna'.'Kaduna':
                      header("location:sabongari-kadunahalldecorators.php");
                        break;

                        case 'halldecorators'.'sanga-kaduna'.'Kaduna':
                      header("location:sanga-kadunahalldecorators.php");
                        break;

                        case 'halldecorators'.'sanga-kaduna'.'Kaduna':
                      header("location:sanga-kadunahalldecorators.php");
                        break;

                        case 'halldecorators'.'soba-kaduna'.'Kaduna':
                      header("location:soba-kadunahalldecorators.php");
                        break;

                        case 'halldecorators'.'zangon-kataf-kaduna'.'Kaduna':
                      header("location:zangon-kataf-kadunahalldecorators.php");
                        break;

                        case 'halldecorators'.'zaria-kaduna'.'Kaduna':
                      header("location:zaria-kadunahalldecorators.php");
                        break;

                        case 'halldecorators'.'kauru-kaduna'.'Kaduna':
                      header("location:kauru-kadunahalldecorators.php");
                        break;

                        case 'halldecorators'.'kabau-kaduna'.'Kaduna':
                      header("location:kabau-kadunahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'kajuru-kaduna3'.'Kaduna':
                      header("location:kajuru-kadunahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'igabi-kaduna'.'Kaduna':
                      header("location:igabi-kadunahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'ikara-kaduna'.'Kaduna':
                      header("location:ikara-kadunahalldecorators.php");
                        break;
                        
                         case 'halldecorators'.'jamaa-kaduna'.'Kaduna':
                      header("location:jamaa-kadunahalldecorators.php");
                        break;
                        
                          case 'halldecorators'.'jaba-kaduna'.'Kaduna':
                      header("location:jaba-kadunahalldecorators.php");
                        break;

                          case 'halldecorators'.'kachia-kaduna'.'Kaduna':                
                      header("location:kachia-kadunahalldecorators.php");                   
                        break;



                    

                        #END HALL DECORATORS LOCATION


                        #BEGINING Djs LOCATION
                        case 'dj'.'brnin-gwari-kaduna'.'Kaduna':
                      header("location:brnin-gwari-kadunadj.php");
                        break;
                        
                         case 'dj'.'chukun-kaduna'.'Kaduna':
                      header("location:chukun-kadunadj.php");
                        break;
                        
                        case 'dj'.'giwa-kaduna'.'Kaduna':
                      header("location:giwa-kadunadj.php");
                        break;
                        
                        case 'dj'.'kajuru-kaduna'.'Kaduna':
                      header("location:kajuru-kadunadj.php");
                        break;
                        
                        case 'dj'.'kaduna-kaduna'.'Kaduna':
                      header("location:kaduna-kadunadj.php");
                        break;
                        
                        case 'dj'.'kagarok-kaduna'.'Kaduna':
                      header("location:kagarok-kadunadj.php");
                        break;

                         case 'dj'.'kauru-kaduna'.'Kaduna':
                      header("location:kauru-kadunadj.php");
                        break;

                         case 'dj'.'kabau-kaduna'.'Kaduna':
                      header("location:kabau-kadunadj.php");
                        break;

                         case 'dj'.'kudan-kaduna'.'Kaduna':
                      header("location:kudan-kadunadj.php");
                        break;

                        case 'dj'.'kere-kaduna'.'Kaduna':
                      header("location:kere-kadunadj.php");
                        break;

                        case 'dj'.'makarfi-kaduna'.'Kaduna':
                      header("location:makarfi-kadunadj.php");
                        break;

                        case 'dj'.'sabongari-kaduna'.'Kaduna':
                      header("location:sabongari-kadunadj.php");
                        break;

                        case 'dj'.'sanga-kaduna'.'Kaduna':
                      header("location:sanga-kadunadj.php");
                        break;

                        case 'dj'.'sanga-kaduna'.'Kaduna':
                      header("location:sanga-kadunadj.php");
                        break;

                        case 'dj'.'soba-kaduna'.'Kaduna':
                      header("location:soba-kadunadj.php");
                        break;

                        case 'dj'.'zangon-kataf-kaduna'.'Kaduna':
                      header("location:zangon-kataf-kadunadj.php");
                        break;


                        case 'dj'.'zaria-kaduna'.'Kaduna':
                      header("location:zaria-kadunadj.php");
                        break;
                        
                        case 'dj'.'igabi-kaduna'.'Kaduna':
                      header("location:igabi-kadunadj.php");
                        break;
                        
                        case 'dj'.'ikara-kaduna'.'Kaduna':
                      header("location:ikara-kadunadj.php");
                        break;
                        
                        case 'dj'.'jamaa-kaduna'.'Kaduna':
                      header("location:jamaa-kadunadj.php");
                        break;
                        
                        case 'dj'.'jaba-kaduna'.'Kaduna':
                      header("location:jaba-kadunadj.php");
                        break;

                            case 'dj'.'kachia-kaduna'.'Kaduna':                
                      header("location:kachia-kadunadj.php");                   
                        break;


                      
                        #END Djs LOCATION
                      

                        #BEGINING MARKUP LOCATION
                        case 'markup'.'brnin-gwari-kaduna'.'Kaduna':
                      header("location:brnin-gwari-kadunamarkup.php");
                        break;
                        
                         case 'markup'.'chukun-kaduna'.'Kaduna':
                      header("location:chukun-kadunamarkup.php");
                        break;
                        
                        case 'markup'.'kaduna-kaduna'.'Kaduna':
                      header("location:kaduna-kadunamarkup.php");
                        break;
                        
                        case 'markup'.'kagarok-kaduna'.'Kaduna':
                      header("location:kagarok-kadunamarkup.php");
                        break;

                        case 'markup'.'kauru-kaduna'.'Kaduna':
                      header("location:kauru-kadunamarkup.php");
                        break;

                        case 'markup'.'kabau-kaduna'.'Kaduna':
                      header("location:kabau-kadunamarkup.php");
                        break;

                        case 'markup'.'kudan-kaduna'.'Kaduna':
                      header("location:kudan-kadunamarkup.php");
                        break;

                        case 'markup'.'kere-kaduna'.'Kaduna':
                      header("location:kere-kadunamarkup.php");
                        break;

                        case 'markup'.'makarfi-kaduna'.'Kaduna':
                      header("location:makarfi-kadunamarkup.php");
                        break;


                        case 'markup'.'sabongari-kaduna'.'Kaduna':
                      header("location:sabongari-kadunamarkup.php");
                        break;


                        case 'markup'.'sanga-kaduna'.'Kaduna':
                      header("location:sanga-kadunamarkup.php");
                        break;


                        case 'markup'.'sanga-kaduna'.'Kaduna':
                      header("location:sanga-kadunamarkup.php");
                        break;


                        case 'markup'.'soba-kaduna'.'Kaduna':
                      header("location:soba-kadunamarkup.php");
                        break;

                        case 'markup'.'zangon-kataf-kaduna'.'Kaduna':
                      header("location:zangon-kataf-kadunamarkup.php");
                        break;

                        case 'markup'.'zaria-kaduna'.'Kaduna':
                      header("location:zaria-kadunamarkup.php");
                        break;

                        
                          case 'markup'.'giwa-kaduna'.'Kaduna':
                      header("location:giwa-kadunamarkup.php");
                        break;
                        
                          case 'markup'.'kajuru-kaduna'.'Kaduna':
                      header("location:kajuru-kadunamarkup.php");
                        break;
                        
                          case 'markup'.'igabi-kaduna'.'Kaduna':
                      header("location:igabi-kadunamarkup.php");
                        break;
                        
                          case 'markup'.'ikara-kaduna'.'Kaduna':
                      header("location:ikara-kadunamarkup.php");
                        break;
                        
                        
                        case 'markup'.'jamaa-kaduna'.'Kaduna':
                      header("location:jamaa-kadunamarkup.php");
                        break;
                        
                        case 'markup'.'jaba-kaduna'.'Kaduna':
                      header("location:jaba-kadunamarkup.php");
                        break;


                        case 'markup'.'kachia-kaduna'.'Kaduna':                
                      header("location:kachia-kadunamarkup.php");                   
                        break;  

                        #END MARKUP LOCATION

                      #Kaduna STATE ENDING







                                              #Niger STATE BEGINING

                         case 'photographer'.'agaie-niger'.'Niger':
                      header("location:agaie-nigerphotogra.php");
                        break;
                        
                         case 'photographer'.'agwara-niger'.'Niger':
                      header("location:agwara-nigerphotogra.php");
                        break;
                        
                        case 'photographer'.'bida-niger'.'Niger':
                      header("location:bida-nigerphotogra.php");
                        break;
                        
                         case 'photographer'.'borgu-niger'.'Niger':
                      header("location:borgu-nigerphotogra.php");
                        break;

                        case 'photographer'.'bosso-niger'.'Niger':                
                      header("location:bosso-nigerphotogra.php");                     
                        break;
                        
                          case 'photographer'.'chanchanga-niger'.'Niger':                
                      header("location:chanchanga-nigerphotogra.php");                     
                        break;
                        
                          case 'photographer'.'edati-niger'.'Niger':                
                      header("location:edati-nigerphotogra.php");                     
                        break;
                        
                          case 'photographer'.'gbako-niger'.'Niger':                
                      header("location:gbako-nigerphotogra.php");                     
                        break;
                        
                          case 'photographer'.'gurara-niger'.'Niger':                
                      header("location:gurara-nigerphotogra.php");                     
                        break;
                        
                        case 'photographer'.'kitcha-niger'.'Niger':                
                      header("location:kitcha-nigerphotogra.php");                     
                        break;
                        
                          case 'photographer'.'kontagora-niger'.'Niger':                
                      header("location:kontagora-nigerphotogra.php");                     
                        break;

                           case 'photographer'.'lapai-niger'.'Niger':                
                      header("location:lapai-nigerphotogra.php");                     
                        break;

                           case 'photographer'.'lavum-niger'.'Niger':                
                      header("location:lavum-nigerphotogra.php");                     
                        break;

                           case 'photographer'.'magama-niger'.'Niger':                
                      header("location:magama-nigerphotogra.php");                     
                        break;

                           case 'photographer'.'mariga-niger'.'Niger':                
                      header("location:mariga-nigerphotogra.php");                     
                        break;

                         case 'photographer'.'mokwa-niger'.'Niger':                
                      header("location:mokwa-nigerphotogra.php");                     
                        break;

                         case 'photographer'.'moshegu-niger'.'Niger':                
                      header("location:moshegu-nigerphotogra.php");                     
                        break;

                         case 'photographer'.'muya-niger'.'Niger':                
                      header("location:muya-nigerphotogra.php");                     
                        break;

                         case 'photographer'.'paiko-niger'.'Niger':                
                      header("location:paiko-nigerphotogra.php");                     
                        break;

                         case 'photographer'.'rafi-niger'.'Niger':                
                      header("location:rafi-nigerphotogra.php");                     
                        break;


                          case 'photographer'.'shiroro-niger'.'Niger':                
                      header("location:shiroro-nigerphotogra.php");                     
                        break;


                          case 'photographer'.'suleija-niger'.'Niger':                
                      header("location:suleija-nigerphotogra.php");                     
                        break;

                          case 'photographer'.'tawa-wushishi-niger'.'Niger':                
                      header("location:tawa-wushishi-nigerphotogra.php");                     
                        break;



                      
                

                        #END PHOTGRAPHER LOCATION



                        #BEGINING VEDIOGRAPHERS LOCATION
                        case 'vediographer'.'agaie-niger'.'Niger':
                      header("location:agaie-nigervediographer.php");
                        break;
                        
                        
                         case 'vediographer'.'agwara-niger'.'Niger':
                      header("location:agwara-nigervediographer.php");
                        break;
                        
                        case 'vediographer'.'bida-niger'.'Niger':
                      header("location:bida-nigervediographer.php");
                        break;
                        
                        case 'vediographer'.'borgu-niger'.'Niger':
                      header("location:borgu-nigervediographer.php");
                        break;
                        
                        case 'vediographer'.'bosso-niger'.'Niger':
                      header("location:bosso-nigervediographer.php");
                        break;
                        
                        case 'vediographer'.'chanchanga-niger'.'Niger':
                      header("location:chanchanga-nigervediographer.php");
                        break;
                        
                         case 'vediographer'.'edati-niger'.'Niger':
                      header("location:edati-nigervediographer.php");
                        break;
                        
                         case 'vediographer'.'gbako-niger'.'Niger':
                      header("location:gbako-nigervediographer.php");
                        break;

                          case 'vediographer'.'gurara-niger'.'Niger':                
                      header("location:gurara-nigervediographer.php");                   
                        break;
                        
                          case 'vediographer'.'kitcha-niger'.'Niger':                
                      header("location:kitcha-nigervediographer.php");                   
                        break;
                        
                          case 'vediographer'.'kontagora-niger'.'Niger':                
                      header("location:kontagora-nigervediographer.php");                   
                        break;

                        case 'vediographer'.'lapai-niger'.'Niger':                
                      header("location:lapai-nigervediographer.php");                   
                        break;

                        case 'vediographer'.'lavum-niger'.'Niger':                
                      header("location:lavum-nigervediographer.php");                   
                        break;

                        case 'vediographer'.'magama-niger'.'Niger':                
                      header("location:magama-nigervediographer.php");                   
                        break;

                         case 'vediographer'.'mariga-niger'.'Niger':                
                      header("location:mariga-nigervediographer.php");                   
                        break;

                          case 'vediographer'.'mokwa-niger'.'Niger':                
                      header("location:mokwa-nigervediographer.php");                   
                        break;

                          case 'vediographer'.'moshegu-niger'.'Niger':                
                      header("location:moshegu-nigervediographer.php");                   
                        break;

                          case 'vediographer'.'muya-niger'.'Niger':                
                      header("location:muya-nigervediographer.php");                   
                        break;

                          case 'vediographer'.'paiko-niger'.'Niger':                
                      header("location:paiko-nigervediographer.php");                   
                        break;

                          case 'vediographer'.'rafi-niger'.'Niger':                
                      header("location:rafi-nigervediographer.php");                   
                        break;


                          case 'vediographer'.'shiroro-niger'.'Niger':                
                      header("location:shiroro-nigervediographer.php");                   
                        break;


                          case 'vediographer'.'suleija-niger'.'Niger':                
                      header("location:suleija-nigervediographer.php");                   
                        break;

                          case 'vediographer'.'tawa-wushishi-niger'.'Niger':                
                      header("location:tawa-wushishi-nigervediographer.php");                   
                        break;


                     

                      

                

                        #END VEDIOGRAPHERS LOCATION


                        #BEGINING CATERERS LOCATION
                        case 'caterers'.'agaie-niger'.'Niger':
                      header("location:agaie-nigercaterers.php");
                        break;
                        
                         case 'caterers'.'agwara-niger'.'Niger':
                      header("location:agwara-nigercaterers.php");
                        break;
                        
                         case 'caterers'.'bida-niger'.'Niger':
                      header("location:bida-nigercaterers.php");
                        break;
                        
                          case 'caterers'.'kitcha-niger'.'Niger':
                      header("location:kitcha-nigercaterers.php");
                        break;
                        
                          case 'caterers'.'kontagora-niger'.'Niger':
                      header("location:kontagora-nigercaterers.php");
                        break;

                           case 'caterers'.'lapai-niger'.'Niger':
                      header("location:lapai-nigercaterers.php");
                        break;

                           case 'caterers'.'lavum-niger'.'Niger':
                      header("location:lavum-nigercaterers.php");
                        break;

                           case 'caterers'.'magama-niger'.'Niger':
                      header("location:magama-nigercaterers.php");
                        break;

                          case 'caterers'.'mariga-niger'.'Niger':
                      header("location:mariga-nigercaterers.php");
                        break;

                           case 'caterers'.'mokwa-niger'.'Niger':
                      header("location:mokwa-nigercaterers.php");
                        break;

                         case 'caterers'.'shiroro-niger'.'Niger':
                      header("location:shiroro-nigercaterers.php");
                        break;

                         case 'caterers'.'suleija-niger'.'Niger':
                      header("location:suleija-nigercaterers.php");
                        break;


                           case 'caterers'.'moshegu-niger'.'Niger':
                      header("location:moshegu-nigercaterers.php");
                        break;


                           case 'caterers'.'muya-niger'.'Niger':
                      header("location:muya-nigercaterers.php");
                        break;

                           case 'caterers'.'paiko-niger'.'Niger':
                      header("location:paiko-nigercaterers.php");
                        break;


                           case 'caterers'.'rafi-niger'.'Niger':
                      header("location:rafi-nigercaterers.php");
                        break;

                        
                         case 'caterers'.'borgu-niger'.'Niger':
                      header("location:borgu-nigercaterers.php");
                        break;
                        
                         case 'caterers'.'bosso-niger'.'Niger':
                      header("location:bosso-nigercaterers.php");
                        break;
                        
                         case 'caterers'.'chanchanga-niger'.'Niger':
                      header("location:chanchanga-nigercaterers.php");
                        break;
                        
                          case 'caterers'.'gbako-niger'.'Niger':
                      header("location:gbako-nigercaterers.php");
                        break;
                        
                           case 'caterers'.'edati-niger'.'Niger':
                      header("location:edati-nigercaterers.php");
                        break;

                          case 'caterers'.'gurara-niger'.'Niger':                
                      header("location:gurara-nigercaterers.php");                   
                        break;

                        case 'caterers'.'tawa-wushishi-niger'.'Niger':                
                      header("location:tawa-wushishi-nigercaterers.php");                   
                        break;



                      

                     

                        

                        #END CATERERS LOCATION


                        #BEGINING WINESELLER LOCATION
                        case 'wineseller'.'agaie-niger'.'Niger':
                      header("location:agaie-nigerwineseller.php");
                        break;
                        
                        case 'wineseller'.'agwara-niger'.'Niger':
                      header("location:agwara-nigerwineseller.php");
                        break;
                        
                         case 'wineseller'.'bida-niger'.'Niger':
                      header("location:bida-nigerwineseller.php");
                        break;
                        
                         case 'wineseller'.'borgu-niger'.'Niger':
                      header("location:borgu-nigerwineseller.php");
                        break;
                        
                         case 'wineseller'.'bosso-niger'.'Niger':
                      header("location:bosso-nigerwineseller.php");
                        break;
                        
                           case 'wineseller'.'kitcha-niger'.'Niger':
                      header("location:kitcha-nigerwineseller.php");
                        break;
                        
                           case 'wineseller'.'kontagora-niger'.'Niger':
                      header("location:kontagora-nigerwineseller.php");
                        break;

                          case 'wineseller'.'lapai-niger'.'Niger':
                      header("location:lapai-nigerwineseller.php");
                        break;

                          case 'wineseller'.'lavum-niger'.'Niger':
                      header("location:lavum-nigerwineseller.php");
                        break;

                          case 'wineseller'.'magama-niger'.'Niger':
                      header("location:magama-nigerwineseller.php");
                        break;

                         case 'wineseller'.'mariga-niger'.'Niger':
                      header("location:mariga-nigerwineseller.php");
                        break;

                        case 'wineseller'.'mokwa-niger'.'Niger':
                      header("location:mokwa-nigerwineseller.php");
                        break;


                        case 'wineseller'.'moshegu-niger'.'Niger':
                      header("location:moshegu-nigerwineseller.php");
                        break;

                        case 'wineseller'.'muya-niger'.'Niger':
                      header("location:muya-nigerwineseller.php");
                        break;

                        case 'wineseller'.'paiko-niger'.'Niger':
                      header("location:paiko-nigerwineseller.php");
                        break;

                        case 'wineseller'.'shiroro-niger'.'Niger':
                      header("location:shiroro-nigerwineseller.php");
                        break;

                         case 'wineseller'.'suleija-niger'.'Niger':
                      header("location:suleija-nigerwineseller.php");
                        break;

                         case 'wineseller'.'rafi-niger'.'Niger':
                      header("location:rafi-nigerwineseller.php");
                        break;
                        
                         case 'wineseller'.'chanchanga-niger'.'Niger':
                      header("location:chanchanga-nigerwineseller.php");
                        break;
                        
                         case 'wineseller'.'gbako-niger'.'Niger':
                      header("location:gbako-nigerwineseller.php");
                        break;
                        
                         case 'wineseller'.'edati-niger'.'Niger':
                      header("location:edati-nigerwineseller.php");
                        break;

                            case 'wineseller'.'gurara-niger'.'Niger':                
                      header("location:gurara-nigerwineseller.php");                   
                        break;

                         case 'wineseller'.'tawa-wushishi-niger'.'Niger':                
                      header("location:tawa-wushishi-nigerwineseller.php");                   
                        break;


                        

                    

                        #END WINESELLER LOCATION


                      #BEGINING OF ENTERTAINER LOCATION
                        case 'entertainer'.'agaie-niger'.'Niger':
                        header("location:agaie-nigerentertainer.php");
                        break;
                        
                        case 'entertainer'.'agwara-niger'.'Niger':
                        header("location:agwara-nigerentertainer.php");
                        break;
                        
                        case 'entertainer'.'bida-niger'.'Niger':
                        header("location:bida-nigerentertainer.php");
                        break;
                        
                        case 'entertainer'.'borgu-niger'.'Niger':
                        header("location:borgu-nigerentertainer.php");
                        break;
                        
                        case 'entertainer'.'bosso-niger'.'Niger':
                        header("location:bosso-nigerentertainer.php");
                        break;
                        
                        case 'entertainer'.'chanchanga-niger'.'Niger':
                        header("location:chanchanga-nigerentertainer.php");
                        break;
                        
                        case 'entertainer'.'kitcha-niger'.'Niger':
                        header("location:kitcha-nigerentertainer.php");
                        break;
                        
                        
                        case 'entertainer'.'kontagora-niger'.'Niger':
                        header("location:kontagora-nigerentertainer.php");
                        break;

                         case 'entertainer'.'lapai-niger'.'Niger':
                        header("location:lapai-nigerentertainer.php");
                        break;

                         case 'entertainer'.'lavum-niger'.'Niger':
                        header("location:lavum-nigerentertainer.php");
                        break;

                         case 'entertainer'.'magama-niger'.'Niger':
                        header("location:magama-nigerentertainer.php");
                        break;

                          case 'entertainer'.'mariga-niger'.'Niger':
                        header("location:mariga-nigerentertainer.php");
                        break;

                        case 'entertainer'.'mokwa-niger'.'Niger':
                        header("location:mokwa-nigerentertainer.php");
                        break;

                        case 'entertainer'.'moshegu-niger'.'Niger':
                        header("location:moshegu-nigerentertainer.php");
                        break;

                        case 'entertainer'.'muya-niger'.'Niger':
                        header("location:muya-nigerentertainer.php");
                        break;

                        case 'entertainer'.'paiko-niger'.'Niger':
                        header("location:paiko-nigerentertainer.php");
                        break;

                        case 'entertainer'.'rafi-niger'.'Niger':
                        header("location:rafi-nigerentertainer.php");
                        break;

                        case 'entertainer'.'shiroro-niger'.'Niger':
                        header("location:shiroro-nigerentertainer.php");
                        break;

                        case 'entertainer'.'suleija-niger'.'Niger':
                        header("location:suleija-nigerentertainer.php");
                        break;
                        
                        case 'entertainer'.'gbako-niger'.'Niger':
                        header("location:gbako-nigerentertainer.php");
                        break;
                        
                        case 'entertainer'.'edati-niger'.'Niger':
                        header("location:edati-nigerentertainer.php");
                        break;

                            case 'entertainer'.'gurara-niger'.'Niger':               
                      header("location:gurara-nigerentertainer.php");                    
                        break;


                          case 'entertainer'.'tawa-wushishi-niger'.'Niger':               
                      header("location:tawa-wushishi-nigerentertainer.php");                    
                        break;



                      
                        #END ENTERTAINER / MC LOCATION


                        #BEGINING MUSIC ARTIST LOCATION
                        case 'music'.'agaie-niger'.'Niger':
                      header("location:agaie-nigermusicband.php");
                        break;
                        
                        case 'music'.'agwara-niger'.'Niger':
                      header("location:agwara-nigermusicband.php");
                        break;
                        
                        case 'music'.'bida-niger'.'Niger':
                      header("location:bida-nigermusicband.php");
                        break;
                        
                        case 'music'.'borgu-niger'.'Niger':
                      header("location:borgu-nigermusicband.php");
                        break;
                        
                        case 'music'.'kitcha-niger'.'Niger':
                      header("location:kitcha-nigermusicband.php");
                        break;
                        
                        case 'music'.'kontagora-niger'.'Niger':
                      header("location:kontagora-nigermusicband.php");
                        break;

                         case 'music'.'lapai-niger'.'Niger':
                      header("location:lapai-nigermusicband.php");
                        break;

                         case 'music'.'lavum-niger'.'Niger':
                      header("location:lavum-nigermusicband.php");
                        break;

                         case 'music'.'magama-niger'.'Niger':
                      header("location:magama-nigermusicband.php");
                        break;

                         case 'music'.'mariga-niger'.'Niger':
                      header("location:mariga-nigermusicband.php");
                        break;


                         case 'music'.'mokwa-niger'.'Niger':
                      header("location:mokwa-nigermusicband.php");
                        break;

                         case 'music'.'moshegu-niger'.'Niger':
                      header("location:moshegu-nigermusicband.php");
                        break;

                         case 'music'.'muya-niger'.'Niger':
                      header("location:muya-nigermusicband.php");
                        break;

                         case 'music'.'paiko-niger'.'Niger':
                      header("location:paiko-nigermusicband.php");
                        break;

                         case 'music'.'rafi-niger'.'Niger':
                      header("location:rafi-nigermusicband.php");
                        break;

                        case 'music'.'shiroro-niger'.'Niger':
                      header("location:shiroro-nigermusicband.php");
                        break;

                        case 'music'.'suleija-niger'.'Niger':
                      header("location:suleija-nigermusicband.php");
                        break;
                        
                        
                        case 'music'.'bosso-niger'.'Niger':
                      header("location:bosso-nigermusicband.php");
                        break;
                        
                        case 'music'.'chanchanga-niger'.'Niger':
                      header("location:chanchanga-nigermusicband.php");
                        break;
                        
                          case 'music'.'gbako-niger'.'Niger':
                      header("location:gbako-nigermusicband.php");
                        break;
                        
                           case 'music'.'edati-niger'.'Niger':
                      header("location:edati-nigermusicband.php");
                        break;

                        case 'music'.'gurara-niger'.'Niger':               
                      header("location:gurara-nigermusicband.php");                    
                        break;


                         case 'music'.'tawa-wushishi-niger'.'Niger':               
                      header("location:tawa-wushishi-nigermusicband.php");                    
                        break;



                      
                        #END MUSIC ARTIST LOCATION


                      #BEGINING HALL DECORATORS LOCATION
                        case 'halldecorators'.'agaie-niger'.'Niger':
                      header("location:agaie-nigerhalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'agwara-niger'.'Niger':
                      header("location:agwara-nigerhalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'bida-niger'.'Niger':
                      header("location:bida-nigerhalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'kitcha-niger'.'Niger':
                      header("location:kitcha-nigerhalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'kontagora-niger'.'Niger':
                      header("location:kontagora-nigerhalldecorators.php");
                        break;

                        case 'halldecorators'.'magama-niger'.'Niger':
                      header("location:magama-nigerhalldecorators.php");
                        break;

                        case 'halldecorators'.'mariga-niger'.'Niger':
                      header("location:mariga-nigerhalldecorators.php");
                        break;

                        case 'halldecorators'.'mokwa-niger'.'Niger':
                      header("location:mokwa-nigerhalldecorators.php");
                        break;

                        case 'halldecorators'.'moshegu-niger'.'Niger':
                      header("location:moshegu-nigerhalldecorators.php");
                        break;

                        case 'halldecorators'.'muya-niger'.'Niger':
                      header("location:muya-nigerhalldecorators.php");
                        break;

                        case 'halldecorators'.'paiko-niger'.'Niger':
                      header("location:paiko-nigerhalldecorators.php");
                        break;

                        case 'halldecorators'.'rafi-niger'.'Niger':
                      header("location:rafi-nigerhalldecorators.php");
                        break;

                        case 'halldecorators'.'shiroro-niger'.'Niger':
                      header("location:shiroro-nigerhalldecorators.php");
                        break;

                        case 'halldecorators'.'suleija-niger'.'Niger':
                      header("location:suleija-nigerhalldecorators.php");
                        break;

                        case 'halldecorators'.'lapai-niger'.'Niger':
                      header("location:lapai-nigerhalldecorators.php");
                        break;

                        case 'halldecorators'.'lavum-niger'.'Niger':
                      header("location:lavum-nigerhalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'borgu-niger3'.'Niger':
                      header("location:borgu-nigerhalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'bosso-niger'.'Niger':
                      header("location:bosso-nigerhalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'chanchanga-niger'.'Niger':
                      header("location:chanchanga-nigerhalldecorators.php");
                        break;
                        
                         case 'halldecorators'.'gbako-niger'.'Niger':
                      header("location:gbako-nigerhalldecorators.php");
                        break;
                        
                          case 'halldecorators'.'edati-niger'.'Niger':
                      header("location:edati-nigerhalldecorators.php");
                        break;

                          case 'halldecorators'.'gurara-niger'.'Niger':                
                      header("location:gurara-nigerhalldecorators.php");                   
                        break;

                          case 'halldecorators'.'tawa-wushishi-niger'.'Niger':                
                      header("location:tawa-wushishi-nigerhalldecorators.php");                   
                        break;



                    

                        #END HALL DECORATORS LOCATION


                        #BEGINING Djs LOCATION
                        case 'dj'.'agaie-niger'.'Niger':
                      header("location:agaie-nigerdj.php");
                        break;
                        
                         case 'dj'.'agwara-niger'.'Niger':
                      header("location:agwara-nigerdj.php");
                        break;
                        
                        case 'dj'.'bida-niger'.'Niger':
                      header("location:bida-nigerdj.php");
                        break;
                        
                        case 'dj'.'borgu-niger'.'Niger':
                      header("location:borgu-nigerdj.php");
                        break;
                        
                        case 'dj'.'kitcha-niger'.'Niger':
                      header("location:kitcha-nigerdj.php");
                        break;
                        
                        case 'dj'.'kontagora-niger'.'Niger':
                      header("location:kontagora-nigerdj.php");
                        break;

                         case 'dj'.'lapai-niger'.'Niger':
                      header("location:lapai-nigerdj.php");
                        break;

                         case 'dj'.'lavum-niger'.'Niger':
                      header("location:lavum-nigerdj.php");
                        break;

                         case 'dj'.'magama-niger'.'Niger':
                      header("location:magama-nigerdj.php");
                        break;

                        case 'dj'.'mariga-niger'.'Niger':
                      header("location:mariga-nigerdj.php");
                        break;

                        case 'dj'.'mokwa-niger'.'Niger':
                      header("location:mokwa-nigerdj.php");
                        break;

                        case 'dj'.'moshegu-niger'.'Niger':
                      header("location:moshegu-nigerdj.php");
                        break;

                        case 'dj'.'muya-niger'.'Niger':
                      header("location:muya-nigerdj.php");
                        break;

                        case 'dj'.'paiko-niger'.'Niger':
                      header("location:paiko-nigerdj.php");
                        break;

                        case 'dj'.'rafi-niger'.'Niger':
                      header("location:rafi-nigerdj.php");
                        break;

                        case 'dj'.'shiroro-niger'.'Niger':
                      header("location:shiroro-nigerdj.php");
                        break;


                        case 'dj'.'suleija-niger'.'Niger':
                      header("location:suleija-nigerdj.php");
                        break;
                        
                        case 'dj'.'bosso-niger'.'Niger':
                      header("location:bosso-nigerdj.php");
                        break;
                        
                        case 'dj'.'chanchanga-niger'.'Niger':
                      header("location:chanchanga-nigerdj.php");
                        break;
                        
                        case 'dj'.'gbako-niger'.'Niger':
                      header("location:gbako-nigerdj.php");
                        break;
                        
                        case 'dj'.'edati-niger'.'Niger':
                      header("location:edati-nigerdj.php");
                        break;

                            case 'dj'.'gurara-niger'.'Niger':                
                      header("location:gurara-nigerdj.php");                   
                        break;

                         case 'dj'.'tawa-wushishi-niger'.'Niger':                
                      header("location:tawa-wushishi-nigerdj.php");                   
                        break;


                      
                        #END Djs LOCATION
                      

                        #BEGINING MARKUP LOCATION
                        case 'markup'.'agaie-niger'.'Niger':
                      header("location:agaie-nigermarkup.php");
                        break;
                        
                         case 'markup'.'agwara-niger'.'Niger':
                      header("location:agwara-nigermarkup.php");
                        break;
                        
                        case 'markup'.'kitcha-niger'.'Niger':
                      header("location:kitcha-nigermarkup.php");
                        break;
                        
                        case 'markup'.'kontagora-niger'.'Niger':
                      header("location:kontagora-nigermarkup.php");
                        break;

                        case 'markup'.'lapai-niger'.'Niger':
                      header("location:lapai-nigermarkup.php");
                        break;

                        case 'markup'.'lavum-niger'.'Niger':
                      header("location:lavum-nigermarkup.php");
                        break;

                        case 'markup'.'magama-niger'.'Niger':
                      header("location:magama-nigermarkup.php");
                        break;

                        case 'markup'.'mariga-niger'.'Niger':
                      header("location:mariga-nigermarkup.php");
                        break;

                        case 'markup'.'mokwa-niger'.'Niger':
                      header("location:mokwa-nigermarkup.php");
                        break;


                        case 'markup'.'moshegu-niger'.'Niger':
                      header("location:moshegu-nigermarkup.php");
                        break;


                        case 'markup'.'muya-niger'.'Niger':
                      header("location:muya-nigermarkup.php");
                        break;


                        case 'markup'.'paiko-niger'.'Niger':
                      header("location:paiko-nigermarkup.php");
                        break;


                        case 'markup'.'rafi-niger'.'Niger':
                      header("location:rafi-nigermarkup.php");
                        break;

                        case 'markup'.'shiroro-niger'.'Niger':
                      header("location:shiroro-nigermarkup.php");
                        break;

                        case 'markup'.'suleija-niger'.'Niger':
                      header("location:suleija-nigermarkup.php");
                        break;

                        
                          case 'markup'.'bida-niger'.'Niger':
                      header("location:bida-nigermarkup.php");
                        break;
                        
                          case 'markup'.'borgu-niger'.'Niger':
                      header("location:borgu-nigermarkup.php");
                        break;
                        
                          case 'markup'.'bosso-niger'.'Niger':
                      header("location:bosso-nigermarkup.php");
                        break;
                        
                          case 'markup'.'chanchanga-niger'.'Niger':
                      header("location:chanchanga-nigermarkup.php");
                        break;
                        
                        
                        case 'markup'.'gbako-niger'.'Niger':
                      header("location:gbako-nigermarkup.php");
                        break;
                        
                        case 'markup'.'edati-niger'.'Niger':
                      header("location:edati-nigermarkup.php");
                        break;


                        case 'markup'.'gurara-niger'.'Niger':                
                      header("location:gurara-nigermarkup.php");                   
                        break;


                        case 'markup'.'tawa-wushishi-niger'.'Niger':                
                      header("location:tawa-wushishi-nigermarkup.php");                   
                        break;
                        #END MARKUP LOCATION

                      #Niger STATE ENDING






                                              #Jigawa STATE BEGINING

                         case 'photographer'.'auyo-jigawa'.'Jigawa':
                      header("location:auyo-jigawaphotogra.php");
                        break;
                        
                        
                        case 'photographer'.'babura-jigawa'.'Jigawa':
                      header("location:babura-jigawaphotogra.php");
                        break;
                        
                         case 'photographer'.'birnin-kudu-jigawa'.'Jigawa':
                      header("location:birnin-kudu-jigawaphotogra.php");
                        break;

                        case 'photographer'.'birniwa-jigawa'.'Jigawa':                
                      header("location:birniwa-jigawaphotogra.php");                     
                        break;
                        
                          case 'photographer'.'buji-jigawa'.'Jigawa':                
                      header("location:buji-jigawaphotogra.php");                     
                        break;
                        
                          case 'photographer'.'dute-jigawa'.'Jigawa':                
                      header("location:dute-jigawaphotogra.php");                     
                        break;
                        
                          case 'photographer'.'garki-jigawa'.'Jigawa':                
                      header("location:garki-jigawaphotogra.php");                     
                        break;
                        
                          case 'photographer'.'gagarawa-jigawa'.'Jigawa':                
                      header("location:gagarawa-jigawaphotogra.php");                     
                        break;
                        
                        case 'photographer'.'gumel-jigawa'.'Jigawa':                
                      header("location:gumel-jigawaphotogra.php");                     
                        break;
                        
                          case 'photographer'.'guri-jigawa'.'Jigawa':                
                      header("location:guri-jigawaphotogra.php");                     
                        break;

                          case 'photographer'.'gwaram-jigawa'.'Jigawa':                
                      header("location:gwaram-jigawaphotogra.php");                     
                        break;
                          case 'photographer'.'gwiwa-jigawa'.'Jigawa':                
                      header("location:gwiwa-jigawaphotogra.php");                     
                        break;

                          case 'photographer'.'hadeji-jigawa'.'Jigawa':                
                      header("location:hadeji-jigawaphotogra.php");                     
                        break;

                          case 'photographer'.'jahun-jigawa'.'Jigawa':                
                      header("location:jahun-jigawaphotogra.php");                     
                        break;

                          case 'photographer'.'kafin-hausa-jigawa'.'Jigawa':                
                      header("location:kafin-hausa-jigawaphotogra.php");                     
                        break;

                         case 'photographer'.'kaugama-jigawa'.'Jigawa':                
                      header("location:kaugama-jigawaphotogra.php");                     
                        break;

                         case 'photographer'.'kazaure-jigawa'.'Jigawa':                
                      header("location:kazaure-jigawaphotogra.php");                     
                        break;

                         case 'photographer'.'birnin-magaji-jigawa'.'Jigawa':                
                      header("location:birnin-magaji-jigawaphotogra.php");                     
                        break;

                         case 'photographer'.'kirikisamma-jigawa'.'Jigawa':                
                      header("location:kirikisamma-jigawaphotogra.php");                     
                        break;

                         case 'photographer'.'maigatari-jigawa'.'Jigawa':                
                      header("location:maigatari-jigawaphotogra.php");                     
                        break;

                         case 'photographer'.'malamaduri-jigawa'.'Jigawa':                
                      header("location:malamaduri-jigawaphotogra.php");                     
                        break;

                         case 'photographer'.'ringim-jigawa'.'Jigawa':                
                      header("location:ringim-jigawaphotogra.php");                     
                        break;

                         case 'photographer'.'roni-jigawa'.'Jigawa':                
                      header("location:roni-jigawaphotogra.php");                     
                        break;

                         case 'photographer'.'sule-tankarka-jigawa'.'Jigawa':                
                      header("location:sule-tankarka-jigawaphotogra.php");                     
                        break;

                        case 'photographer'.'taura-jigawa'.'Jigawa':                
                      header("location:taura-jigawaphotogra.php");                     
                        break;

                        case 'photographer'.'yankwasi-jigawa'.'Jigawa':                
                      header("location:yankwasi-jigawaphotogra.php");                     
                        break;




                        #END PHOTGRAPHER LOCATION



                        #BEGINING VEDIOGRAPHERS LOCATION
                        case 'vediographer'.'auyo-jigawa'.'Jigawa':
                      header("location:auyo-jigawavediographer.php");
                        break;
                        
                        
                         case 'vediographer'.'Jigawa'.'Jigawa':
                      header("location:Jigawavediographer.php");
                        break;
                        
                        case 'vediographer'.'babura-jigawa'.'Jigawa':
                      header("location:babura-jigawavediographer.php");
                        break;
                        
                        case 'vediographer'.'birnin-kudu-jigawa'.'Jigawa':
                      header("location:birnin-kudu-jigawavediographer.php");
                        break;
                        
                        case 'vediographer'.'birniwa-jigawa'.'Jigawa':
                      header("location:birniwa-jigawavediographer.php");
                        break;
                        
                        case 'vediographer'.'buji-jigawa'.'Jigawa':
                      header("location:buji-jigawavediographer.php");
                        break;
                        
                         case 'vediographer'.'dute-jigawa'.'Jigawa':
                      header("location:dute-jigawavediographer.php");
                        break;
                        
                         case 'vediographer'.'garki-jigawa'.'Jigawa':
                      header("location:garki-jigawavediographer.php");
                        break;

                          case 'vediographer'.'gagarawa-jigawa'.'Jigawa':                
                      header("location:gagarawa-jigawavediographer.php");                   
                        break;
                        
                          case 'vediographer'.'gumel-jigawa'.'Jigawa':                
                      header("location:gumel-jigawavediographer.php");                   
                        break;
                        
                          case 'vediographer'.'guri-jigawa'.'Jigawa':                
                      header("location:guri-jigawavediographer.php");                   
                        break;

                          case 'vediographer'.'gwaram-jigawa'.'Jigawa':                
                      header("location:gwaram-jigawavediographer.php");                   
                        break;

                          case 'vediographer'.'gwiwa-jigawa'.'Jigawa':                
                      header("location:gwiwa-jigawavediographer.php");                   
                        break;

                          case 'vediographer'.'hadeji-jigawa'.'Jigawa':                
                      header("location:hadeji-jigawavediographer.php");                   
                        break;

                          case 'vediographer'.'jahun-jigawa'.'Jigawa':                
                      header("location:jahun-jigawavediographer.php");                   
                        break;

                          case 'vediographer'.'kafin-hausa-jigawa'.'Jigawa':                
                      header("location:kafin-hausa-jigawavediographer.php");                   
                        break;

                         case 'vediographer'.'kaugama-jigawa'.'Jigawa':                
                      header("location:kaugama-jigawavediographer.php");                   
                        break;

                         case 'vediographer'.'kazaure-jigawa'.'Jigawa':                
                      header("location:kazaure-jigawavediographer.php");                   
                        break;

                         case 'vediographer'.'birnin-magaji-jigawa'.'Jigawa':                
                      header("location:birnin-magaji-jigawavediographer.php");                   
                        break;

                         case 'vediographer'.'kirikisamma-jigawa'.'Jigawa':                
                      header("location:kirikisamma-jigawavediographer.php");                   
                        break;

                         case 'vediographer'.'maigatari-jigawa'.'Jigawa':                
                      header("location:maigatari-jigawavediographer.php");                   
                        break;

                         case 'vediographer'.'malamaduri-jigawa'.'Jigawa':                
                      header("location:malamaduri-jigawavediographer.php");                   
                        break;

                         case 'vediographer'.'ringim-jigawa'.'Jigawa':                
                      header("location:ringim-jigawavediographer.php");                   
                        break;

                         case 'vediographer'.'roni-jigawa'.'Jigawa':                
                      header("location:roni-jigawavediographer.php");                   
                        break;

                         case 'vediographer'.'sule-tankarka-jigawa'.'Jigawa':                
                      header("location:sule-tankarka-jigawavediographer.php");                   
                        break;

                        case 'vediographer'.'taura-jigawa'.'Jigawa':                
                      header("location:taura-jigawavediographer.php");                   
                        break;

                        case 'vediographer'.'yankwasi-jigawa'.'Jigawa':                
                      header("location:yankwasi-jigawavediographer.php");                   
                        break;

                     

                

                        #END VEDIOGRAPHERS LOCATION


                        #BEGINING CATERERS LOCATION
                        case 'caterers'.'auyo-jigawa'.'Jigawa':
                      header("location:auyo-jigawacaterers.php");
                        break;
                        
                         case 'caterers'.'Jigawa'.'Jigawa':
                      header("location:Jigawacaterers.php");
                        break;
                        
                         case 'caterers'.'babura-jigawa'.'Jigawa':
                      header("location:babura-jigawacaterers.php");
                        break;
                        
                          case 'caterers'.'gumel-jigawa'.'Jigawa':
                      header("location:gumel-jigawacaterers.php");
                        break;
                        
                          case 'caterers'.'guri-jigawa'.'Jigawa':
                      header("location:guri-jigawacaterers.php");
                        break;

                        case 'caterers'.'gwaram-jigawa'.'Jigawa':
                      header("location:gwaram-jigawacaterers.php");
                        break;

                        case 'caterers'.'gwiwa-jigawa'.'Jigawa':
                      header("location:gwiwa-jigawacaterers.php");
                        break;

                        case 'caterers'.'hadeji-jigawa'.'Jigawa':
                      header("location:hadeji-jigawacaterers.php");
                        break;

                        case 'caterers'.'jahun-jigawa'.'Jigawa':
                      header("location:jahun-jigawacaterers.php");
                        break;

                        case 'caterers'.'kafin-hausa-jigawa'.'Jigawa':
                      header("location:kafin-hausa-jigawacaterers.php");
                        break;

                        case 'caterers'.'kaugama-jigawa'.'Jigawa':
                      header("location:kaugama-jigawacaterers.php");
                        break;

                        case 'caterers'.'kazaure-jigawa'.'Jigawa':
                      header("location:kazaure-jigawacaterers.php");
                        break;

                        case 'caterers'.'birnin-magaji-jigawa'.'Jigawa':
                      header("location:birnin-magaji-jigawacaterers.php");
                        break;

                        case 'caterers'.'kirikisamma-jigawa'.'Jigawa':
                      header("location:kirikisamma-jigawacaterers.php");
                        break;

                        case 'caterers'.'maigatari-jigawa'.'Jigawa':
                      header("location:maigatari-jigawacaterers.php");
                        break;

                        case 'caterers'.'malamaduri-jigawa'.'Jigawa':
                      header("location:malamaduri-jigawacaterers.php");
                        break;

                        case 'caterers'.'ringim-jigawa'.'Jigawa':
                      header("location:ringim-jigawacaterers.php");
                        break;

                        case 'caterers'.'roni-jigawa'.'Jigawa':
                      header("location:roni-jigawacaterers.php");
                        break;

                        case 'caterers'.'sule-tankarka-jigawa'.'Jigawa':
                      header("location:sule-tankarka-jigawacaterers.php");
                        break;

                        case 'caterers'.'taura-jigawa'.'Jigawa':
                      header("location:taura-jigawacaterers.php");
                        break;


                        case 'caterers'.'yankwasi-jigawa'.'Jigawa':
                      header("location:yankwasi-jigawacaterers.php");
                        break;

                        
                         case 'caterers'.'birnin-kudu-jigawa'.'Jigawa':
                      header("location:birnin-kudu-jigawacaterers.php");
                        break;
                        
                         case 'caterers'.'birniwa-jigawa'.'Jigawa':
                      header("location:birniwa-jigawacaterers.php");
                        break;
                        
                         case 'caterers'.'buji-jigawa'.'Jigawa':
                      header("location:buji-jigawacaterers.php");
                        break;
                        
                          case 'caterers'.'garki-jigawa'.'Jigawa':
                      header("location:garki-jigawacaterers.php");
                        break;
                        
                           case 'caterers'.'dute-jigawa'.'Jigawa':
                      header("location:dute-jigawacaterers.php");
                        break;

                          case 'caterers'.'gagarawa-jigawa'.'Jigawa':                
                      header("location:gagarawa-jigawacaterers.php");                   
                        break;

                        case 'caterers'.'oye-Jigawa'.'Jigawa':
                      header("location:oye-Jigawacaterers.php");                   
                       break;

                        

                        #END CATERERS LOCATION


                        #BEGINING WINESELLER LOCATION
                        case 'wineseller'.'auyo-jigawa'.'Jigawa':
                      header("location:auyo-jigawawineseller.php");
                        break;
                        
                        case 'wineseller'.'Jigawa'.'Jigawa':
                      header("location:Jigawawineseller.php");
                        break;
                        
                         case 'wineseller'.'babura-jigawa'.'Jigawa':
                      header("location:babura-jigawawineseller.php");
                        break;
                        
                         case 'wineseller'.'birnin-kudu-jigawa'.'Jigawa':
                      header("location:birnin-kudu-jigawawineseller.php");
                        break;
                        
                         case 'wineseller'.'birniwa-jigawa'.'Jigawa':
                      header("location:birniwa-jigawawineseller.php");
                        break;
                        
                           case 'wineseller'.'gumel-jigawa'.'Jigawa':
                      header("location:gumel-jigawawineseller.php");
                        break;
                        
                           case 'wineseller'.'guri-jigawa'.'Jigawa':
                      header("location:guri-jigawawineseller.php");
                        break;

                          case 'wineseller'.'gwaram-jigawa'.'Jigawa':
                      header("location:gwaram-jigawawineseller.php");
                        break;

                          case 'wineseller'.'gwiwa-jigawa'.'Jigawa':
                      header("location:gwiwa-jigawawineseller.php");
                        break;

                          case 'wineseller'.'hadeji-jigawa'.'Jigawa':
                      header("location:hadeji-jigawawineseller.php");
                        break;

                          case 'wineseller'.'jahun-jigawa'.'Jigawa':
                      header("location:jahun-jigawawineseller.php");
                        break;

                          case 'wineseller'.'kafin-hausa-jigawa'.'Jigawa':
                      header("location:kafin-hausa-jigawawineseller.php");
                        break;

                        case 'wineseller'.'kaugama-jigawa'.'Jigawa':
                      header("location:kaugama-jigawawineseller.php");
                        break;

                        case 'wineseller'.'kazaure-jigawa'.'Jigawa':
                      header("location:kazaure-jigawawineseller.php");
                        break;

                        case 'wineseller'.'birnin-magaji-jigawa'.'Jigawa':
                      header("location:birnin-magaji-jigawawineseller.php");
                        break;

                         case 'wineseller'.'kirikisamma-jigawa'.'Jigawa':
                      header("location:kirikisamma-jigawawineseller.php");
                        break;

                         case 'wineseller'.'maigatari-jigawa'.'Jigawa':
                      header("location:maigatari-jigawawineseller.php");
                        break;

                        case 'wineseller'.'malamaduri-jigawa'.'Jigawa':
                      header("location:malamaduri-jigawawineseller.php");
                        break;

                        case 'wineseller'.'ringim-jigawa'.'Jigawa':
                      header("location:ringim-jigawawineseller.php");
                        break;

                        case 'wineseller'.'roni-jigawa'.'Jigawa':
                      header("location:roni-jigawawineseller.php");
                        break;

                        case 'wineseller'.'sule-tankarka-jigawa'.'Jigawa':
                      header("location:sule-tankarka-jigawawineseller.php");
                        break;

                        case 'wineseller'.'taura-jigawa'.'Jigawa':
                      header("location:taura-jigawawineseller.php");
                        break;


                        case 'wineseller'.'yankwasi-jigawa'.'Jigawa':
                      header("location:yankwasi-jigawawineseller.php");
                        break;

                        
                         case 'wineseller'.'buji-jigawa'.'Jigawa':
                      header("location:buji-jigawawineseller.php");
                        break;
                        
                         case 'wineseller'.'garki-jigawa'.'Jigawa':
                      header("location:garki-jigawawineseller.php");
                        break;
                        
                         case 'wineseller'.'dute-jigawa'.'Jigawa':
                      header("location:dute-jigawawineseller.php");
                        break;

                            case 'wineseller'.'gagarawa-jigawa'.'Jigawa':                
                      header("location:gagarawa-jigawawineseller.php");                   
                        break;

                       

                     

                        #END WINESELLER LOCATION


                      #BEGINING OF ENTERTAINER LOCATION
                        case 'entertainer'.'auyo-jigawa'.'Jigawa':
                        header("location:auyo-jigawaentertainer.php");
                        break;
                        
                        case 'entertainer'.'Jigawa'.'Jigawa':
                        header("location:Jigawaentertainer.php");
                        break;
                        
                        case 'entertainer'.'babura-jigawa'.'Jigawa':
                        header("location:babura-jigawaentertainer.php");
                        break;
                        
                        case 'entertainer'.'birnin-kudu-jigawa'.'Jigawa':
                        header("location:birnin-kudu-jigawaentertainer.php");
                        break;
                        
                        case 'entertainer'.'birniwa-jigawa'.'Jigawa':
                        header("location:birniwa-jigawaentertainer.php");
                        break;
                        
                        case 'entertainer'.'buji-jigawa'.'Jigawa':
                        header("location:buji-jigawaentertainer.php");
                        break;
                        
                        case 'entertainer'.'gumel-jigawa'.'Jigawa':
                        header("location:gumel-jigawaentertainer.php");
                        break;
                        
                        
                        case 'entertainer'.'guri-jigawa'.'Jigawa':
                        header("location:guri-jigawaentertainer.php");
                        break;

                        case 'entertainer'.'gwaram-jigawa'.'Jigawa':
                        header("location:gwaram-jigawaentertainer.php");
                        break;

                        case 'entertainer'.'gwiwa-jigawa'.'Jigawa':
                        header("location:gwiwa-jigawaentertainer.php");
                        break;

                        case 'entertainer'.'hadeji-jigawa'.'Jigawa':
                        header("location:hadeji-jigawaentertainer.php");
                        break;

                        case 'entertainer'.'jahun-jigawa'.'Jigawa':
                        header("location:jahun-jigawaentertainer.php");
                        break;

                        case 'entertainer'.'kafin-hausa-jigawa'.'Jigawa':
                        header("location:kafin-hausa-jigawaentertainer.php");
                        break;
                        

                        case 'entertainer'.'kaugama-jigawa'.'Jigawa':
                        header("location:kaugama-jigawaentertainer.php");
                        break;

                        case 'entertainer'.'kazaure-jigawa'.'Jigawa':
                        header("location:kazaure-jigawaentertainer.php");
                        break;

                        case 'entertainer'.'birnin-magaji-jigawa'.'Jigawa':
                        header("location:birnin-magaji-jigawaentertainer.php");
                        break;

                        case 'entertainer'.'kirikisamma-jigawa'.'Jigawa':
                        header("location:kirikisamma-jigawaentertainer.php");
                        break;

                        case 'entertainer'.'maigatari-jigawa'.'Jigawa':
                        header("location:maigatari-jigawaentertainer.php");
                        break;

                        case 'entertainer'.'malamaduri-jigawa'.'Jigawa':
                        header("location:malamaduri-jigawaentertainer.php");
                        break;

                        case 'entertainer'.'ringim-jigawa'.'Jigawa':
                        header("location:ringim-jigawaentertainer.php");
                        break;

                        case 'entertainer'.'roni-jigawa'.'Jigawa':
                        header("location:roni-jigawaentertainer.php");
                        break;

                        case 'entertainer'.'sule-tankarka-jigawa'.'Jigawa':
                        header("location:sule-tankarka-jigawaentertainer.php");
                        break;

                        case 'entertainer'.'taura-jigawa'.'Jigawa':
                        header("location:taura-jigawaentertainer.php");
                        break;

                        case 'entertainer'.'yankwasi-jigawa'.'Jigawa':
                        header("location:yankwasi-jigawaentertainer.php");
                        break;



                        case 'entertainer'.'garki-jigawa'.'Jigawa':
                        header("location:garki-jigawaentertainer.php");
                        break;
                        
                        case 'entertainer'.'dute-jigawa'.'Jigawa':
                        header("location:dute-jigawaentertainer.php");
                        break;

                            case 'entertainer'.'gagarawa-jigawa'.'Jigawa':               
                      header("location:gagarawa-jigawaentertainer.php");                    
                        break;


                    
                        #END ENTERTAINER / MC LOCATION


                        #BEGINING MUSIC ARTIST LOCATION
                        case 'music'.'auyo-jigawa'.'Jigawa':
                      header("location:auyo-jigawamusicband.php");
                        break;
                        
                        case 'music'.'Jigawa'.'Jigawa':
                      header("location:Jigawamusicband.php");
                        break;
                        
                        case 'music'.'babura-jigawa'.'Jigawa':
                      header("location:babura-jigawamusicband.php");
                        break;
                        
                        case 'music'.'birnin-kudu-jigawa'.'Jigawa':
                      header("location:birnin-kudu-jigawamusicband.php");
                        break;
                        
                        case 'music'.'gumel-jigawa'.'Jigawa':
                      header("location:gumel-jigawamusicband.php");
                        break;
                        
                        case 'music'.'guri-jigawa'.'Jigawa':
                      header("location:guri-jigawamusicband.php");
                        break;

                         case 'music'.'gwaram-jigawa'.'Jigawa':
                      header("location:gwaram-jigawamusicband.php");
                        break;

                         case 'music'.'gwiwa-jigawa'.'Jigawa':
                      header("location:gwiwa-jigawamusicband.php");
                        break;

                         case 'music'.'hadeji-jigawa'.'Jigawa':
                      header("location:hadeji-jigawamusicband.php");
                        break;

                         case 'music'.'jahun-jigawa'.'Jigawa':
                      header("location:jahun-jigawamusicband.php");
                        break;

                         case 'music'.'kafin-hausa-jigawa'.'Jigawa':
                      header("location:kafin-hausa-jigawamusicband.php");
                        break;

                        case 'music'.'kaugama-jigawa'.'Jigawa':
                      header("location:kaugama-jigawamusicband.php");
                        break;

                        case 'music'.'kazaure-jigawa'.'Jigawa':
                      header("location:kazaure-jigawamusicband.php");
                        break;

                        case 'music'.'birnin-magaji-jigawa'.'Jigawa':
                      header("location:birnin-magaji-jigawamusicband.php");
                        break;

                         case 'music'.'kirikisamma-jigawa'.'Jigawa':
                      header("location:kirikisamma-jigawamusicband.php");
                        break;

                         case 'music'.'maigatari-jigawa'.'Jigawa':
                      header("location:maigatari-jigawamusicband.php");
                        break;
                        

                         case 'music'.'malamaduri-jigawa'.'Jigawa':
                      header("location:malamaduri-jigawamusicband.php");
                        break;

                         case 'music'.'ringim-jigawa'.'Jigawa':
                      header("location:ringim-jigawamusicband.php");
                        break;

                         case 'music'.'roni-jigawa'.'Jigawa':
                      header("location:roni-jigawamusicband.php");
                        break;

                         case 'music'.'sule-tankarka-jigawa'.'Jigawa':
                      header("location:sule-tankarka-jigawamusicband.php");
                        break;

                        case 'music'.'taura-jigawa'.'Jigawa':
                      header("location:taura-jigawamusicband.php");
                        break;


                        case 'music'.'yankwasi-jigawa'.'Jigawa':
                      header("location:yankwasi-jigawamusicband.php");
                        break;

                        
                        case 'music'.'birniwa-jigawa'.'Jigawa':
                      header("location:birniwa-jigawamusicband.php");
                        break;
                        
                        case 'music'.'buji-jigawa'.'Jigawa':
                      header("location:buji-jigawamusicband.php");
                        break;
                        
                          case 'music'.'garki-jigawa'.'Jigawa':
                      header("location:garki-jigawamusicband.php");
                        break;
                        
                           case 'music'.'dute-jigawa'.'Jigawa':
                      header("location:dute-jigawamusicband.php");
                        break;

                        case 'music'.'gagarawa-jigawa'.'Jigawa':               
                      header("location:gagarawa-jigawamusicband.php");                    
                        break;

                       

                      
                        #END MUSIC ARTIST LOCATION


                      #BEGINING HALL DECORATORS LOCATION
                        case 'halldecorators'.'auyo-jigawa'.'Jigawa':
                      header("location:auyo-jigawahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'Jigawa'.'Jigawa':
                      header("location:Jigawahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'babura-jigawa'.'Jigawa':
                      header("location:babura-jigawahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'gumel-jigawa'.'Jigawa':
                      header("location:gumel-jigawahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'guri-jigawa'.'Jigawa':
                      header("location:guri-jigawahalldecorators.php");
                        break;

                        case 'halldecorators'.'gwaram-jigawa'.'Jigawa':
                      header("location:gwaram-jigawahalldecorators.php");
                        break;

                         case 'halldecorators'.'gwiwa-jigawa'.'Jigawa':
                      header("location:gwiwa-jigawahalldecorators.php");
                        break;

                         case 'halldecorators'.'hadeji-jigawa'.'Jigawa':
                      header("location:hadeji-jigawahalldecorators.php");
                        break;

                         case 'halldecorators'.'jahun-jigawa'.'Jigawa':
                      header("location:jahun-jigawahalldecorators.php");
                        break;

                         case 'halldecorators'.'kafin-hausa-jigawa'.'Jigawa':
                      header("location:kafin-hausa-jigawahalldecorators.php");
                        break;

                         case 'halldecorators'.'kaugama-jigawa'.'Jigawa':
                      header("location:kaugama-jigawahalldecorators.php");
                        break;

                         case 'halldecorators'.'kazaure-jigawa'.'Jigawa':
                      header("location:kazaure-jigawahalldecorators.php");
                        break;

                         case 'halldecorators'.'birnin-magaji-jigawa'.'Jigawa':
                      header("location:birnin-magaji-jigawahalldecorators.php");
                        break;

                        case 'halldecorators'.'kirikisamma-jigawa'.'Jigawa':
                      header("location:kirikisamma-jigawahalldecorators.php");
                        break;

                        case 'halldecorators'.'maigatari-jigawa'.'Jigawa':
                      header("location:maigatari-jigawahalldecorators.php");
                        break;

                        case 'halldecorators'.'malamaduri-jigawa'.'Jigawa':
                      header("location:malamaduri-jigawahalldecorators.php");
                        break;

                        case 'halldecorators'.'ringim-jigawa'.'Jigawa':
                      header("location:ringim-jigawahalldecorators.php");
                        break;

                        case 'halldecorators'.'roni-jigawa'.'Jigawa':
                      header("location:roni-jigawahalldecorators.php");
                        break;

                        case 'halldecorators'.'sule-tankarka-jigawa'.'Jigawa':
                      header("location:sule-tankarka-jigawahalldecorators.php");
                        break;

                        case 'halldecorators'.'taura-jigawa'.'Jigawa':
                      header("location:taura-jigawahalldecorators.php");
                        break;


                        case 'halldecorators'.'yankwasi-jigawa'.'Jigawa':
                      header("location:yankwasi-jigawahalldecorators.php");
                        break;

                        
                        case 'halldecorators'.'birnin-kudu-jigawa'.'Jigawa':
                      header("location:birnin-kudu-jigawahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'birniwa-jigawa'.'Jigawa':
                      header("location:birniwa-jigawahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'buji-jigawa'.'Jigawa':
                      header("location:buji-jigawahalldecorators.php");
                        break;
                        
                         case 'halldecorators'.'garki-jigawa'.'Jigawa':
                      header("location:garki-jigawahalldecorators.php");
                        break;
                        
                          case 'halldecorators'.'dute-jigawa'.'Jigawa':
                      header("location:dute-jigawahalldecorators.php");
                        break;

                          case 'halldecorators'.'gagarawa-jigawa'.'Jigawa':                
                      header("location:gagarawa-jigawahalldecorators.php");                   
                        break;


                        #END HALL DECORATORS LOCATION


                        #BEGINING Djs LOCATION
                        case 'dj'.'auyo-jigawa'.'Jigawa':
                      header("location:auyo-jigawadj.php");
                        break;
                        
                         case 'dj'.'Jigawa'.'Jigawa':
                      header("location:Jigawadj.php");
                        break;
                        
                        case 'dj'.'babura-jigawa'.'Jigawa':
                      header("location:babura-jigawadj.php");
                        break;
                        
                        case 'dj'.'birnin-kudu-jigawa'.'Jigawa':
                      header("location:birnin-kudu-jigawadj.php");
                        break;
                        
                        case 'dj'.'gumel-jigawa'.'Jigawa':
                      header("location:gumel-jigawadj.php");
                        break;
                        
                        case 'dj'.'guri-jigawa'.'Jigawa':
                      header("location:guri-jigawadj.php");
                        break;

                        case 'dj'.'gwaram-jigawa'.'Jigawa':
                      header("location:gwaram-jigawadj.php");
                        break;

                        case 'dj'.'gwiwa-jigawa'.'Jigawa':
                      header("location:gwiwa-jigawadj.php");
                        break;

                        case 'dj'.'hadeji-jigawa'.'Jigawa':
                      header("location:hadeji-jigawadj.php");
                        break;

                        case 'dj'.'jahun-jigawa'.'Jigawa':
                      header("location:jahun-jigawadj.php");
                        break;

                        case 'dj'.'kafin-hausa-jigawa'.'Jigawa':
                      header("location:kafin-hausa-jigawadj.php");
                        break;

                        case 'dj'.'kaugama-jigawa'.'Jigawa':
                      header("location:kaugama-jigawadj.php");
                        break;

                        case 'dj'.'kazaure-jigawa'.'Jigawa':
                      header("location:kazaure-jigawadj.php");
                        break;

                        case 'dj'.'birnin-magaji-jigawa'.'Jigawa':
                      header("location:birnin-magaji-jigawadj.php");
                        break;

                        case 'dj'.'kirikisamma-jigawa'.'Jigawa':
                      header("location:kirikisamma-jigawadj.php");
                        break;

                        case 'dj'.'maigatari-jigawa'.'Jigawa':
                      header("location:maigatari-jigawadj.php");
                        break;

                           case 'dj'.'malamaduri-jigawa'.'Jigawa':
                      header("location:malamaduri-jigawadj.php");
                        break;

                           case 'dj'.'ringim-jigawa'.'Jigawa':
                      header("location:ringim-jigawadj.php");
                        break;

                           case 'dj'.'roni-jigawa'.'Jigawa':
                      header("location:roni-jigawadj.php");
                        break;

                           case 'dj'.'sule-tankarka-jigawa'.'Jigawa':
                      header("location:sule-tankarka-jigawadj.php");
                        break;

                         case 'dj'.'taura-jigawa'.'Jigawa':
                      header("location:taura-jigawadj.php");
                        break;


                         case 'dj'.'yankwasi-jigawa'.'Jigawa':
                      header("location:yankwasi-jigawadj.php");
                        break;

                        
                        case 'dj'.'birniwa-jigawa'.'Jigawa':
                      header("location:birniwa-jigawadj.php");
                        break;
                        
                        case 'dj'.'buji-jigawa'.'Jigawa':
                      header("location:buji-jigawadj.php");
                        break;
                        
                        case 'dj'.'garki-jigawa'.'Jigawa':
                      header("location:garki-jigawadj.php");
                        break;
                        
                        case 'dj'.'dute-jigawa'.'Jigawa':
                      header("location:dute-jigawadj.php");
                        break;

                            case 'dj'.'gagarawa-jigawa'.'Jigawa':                
                      header("location:gagarawa-jigawadj.php");                   
                        break;


                        #END Djs LOCATION
                      

                        #BEGINING MARKUP LOCATION
                        case 'markup'.'auyo-jigawa'.'Jigawa':
                      header("location:auyo-jigawamarkup.php");
                        break;
                        
                         case 'markup'.'Jigawa'.'Jigawa':
                      header("location:Jigawamarkup.php");
                        break;
                        
                        case 'markup'.'gumel-jigawa'.'Jigawa':
                      header("location:gumel-jigawamarkup.php");
                        break;
                        
                        case 'markup'.'guri-jigawa'.'Jigawa':
                      header("location:guri-jigawamarkup.php");
                        break;

                         case 'markup'.'gwaram-jigawa'.'Jigawa':
                      header("location:gwaram-jigawamarkup.php");
                        break;

                         case 'markup'.'gwiwa-jigawa'.'Jigawa':
                      header("location:gwiwa-jigawamarkup.php");
                        break;

                         case 'markup'.'hadeji-jigawa'.'Jigawa':
                      header("location:hadeji-jigawamarkup.php");
                        break;

                         case 'markup'.'jahun-jigawa'.'Jigawa':
                      header("location:jahun-jigawamarkup.php");
                        break;

                         case 'markup'.'kafin-hausa-jigawa'.'Jigawa':
                      header("location:kafin-hausa-jigawamarkup.php");
                        break;

                         case 'markup'.'kaugama-jigawa'.'Jigawa':
                      header("location:kaugama-jigawamarkup.php");
                        break;

                         case 'markup'.'kazaure-jigawa'.'Jigawa':
                      header("location:kazaure-jigawamarkup.php");
                        break;

                         case 'markup'.'birnin-magaji-jigawa'.'Jigawa':
                      header("location:birnin-magaji-jigawamarkup.php");
                        break;

                        case 'markup'.'kirikisamma-jigawa'.'Jigawa':
                      header("location:kirikisamma-jigawamarkup.php");
                        break;

                        case 'markup'.'maigatari-jigawa'.'Jigawa':
                      header("location:maigatari-jigawamarkup.php");
                        break;

                         case 'markup'.'malamaduri-jigawa'.'Jigawa':
                      header("location:malamaduri-jigawamarkup.php");
                        break;

                         case 'markup'.'ringim-jigawa'.'Jigawa':
                      header("location:ringim-jigawamarkup.php");
                        break;

                         case 'markup'.'roni-jigawa'.'Jigawa':
                      header("location:roni-jigawamarkup.php");
                        break;

                         case 'markup'.'sule-tankarka-jigawa'.'Jigawa':
                      header("location:sule-tankarka-jigawamarkup.php");
                        break;

                         case 'markup'.'taura-jigawa'.'Jigawa':
                      header("location:taura-jigawamarkup.php");
                        break;

                         case 'markup'.'yankwasi-jigawa'.'Jigawa':
                      header("location:yankwasi-jigawamarkup.php");
                        break;
                        
                          case 'markup'.'babura-jigawa'.'Jigawa':
                      header("location:babura-jigawamarkup.php");
                        break;
                        
                          case 'markup'.'birnin-kudu-jigawa'.'Jigawa':
                      header("location:birnin-kudu-jigawamarkup.php");
                        break;
                        
                          case 'markup'.'birniwa-jigawa'.'Jigawa':
                      header("location:birniwa-jigawamarkup.php");
                        break;
                        
                          case 'markup'.'buji-jigawa'.'Jigawa':
                      header("location:buji-jigawamarkup.php");
                        break;
                        
                        
                        case 'markup'.'garki-jigawa'.'Jigawa':
                      header("location:garki-jigawamarkup.php");
                        break;
                        
                        case 'markup'.'dute-jigawa'.'Jigawa':
                      header("location:dute-jigawamarkup.php");
                        break;


                        case 'markup'.'gagarawa-jigawa'.'Jigawa':                
                      header("location:gagarawa-jigawamarkup.php");                   
                        break;

                        #END MARKUP LOCATION

                      #Jigawa STATE ENDING






                      default:
                        
                        break;
                    }
                    # code...
                  }
                  
                ?>