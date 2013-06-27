<div class="topic-wrap">
    <h4><a href="#"><? echo $postVO->postDTO->postTitle; ?></a></h4>
    <div class="description clearfix"> <span class="img"><a href="#"><img src="images/img01.png" /></a></span>
        <div><p>By: <a href="#"><? echo $postVO->author->firstName. ' '. $postVO->author->lastName; ?></a></p>
            <p><? echo time_elapsed_string($postVO->postDTO->creationDate); ?></p>
        </div>
    </div>
    <div class="clap clearfix">
        <div class="col"><img alt="" src="images/clap1.gif">
            <div class="value"><span></span> <? echo $postVO->clapCount; ?></div>
        </div>
        <div class="col"><img alt="" src="images/clap2.gif">
            <div class="value"><span></span> <? echo $postVO->commentCount; ?></div>
        </div>
        <div class="col"><img alt="" src="images/clap3.gif">
            <div class="value"><span></span> <? echo $postVO->promotionCount; ?></div>
        </div>
    </div>
</div>
