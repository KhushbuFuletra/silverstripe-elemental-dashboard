<div class="container-fluid" >
    <div class="row">
        <% if $LeftColumnWidth > 0 %>
            <div class="col-md-{$LeftColumnWidth}">
                <% include Includes/ContentOrElementalArea ElementalAreaID=$LeftColumnID, ElementalArea=$LeftColumn %>
            </div>
        <% end_if %>
        <% if $CenterColumnWidth > 0 %>
            <div class="col-md-{$CenterColumnWidth}">
                <% include Includes/ContentOrElementalArea %>
            </div>
        <% end_if %>
        <% if $RightColumnWidth > 0 %>
            <div class="col-md-{$RightColumnWidth}">
                <% include Includes/ContentOrElementalArea ElementalAreaID=$RightColumnID, ElementalArea=$RightColumn %>
            </div>
        <% end_if %>
    </div>
</div>
