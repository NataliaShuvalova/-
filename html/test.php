<?php
include_once'../core/function.php';
include_once'../core/display.php';
?>
<!doctype html>
<html>
<head>
    <title><?php echo basename($ii, '.json');?></title>
</head>
<body>
    <?php $tr=0;
    if(isset($data)):
    if(isset($_POST['submit']) ){
        foreach ($data as $s){
            $k=array_shift($_POST);
            if($s['answer']===$k){
                $tr++;
                }
                }
                echo '<h3>Верных ответов: '.$tr.'<h3/>';
            }else
                if(!empty($data)& is_array($data)):?>
                    <form method="post" action=''>
                        <?php foreach($data as $i): ?>
                            <fieldset>
                            <?php if(isset($i['question'])):?>
                                <p><b><?php echo clean($i['question']); ?></b></p><br/>
                            <?php if(isset($i['option'])):
                                foreach($i['option'] as $d => $b):
                                    echo $d;?>
                                    <input type="radio" name="<?php echo $a;?>" value="<?php echo $b;?>"><?= $b;?><br/>
                                <?php endforeach;
                            endif;
                            endif;?>
                             </fieldset><br/>
                        <?php $a++;
                         endforeach;?>
                        <input type="submit" name="submit">
                    </form>
        <?php else: echo 'Содержание данного файла неверно или неправильно оформленно';
    endif;
    endif;?>
</body>
</html>