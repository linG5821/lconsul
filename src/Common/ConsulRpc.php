<?php


    namespace Ling5821\Lconsul\Common;


    class ConsulRpc
    {
        public function getServiceAddress($serviceName)
        {
            $loadBalancer = new LegendLoadBalancer($serviceName);
            $serviceInfos = RedisUtils::get(Utils::getServiceKey($serviceName));
            if (Utils::isNullStr($serviceInfos)) {
                throw new \RuntimeException("getServiceAddress: ServiceInfo Cache Not Found");
            }
            return $loadBalancer->choose(json_decode($serviceInfos)->addresses);
        }

    }