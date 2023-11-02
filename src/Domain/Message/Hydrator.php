<?php declare(strict_types=1);

namespace App\Domain\Message;

use App\Entity\Customer;
use App\Model\Message;

class Hydrator
{
    /**
     * @param array $data = [
     *      'body' => '',
     * ]
     */
    public function hydrateToModel(array $data, Customer $customer)
    {
        return (new Message())
            ->setType($customer->getNotificationType())
            ->setBody($data['body']);
    }
}