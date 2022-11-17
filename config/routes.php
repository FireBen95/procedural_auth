<?php

    get("/", ["welcomeController", "index"]);

    get("/edit/1", ["welcomeController", "edit"]);

    post("/create", ["welcomeController", "create"]);