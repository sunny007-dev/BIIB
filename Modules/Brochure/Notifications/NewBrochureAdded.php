<?php

namespace Modules\Brochure\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\SlackMessage;
use Illuminate\Notifications\Notification;
use Modules\Brochure\Entities\Brochure;

class NewBrochureAdded extends Notification implements ShouldQueue
{
    use Queueable;

    public $brochure;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Brochure $brochure)
    {
        $this->brochure = $brochure;
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
        $brochure = $this->brochure;
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
        $brochure = $this->brochure;
        $user = $notifiable;

        return (new SlackMessage())
                ->success()
                ->from('BlueCube', ':incoming_envelope:')
                ->content('New Brochure: '.$brochure->name.' | From:'.$brochure->user_name)
                ->attachment(function ($attachment) use ($brochure) {
                    $attachment->title('Brochure '.$brochure->id, route('backend.brochure.show', $brochure->id))
                    ->fields([
                        'Post'    => $brochure->post_name,
                        'User'    => $brochure->user_name,
                        'Brochure' => $brochure->name,
                        'Status'  => $brochure->status_label_text,
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
        $brochure = $this->brochure;
        $user = $notifiable;

        $text = 'New Brochure | <strong>'.$brochure->name.'</strong> on <strong>'.$brochure->post_name.'</strong>  by <strong>'.$brochure->user_name.'</strong>';

        $url_backend = route('backend.comments.show', $brochure->id);

        return [
            'title'         => 'New Brochure Form Filled!',
            'module'        => 'Brochure',
            'type'          => 'created', // created, published, viewed,
            'icon'          => 'fas fa-comments',
            'text'          => $text,
            'url_backend'   => $url_backend,
            'url_frontend'  => '',
        ];
    }
}
