<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExchangeVoucher extends Model
{
  protected $table = 'exchangevoucher';
  protected $fillable = ['email','voucherCode','percent'];
  protected $visible = ['email','voucherCode','percent'];
}
