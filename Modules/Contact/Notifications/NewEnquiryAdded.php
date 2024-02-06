<?php

namespace Modules\Contact\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\SlackMessage;
use Illuminate\Notifications\Notification;
use Modules\Contact\Entities\Enquiry;

class NewEnquiryAdded extends Notification implements ShouldQueue
{
    use Queueable;

    public $enquiry;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Enquiry $enquiry)
    {
        $this->enquiry = $enquiry;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['slack', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $enquiry = $this->enquiry;
        $user = $notifiable;

        return (new MailMessage())
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', 'https://laravel.com')
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the Slack representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return SlackMessage
     */
    public function toSlack($notifiable)
    {
        $enquiry = $this->enquiry;
        $user = $notifiable;

        return (new SlackMessage())
                ->success()
                ->from('BlueCube', ':incoming_envelope:')
                ->content('New Enquiry: '.$enquiry->name.' | From:'.$enquiry->user_name)
                ->attachment(function ($attachment) use ($enquiry) {
                    $attachment->title('Enquiry '.$enquiry->id, route('backend.comments.show', $enquiry->id))
                    ->fields([
                        'Post'    => $enquiry->post_name,
                        'User'    => $enquiry->user_name,
                        'Enquiry' => $enquiry->name,
                        'Status'  => $enquiry->status_label_text,
                    ]);
                });
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toDatabase($notifiable)
    {
        $enquiry = $this->enquiry;
        $user = $notifiable;

        $text = 'New Enquiry | <strong>'.$enquiry->name.'</strong> on <strong>'.$enquiry->post_name.'</strong>  by <strong>'.$enquiry->user_name.'</strong>';

        $url_backend = route('backend.enquiry.show', $enquiry->id);

        return [
            'title'         => 'New Enquiry for review!',
            'module'        => 'Enquiry',
            'type'          => 'created', // created, published, viewed,
            'icon'          => 'fas fa-enquiry',
            'text'          => $text,
            'url_backend'   => $url_backend,
            'url_frontend'  => '',
        ];
    }
}
