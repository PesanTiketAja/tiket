<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class BookingTiketModel extends Model
{
    protected $table = 'booking_tiket';
    protected $primaryKey = 'id';
    protected $allowedFields = ['member_id', 'tiket_id', 'jumlah', 'total_harga'];
}