<?php

namespace Modules\Users\app\Parser;

class ModelTyperParser {

    public function list(): array {
        return [
            "App\Modules\Users\Models\Parameter" => "Modules\Users\app\Models\Parameter",
            "App\Modules\Users\Models\ParameterGroup" => "Modules\Users\app\Models\ParameterGroup",
            "App\Modules\Users\Models\User" => "Modules\Users\app\Models\User",
            "App\Modules\Cms\Models\MenuItem" => "Modules\Cms\app\Models\MenuItem"
        ];
    }

}
