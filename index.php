<?php

include_once 'interfaces/RemoteControl.php';
include_once 'interfaces/Electronic.php';
include_once 'classes/RemoteControlImpl.php';
include_once 'classes/TelevisionImpl.php';
include_once 'classes/BlurayPlayerImpl.php';

$remote = new RemoteControlImpl();
$television = new TelevisionImpl();
$blurayPlayer = new BlurayPlayerImpl();

$remote->togglePower($television);
$remote->togglePower($blurayPlayer);
$remote->togglePower($blurayPlayer);
$remote->togglePower($television);

