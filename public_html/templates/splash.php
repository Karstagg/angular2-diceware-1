<h1>Diceware Search</h1>
<p>
	<a href="http://world.std.com/~reinhold/diceware.html">Diceware</a> is a site that allows users to use five dice to create a password. The word list at the original site is buried deep within several pages of text. We have made the word list easily viewable and searchable.
</p>
<p>Enjoy!</p>
<hr />
<div class="row">
	<div class="col-md-6">
		<div class="input-group">
			<input type="number" class="form-control" placeholder="Search By Roll&hellip;" [(ngModel)]="dicewareRollSearch" (keyup)="filterByRoll();" />
			<span class="input-group-addon"><i class="fa fa-search"></i></span>
		</div>
	</div>
	<div class="col-md-6">
		<div class="input-group">
			<input type="text" class="form-control" placeholder="Search By Word&hellip;" [(ngModel)]="dicewareWordSearch" (keyup)="filterByWord();" />
			<span class="input-group-addon"><i class="fa fa-search"></i></span>
		</div>
	</div>
</div>
<table class="table table-bordered table-hover table-responsive table-striped">
	<tr><th>Roll</th><th>Word</th></tr>
	<tr class="cursor-pointer" *ngFor="let dicewareRoll of dicewareRollsFiltered" (click)="switchDiceware(dicewareRoll);">
		<td>{{ dicewareRoll.roll }}</td>
		<td>{{ dicewareRoll.word }}</td>
	</tr>
</table>
