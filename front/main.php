<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<div id="TabbedPanels1" class="TabbedPanels">
  <ul class="TabbedPanelsTabGroup">
    <li class="TabbedPanelsTab" tabindex="0">健康新知</li>
    <li class="TabbedPanelsTab" tabindex="0">菸害防制</li>
    <li class="TabbedPanelsTab" tabindex="0">癌症防治</li>
    <li class="TabbedPanelsTab" tabindex="0">慢性病防治</li>
  </ul>
  <div class="TabbedPanelsContentGroup">
    <div class="TabbedPanelsContent">
        <h3>健康新知</h3>
        <p><?=nl2br($News->find(['type'=>1])['text']);?></p>
    </div>
    <div class="TabbedPanelsContent">
        <h3>菸害防制</h3>
        <p><?=nl2br($News->find(['type'=>2])['text']);?></p>
    </div>
    <div class="TabbedPanelsContent">
        <h3>癌症防治</h3>
        <p><?=nl2br($News->find(['type'=>3])['text']);?></p>
    </div>
    <div class="TabbedPanelsContent">
        <h3>慢性病防治</h3>
        <p><?=nl2br($News->find(['type'=>4])['text']);?></p>
    </div>
  </div>
</div>
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script>
