<?php
	abstract class ProgresState
	{
		const to_do=1;
		const doing=2;
		const testing=3;
		const done=4;
		const known_bugs=5;
		const not_used=100;
	};
	function state_to_color($state)
	{
		switch($state)
		{
			case ProgresState::to_do:
			default:
				return "white";
			case ProgresState::doing:
				return "yellow";
			case ProgresState::testing:
				return "cyan";
			case ProgresState::done:
				return "green";
			case ProgresState::known_bugs:
				return "red";
			case ProgresState::not_used:
				return "gray60";
		}
	};
?>
