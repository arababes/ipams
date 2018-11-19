<!-- PAGINATION -->
<div class="row" style="height:8%">
    <div class="col-lg-8 h-100"></div>
    <div class="col-lg-4 h-100" style="position: absolute;margin-top: 25em; margin-left: 60em">

        <nav aria-label="record navigation" >

        <ul class="pagination justify-content-center">
        
            <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?> page-link">
                <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>"  style="border-top-left-radius:40px; border-bottom-left-radius:40px; background-color:<?php if($pageno == 1){echo '#984d65';} else{echo '#571c33';} ?>; color: white" href="#" tabindex="-1">Previous</a>
            </li>

            <li style="<?php if($pageno - 3 < 1 ){ echo 'visibility: hidden; position: absolute;'; }?> ">
                <a href="<?php  echo "?pageno=".(1);  ?>" style="background-color:#571c33; color:white">...</a>
            </li>

            <li style="<?php if($pageno - 2 < 1 ){ echo 'visibility: hidden; position: absolute;'; }?> ">
                <a href="<?php  echo "?pageno=".($pageno - 2);  ?>" style="background-color:#571c33; color:white"><?php echo $pageno-2?></a>
            </li>

            <li style="<?php if($pageno - 1 < 1 ){ echo 'visibility: hidden; position: absolute;'; }?> ">
                <a href="<?php  echo "?pageno=".($pageno - 1);  ?>" style="background-color:#571c33; color:white"><?php echo $pageno-1?></a>
            </li>

            <li class="disabled">
                <a style="background-color:#984d65; color:white" > <?php echo $pageno?> </a>
            </li>

            <li style="<?php if($pageno + 1 > $total_pages){ echo 'visibility: hidden; position: absolute;'; }?> ">
                <a href="<?php  echo "?pageno=".($pageno + 1);  ?>" style="background-color:#571c33; color:white"><?php echo $pageno+1?></a>
            </li>

             <li style="<?php if($pageno + 2 > $total_pages ){ echo 'visibility: hidden; position: absolute;'; }?> ">
                <a href="<?php  echo "?pageno=".($pageno + 2);  ?>" style="background-color:#571c33; color:white"><?php echo $pageno+2?></a>
            </li>

            <li style="<?php if($pageno + 3 > $total_pages ){ echo 'visibility: hidden; position: absolute;'; }?> ">
                <a href="<?php  echo "?pageno=".($total_pages);  ?>" style="background-color:#571c33; color:white">...</a>
            </li>


            <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>" style="border-bottom-right-radius:40px; border-top-right-radius:40px;background-color:<?php if($pageno == $total_pages){echo '#984d65';} else{echo '#571c33';} ?>; color:white ">Next</a>
            </li>
        
        </ul>
        </nav>
    </div>

</div>