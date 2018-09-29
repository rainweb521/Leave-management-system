<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>请假管理系统</title>
</head>
<style>
    .all{
        margin: auto;
        text-align: center;
        width: 95%;
        height: 100%;
    }
    td{
        text-align: left;
    }
    div{
        font-size: 19px;
        font-family:"宋体";
        font-weight:bold;
    }
    .line1{
        margin-left: -5px;

    }
    h2{
        margin-left: 40px;
        text-align: left;
    }

</style>
<body>
<div class="all" >
    <!--<h2 style="margin-left: 28%;margin-bottom: -20px;">内蒙古农业大学</h2>-->
    <h2 style="margin-left: 14%">草原与资源环境学院长期请假条(存根)</h2>
    <div class="line1" align="left">班主任、学办老师：</div>
    <table align="" width="100%" >

        <tr>
            <td colspan="2" >
                <div  class="line2">您好！本人因
                    <u>
                        <?php if($leave["l_cause"] == ''): ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php endif; ?>
                        <?php if($leave["l_cause"] != ''): echo ($leave["l_cause"]); endif; ?>

                        （请假原因）<br></u>需向您请假<u>
                        <?php if($leave["l_day"] == ''): ?>&nbsp;&nbsp;&nbsp;<?php endif; ?>
                        <?php if($leave["l_day"] != ''): echo ($leave["l_day"]); endif; ?>

                    </u>天。
                </div>
            </td>
        </tr>

        <tr>
            <td colspan="2" >
                <div>请假时间为：
                    <?php if($leave["l_begintime"] == ''): ?><u>&nbsp;&nbsp;</u>年<u>&nbsp;&nbsp;</u>月<u>&nbsp;&nbsp;</u> 日 至
                        <u>&nbsp;&nbsp;</u> 年 <u>&nbsp;&nbsp;</u>  月  <u>&nbsp;&nbsp;</u>   日<?php endif; ?>
                    <?php if($leave["l_begintime"] != ''): echo ($leave["l_begintime"]); ?>至
                        <?php echo ($leave["l_endtime"]); endif; ?>
                     </div>

            </td>
        </tr>
        <tr>
            <td colspan="2" >
                <div>学号：
                    <?php if($leave["l_s_card"] == ''): ?><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>
                        班级：<u>&nbsp;&nbsp;&nbsp;
                    </u>级<u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>班<?php endif; ?>
                    <?php if($leave["l_s_card"] != ''): ?><u><?php echo ($leave["l_s_card"]); ?></u>&nbsp;班级：<u>&nbsp;<?php echo ($leave["l_s_grade"]); ?>
                    </u>级&nbsp;<u><?php echo ($leave["l_s_class"]); ?>&nbsp;</u>班<?php endif; ?>

                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <div>
                <?php if($leave["l_s_card"] == ''): ?>联系方式: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </u>请假去往地点:<u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u><?php endif; ?>
                <?php if($leave["l_s_card"] != ''): ?>联系方式: <u><?php echo ($leave["l_s_phone"]); ?>
                    </u>&nbsp;请假去往地点:<u><?php echo ($leave["l_address"]); ?></u><?php endif; ?>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2"><div>特此请假，恳请批准！</div></td>
        </tr>
        <tr>
            <td colspan="2"><div>此致  </div></td>
        </tr>
        <tr>
            <td colspan="2"><div>敬礼！</div></td>
        </tr>
        <tr>
            <td><div>承诺人（请假人）：</div></td>
            <td align="right" rowspan="8" width="65%" >
                <table style="font-size: 18px;font-family:'宋体';font-weight:400;border:1px solid #000000;" >
                    <tr><td style="font-size: 22px;font-family:'宋体';font-weight:bold;">本人承诺：</td></tr>
                    <tr><td>&nbsp;&nbsp;请假期间本人保证遵纪守法，和学校保持信</td></tr>
                    <tr><td>息畅通，保证不因为请假耽误完成毕业论文和其</td></tr>
                    <tr><td>它教学环节。在请假离校期间本人人身安全由自</td></tr>
                    <tr><td>己负责，返校后及时销假。</td></tr>
                </table>
            </td>
        </tr>
        <?php if($leave["l_s_card"] == ''): ?><tr>
                <td><div>&nbsp;<u>&nbsp;</u> 月 <u>&nbsp;</u>  日</div></td>
            </tr>
            <tr>
                <td><div>班主任同意签名：</div></td>
            </tr>
            <tr>
                <td><div>&nbsp;<u>&nbsp;</u> 月 <u>&nbsp;</u>  日</div></td>
            </tr>
            <tr>
                <td><div>学办老师同意签名：</div></td>
            </tr>
            <tr>
                <td><div>&nbsp;<u>&nbsp;</u> 月 <u>&nbsp;</u>  日</div></td>
            </tr><?php endif; ?>
        <?php if($leave["l_s_card"] != ''): ?><tr>
                <td><div><?php echo ($leave["l_begintime"]); ?></div></td>
            </tr>
            <tr>
                <td><div>班主任同意签名：</div></td>
            </tr>
            <tr>
                <td><div><?php echo ($leave["l_begintime"]); ?></div></td>
            </tr>
            <tr>
                <td><div>学办老师同意签名：</div></td>
            </tr>
            <tr>
                <td><div><?php echo ($leave["l_begintime"]); ?></div></td>
            </tr><?php endif; ?>



        <tr>
            <td><div>返校销假签字：</div></td>
        </tr>
        <tr>
            <td><div>2017年<u>&nbsp;</u> 月 <u>&nbsp;</u>  日</div></td>
        </tr>
    </table>
    <!--<h2 style="margin-left: 28%;margin-bottom: -10px;">内蒙古农业大学</h2>-->
    <h2 style="margin-left: 20%">草原与资源环境学院长期请假条</h2>
    <div class="line1" align="left">班主任、学办老师：</div>
    <table align="" width="100%" >

        <tr>
            <td colspan="2" >
                <div  class="line2">您好！本人因
                    <u>
                        <?php if($leave["l_cause"] == ''): ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php endif; ?>
                        <?php if($leave["l_cause"] != ''): echo ($leave["l_cause"]); endif; ?>

                        （请假原因）<br></u>需向您请假<u>
                        <?php if($leave["l_day"] == ''): ?>&nbsp;&nbsp;&nbsp;<?php endif; ?>
                        <?php if($leave["l_day"] != ''): echo ($leave["l_day"]); endif; ?>

                    </u>天。
                </div>
            </td>
        </tr>

        <tr>
            <td colspan="2" >
                <div>请假时间为：
                    <?php if($leave["l_begintime"] == ''): ?><u>&nbsp;&nbsp;</u>年<u>&nbsp;&nbsp;</u>月<u>&nbsp;&nbsp;</u> 日 至
                        <u>&nbsp;&nbsp;</u> 年 <u>&nbsp;&nbsp;</u>  月  <u>&nbsp;&nbsp;</u>   日<?php endif; ?>
                    <?php if($leave["l_begintime"] != ''): echo ($leave["l_begintime"]); ?>至
                        <?php echo ($leave["l_endtime"]); endif; ?>
                </div>

            </td>
        </tr>
        <tr>
            <td colspan="2" >
                <div>学号：
                    <?php if($leave["l_s_card"] == ''): ?><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>
                        班级：<u>&nbsp;&nbsp;&nbsp;
                    </u>级<u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>班<?php endif; ?>
                    <?php if($leave["l_s_card"] != ''): ?><u><?php echo ($leave["l_s_card"]); ?></u>&nbsp;班级：<u>&nbsp;<?php echo ($leave["l_s_grade"]); ?>
                    </u>级&nbsp;<u><?php echo ($leave["l_s_class"]); ?>&nbsp;</u>班<?php endif; ?>

                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <div>
                    <?php if($leave["l_s_card"] == ''): ?>联系方式: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </u>请假去往地点:<u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u><?php endif; ?>
                    <?php if($leave["l_s_card"] != ''): ?>联系方式: <u><?php echo ($leave["l_s_phone"]); ?>
                    </u>&nbsp;请假去往地点:<u><?php echo ($leave["l_address"]); ?></u><?php endif; ?>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2"><div>特此请假，恳请批准！</div></td>
        </tr>
        <tr>
            <td colspan="2"><div>此致  </div></td>
        </tr>
        <tr>
            <td colspan="2"><div>敬礼！</div></td>
        </tr>
        <tr>
            <td><div>承诺人（请假人）：</div></td>
            <td align="right" rowspan="8" width="65%" >
                <table style="font-size: 18px;font-family:'宋体';font-weight:400;border:1px solid #000000;" >
                    <tr><td style="font-size: 22px;font-family:'宋体';font-weight:bold;">本人承诺：</td></tr>
                    <tr><td>&nbsp;&nbsp;请假期间本人保证遵纪守法，和学校保持信</td></tr>
                    <tr><td>息畅通，保证不因为请假耽误完成毕业论文和其</td></tr>
                    <tr><td>它教学环节。在请假离校期间本人人身安全由自</td></tr>
                    <tr><td>己负责，返校后及时销假。</td></tr>
                </table>
            </td>
        </tr>
        <?php if($leave["l_s_card"] == ''): ?><tr>
                <td><div>&nbsp;<u>&nbsp;</u> 月 <u>&nbsp;</u>  日</div></td>
            </tr>
            <tr>
                <td><div>班主任同意签名：</div></td>
            </tr>
            <tr>
                <td><div>&nbsp;<u>&nbsp;</u> 月 <u>&nbsp;</u>  日</div></td>
            </tr>
            <tr>
                <td><div>学办老师同意签名：</div></td>
            </tr>
            <tr>
                <td><div>&nbsp;<u>&nbsp;</u> 月 <u>&nbsp;</u>  日</div></td>
            </tr><?php endif; ?>
        <?php if($leave["l_s_card"] != ''): ?><tr>
                <td><div><?php echo ($leave["l_begintime"]); ?></div></td>
            </tr>
            <tr>
                <td><div>班主任同意签名：</div></td>
            </tr>
            <tr>
                <td><div><?php echo ($leave["l_begintime"]); ?></div></td>
            </tr>
            <tr>
                <td><div>学办老师同意签名：</div></td>
            </tr>
            <tr>
                <td><div><?php echo ($leave["l_begintime"]); ?></div></td>
            </tr><?php endif; ?>



        <tr>
            <td><div>返校销假签字：</div></td>
        </tr>
        <tr>
            <td><div>2017年<u>&nbsp;</u> 月 <u>&nbsp;</u>  日</div></td>
        </tr>
    </table>




</div>
</body>
</html>