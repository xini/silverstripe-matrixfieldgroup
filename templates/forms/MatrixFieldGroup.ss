<div class="<% if extraClass %>$extraClass<% else %>matrixfieldgroup<% end_if %>" <% if ID %>id="$Name"<% end_if %>>
	<div class="table">
		<div class="thead">
			<div class="tr">
				<% loop ColumnHeaders %>
					<div class="th column{$Modulus(3,0)}">$Title</div>
				<% end_loop %>
			</div>
		</div>
		<div class="tbody">
			
			<% loop FieldList %>
				<% if $First %>
					<div class="tr first">
				<% else_if $MultipleOf($Up.ColumnCount, 0) %>
					</div>
					<div class="tr">
				<% end_if %>
				<div class="td fieldgroup-field column{$Modulus(3,0)} $extraClass">
					$SmallFieldHolder
				</div>
				<% if $Last %>
					</div>
				<% end_if %>
			<% end_loop %>
		</div>
	</div>
</div>