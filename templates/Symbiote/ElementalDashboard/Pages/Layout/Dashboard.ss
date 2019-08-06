<div class="container-fluid">
    <div class="row">
        <% if $LeftColumnWidth > 0 %>
        <div class="col-md-{$LeftColumnWidth}">
            $LeftColumn
        </div>
        <% end_if %>
        <% if $CenterColumnWidth > 0 %>
        <div class="col-md-{$CenterColumnWidth}">
            $ElementalArea
        </div>
        <% end_if %>
        <% if $RightColumnWidth > 0 %>
        <div class="col-md-{$RightColumnWidth}">
            $RightColumn
        </div>
        <% end_if %>
    </div>
</div>
