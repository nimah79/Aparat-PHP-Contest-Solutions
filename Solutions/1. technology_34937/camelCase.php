<?php

echo ucwords(trim(str_replace(' ', '', file_get_contents(__DIR__.'/input.txt'))));
