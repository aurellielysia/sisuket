<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

class KtpRejected extends Notification
{
    use Queueable;

    protected $ktp;
    protected $reason;

    /**
     * Create a new notification instance.
     *
     * @param  \App\Models\KTP  $ktp
     * @param  string  $reason
     * @return void
     */
    public function __construct($ktp, $reason)
    {
        $this->ktp = $ktp;
        $this->reason = $reason;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database']; // Store in the database
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'message' => 'KTP Anda dengan NIK ' . $this->ktp->nik . ' telah ditolak. Alasan: ' . $this->reason,
            'ktp_id' => $this->ktp->id,
            'status' => 'rejected',
        ];
    }
}
