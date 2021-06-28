<?php
abstract class ProgresState
{
    const to_do=1;
    const doing=2;
    const testing=3;
    const done=4;
    const known_bugs=5;
    const ros_official=6;
    const ros_community=7;
    const not_used=100;

    const all_states = [
        self::to_do,
        self::doing,
        self::testing,
        self::done,
        self::known_bugs,
        self::ros_official,
        self::ros_community,
        self::not_used,
    ];
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
        case ProgresState::ros_official:
            return "limegreen";
        case ProgresState::ros_community:
            return "chartreuse4";
        case ProgresState::not_used:
            return "gray60";
    }
};
function state_to_label($state)
{
    switch($state)
    {
        case ProgresState::to_do:
        default:
            return "To do";
        case ProgresState::doing:
            return "Doing";
        case ProgresState::testing:
            return "Testing";
        case ProgresState::done:
            return "Done";
        case ProgresState::known_bugs:
            return "Known bugs";
        case ProgresState::ros_official:
            return "Ros Official";
        case ProgresState::ros_community:
            return "Ros Community";
        case ProgresState::not_used:
            return "Not Used";
    }
};
