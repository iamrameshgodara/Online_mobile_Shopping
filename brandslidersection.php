<section style="padding:0;margin:0">
                <div class="testing-brands">
                    <div class="testDiv-brands top-box-brand">
                    <a href="indexmobi2.php? id=<?php echo $datas[$i]['companyname'];?>">
                    <div class="box-details">
                        <?php if(empty($datas[$i]['companylogoDarkMode'])){
                            $datas[$i]['companylogoDarkMode']=$datas[$i]['companylogo'];
                                }
                                if(empty($datas[$i]['companylogo'])){
                                    $datas[$i]['companylogo']=$datas[$i]['companylogoDarkMode'];
                                }
                         ?>
                        <img class="normalModeLogo" src="images/<?php echo $datas[$i]['companylogo'];?>">
                        <img class="darkModeLogo" src="images/<?php echo $datas[$i]['companylogoDarkMode'];?>">
                        <!-- <h3><b> <?php echo $row['companyname'];?> </b></h3> -->
                    </div>
                </a>
                    </div>
                </div>
            </section>