    <!--左侧导航栏 begin-->
    <div class="col-sub">
        <div class="APIgory">
            <ul>
                <li>
                <div class="APIgory-title">
                    <a href="#" style='width:105px;display:inline-block;'>&nbsp;<span class="APIgory-sub-title"> API列表</span></a>
                    <a href="index.php" style='float:right;margin-right:20px;'><span class="APIgory-sub-title">调用规范</span></a>
                </div>
                </li>
                <?php
                foreach($left_data as $v) {
                ?>
                <li>                        
                <div class="APIgory-list <?php if ($v['method'] == $method) {echo 'focus';}?>">
                    <div class="APIgory-content">
                        <a class="link APIgoryItem title-overflow" title="<?php echo $v['method'];?>" <?php if ($v['finish'] == false) {echo 'style="color:red;"';}?> href="<?php if ($v['method'] != $method) {echo '?method=' . $v['method'];} else {echo '#';}?>">
                            <?php echo $v['method'];?>
                        </a>
                        <p class="APIgory-intro info-overflow"><?php echo $v['name'];?></p>
                    </div>
                </div>
                </li>
                <?php
                }
                ?>           
            </ul>
        </div>
    </div>
