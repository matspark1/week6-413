<?php

function bma_custom_blocks_init()
{
    register_block_type(__DIR__ . "/build/main-nav");
}

add_action("init", "bma_custom_blocks_init");
