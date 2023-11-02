<?php declare(strict_types=1);

namespace App\Controller\Api;

use App\Entity\Customer;
use App\Repository\CustomerRepository;
use App\Model\Message;
use App\Requests\CustomerController\NotificationRequest;
use App\Service\EmailSender;
use App\Service\Messenger;
use App\Service\SMSSender;
use App\Service\Validator;
use App\Service\WeatherService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/customer", name="customer_")
 */
class CustomerController extends AbstractController
{
    /**
     * @Route("/{code}/notifications", name="notifications", methods={"POST"})
     */
    public function notifyCustomer(NotificationRequest $request, string $code): Response
    {
        $request->validate();


        return new Response("OK");


        $repository = new CustomerRepository();
        /** @var Customer $customer */
        $customer = $repository->find($code);

        $message = new Message();
        $message->setBody($customer->getNotificationType());
        $message->setType($requestData->type);

        $messenger = new Messenger([new EmailSender(), new SMSSender()]);
        $messenger->send($message);

        return new Response("OK");
    }
}