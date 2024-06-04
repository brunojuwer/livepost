<?php

namespace Database\Seeders\Traits;

use Illuminate\Support\Facades\DB;

trait ForeignKeyCheck 
{
  protected function disableForeignKeyCheck()
  {
    DB::statement('SET FOREIGN_KEY_CHECKS=0');
  }

  protected function enableForeignKeyCheck()
  {
    DB::statement('SET FOREIGN_KEY_CHECKS=1');
  }

}