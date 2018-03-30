<?php // $newsList is from actionItemsList ?>
<?php $this->beginBlock('blockADV'); ?>
<table>    
    <h3>Tabellina del <?php echo $newsList[1]?> </h3>    
    <?php foreach($newsList as $item) { ?>    
        <tr>        
            <td>
                <?php echo "<b>".$item."</b>"; ?>
            </td>    
        </tr> 
    <?php } ?> 
</table> 
<?php $this->endBlock(); ?>