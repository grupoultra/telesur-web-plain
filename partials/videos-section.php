<div slides-to-show="5" slides-to-scroll="1" class="videos-section">
  <?php
  foreach (range(0, 12) as &$valor) {?>
    <div class="video-item" ng-repeat="news in videoNews">
      <div class="video-container">
        <img src="http://placehold.it/242x160" alt="">
        <!--<div class="menu-container  text-right" ng-click="menuFocusNews = !menuFocusNews">-->
        <!--<span class="glyphicon glyphicon-option-horizontal"></span>-->
        <!--<ul  ng-init="menuFocusNews = false"  ng-show="menuFocusNews">-->
        <!--<li>menu-element</li>-->
        <!--<li>menu-element</li>-->
        <!--</ul>-->
        <!--</div>-->
      </div>
      <div class="video-caption">
        <a href="">
          Laborum ullamco deserunt consectetur mollit do enim in
        </a>
      </div>
    </div>
  <?php } ?>
</div>

