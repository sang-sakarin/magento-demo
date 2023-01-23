<?php 

namespace Demo\Customer\Model\Api; 

// use Psr\Log\LoggerInterface;
// use Demo\Customer\Api\CustomInterface;

class Customer

{

    // protected $logger;

    public function __construct(

        // LoggerInterface $logger

    )

    {

        // $this->logger = $logger;

    }

 

    /**

     * @inheritdoc

     */

    public function getData()

    {

        $response = ['success' => false];

        // try {

        //     // Implement Your Code here
        //     $response = ['success' => true];

        // } catch (\Exception $e) {

        //     $response = ['success' => false, 'message' => $e->getMessage()];

        //     $this->logger->info($e->getMessage());

        // }

        $returnArray = json_encode($response);

        return $returnArray; 

    }

}