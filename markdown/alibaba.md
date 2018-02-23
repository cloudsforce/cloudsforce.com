# AliCloud IaaS Products Landscape {#landscape}

![alt text](https://learn-cdn.mobingi.com/cloudsforce/alibaba-iaas-landscape-v2.png "Alibaba Cloud IaaS Products Landscape")


##Foundation Services

- ## 1.Networking {#networking}

    `
    Cloud IaaS platform's native networking products are one of the fundamental components that enable customers to isolate cloud infrastructure, scale application requests handling capacity, and connect physical network to the private virtual network.
    `

    Alibaba Cloud provides a full set of networking products that includes:

    | Service    | Product Type  | Description   |
    | -------- |:------------- | :------------|
    | [VPC](https://www.alibabacloud.com/product/vpc)       | Virtual Private Cloud        | Isolate cloud resources with customer's own private virtual network       |
    | [Server Load Balancer](https://www.alibabacloud.com/product/server-load-balancer)       | Load Balancing        | Automatically distribute application traffic across multiple compute instances in the cloud       |
    | [Express Connect](https://www.alibabacloud.com/product/express-connect)      | Dedicated Network Connections to Alibaba Cloud        | Dedicated network connection between your network and your Alibaba Cloud VPC       |
    | [Cloud DNS](https://www.alibabacloud.com/product/dns)       | Domain Name Service (DNS)        | Highly available and scalable cloud DNS to connect user requests to your cloud resources       |
    | [CDN](https://www.alibabacloud.com/product/cdn)       | Content Delivery Network        | Highly distributed content delivery network in the cloud     |



    This section gives a high level view of __networking__ products.

    ------
    - #### VPC

        On Alibaba Cloud official website, it states:

        > Virtual Private Cloud (VPC) is a private network established in Alibaba Cloud. VPCs are logically isolated from other virtual networks in Alibaba Cloud.
        VPC is a private network dedicated to you in Alibaba Cloud. You have full control over your VPC, such as specifying its IP address range, and configuring route tables and network gateways. You can also use Alibaba Cloud resources such as ECS, RDS, and SLB in your own VPC.

        If you are already familiar with AWS VPC, the AliCloud VPC is pretty much the same in terms of features and use cases.
        An AliCloud VPC provides the following features:


        - Multiple availability zones _(AZs)_
        - Cross vpc connections _(VPC peering)_
        - Vpc to on-prem connections _(Express connect/Direct connect)_
        - Gateway
        - VRouter
        - VSwitch _(route table)_
        - Subnets with customize cidr block
        - Elastic ips _(EIPs)_

        We won't dive into much detail of its architecture here, but you can refer to [this documentation](https://www.alibabacloud.com/help/doc-detail/34221.htm) on Alibaba Cloud's VPC design.

        Here is a diagram shows what a typical VPC in AliCloud looks like:

        ![alt text](http://docs-aliyun.cn-hangzhou.oss.aliyun-inc.com/assets/pic/34217/intl_en/1516179868166/Image%2013.png "Alibaba Cloud VPC diagram")

        Here is a screencast of Alibaba Cloud VPC console dashboard. You can have a quick look of the basic features:

        <iframe width="560" height="315" src="https://www.youtube.com/embed/gwFXiM8mtEM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

        Limitations of VPC resources:

        | Items    | Limits  | Increasable    |
        | ----- |:------------- | :------------|
        | Available CIDR blocks | 192.168.0.0/16, 172.16.0.0/12, 10.0.0.0/8, and their subsets | Supported |
        | Maximum number of VPCs for an account | 10 | Supported |
        | Maximum number of VRouters in a VPC | 1 | Unsupported |
        | Maximum number of VSwitches in a VPC	| 24 |  Unsupported |
        | Maximum number of route tables in a VPC | 1 | Unsupported |
        | Maximum number of route entries in a route table | 48 | Supported |
        | Maximum number of cloud product instances that can run in a VPC | 10,000 | Unsupported |
        | VRouter | <ul><li>Each VPC can have only one VRouter</li><li>VRouter does not support dynamic route protocols, such as BGP or OSPF</li><li>Each VRouter has only one route table</li><li>Route entries in a route table affect all the cloud product instances in the VPC. Currently, the source IP routing rules are not supported by VSwitches and cloud product instances</li></ul> | N/A |
        | VRouter | <ul><li>VSwitches are a layer-3 switch, therefore the layer-2 broadcast and multicast are not supported</li><li>he number of instances that a VSwitch can have = 10,000 - the number of existing instances in the VPC</li><li>The CIDR block cannot be modified</li></ul> | N/A |

    ------
    - #### Server Load Balancer

        On Alibaba Cloud official website, it states:

        > Alibaba Cloud Server Load Balancer is built to cope with high volume traffic and each year in November is put to the test during Alibaba’s annual Global Shopping Festival. Alibaba relies on Server Load Balancer to provide uninterrupted service during the festival by switching requests between data centers and transferring transactions to the most available server. This includes transferring requests to servers located over 1,000 kilometers away, without missing a single transaction.

        A managed load balancer can, literally, automatically distribute incoming application traffic across multiple server instances in the cloud. It enables our application to achieve greater levels of fault tolerance, seamlessly providing the required amount of load balancing capacity needed to distribute application traffic.

        The AliCloud Server Load Balancer (SLB) has the following main features:

        - High availability
        - Cross-zone load balancing
        - Health checks
        - Works with Auto Scaling
        - Supports HTTPS protocal
        - Supports session stickness
        - Supports global load balancing and cross-region disaster recovery when used in combination with DNS
        - Guarantees up to 99.9% availability

        We won't dive into much detail of SLB here, but you can refer to [this documentation](https://www.alibabacloud.com/product/server-load-balancer) on Alibaba Cloud's SLB documentation.

        Here is a diagram shows what a typical SLB in AliCloud looks like:

        ![alt text](https://img.alicdn.com/tps/TB1dzgaLVXXXXX3apXXXXXXXXXX-474-391.png_.webp "Alibaba Cloud SLB Diagram")

        Here is a screencast of Alibaba Cloud SLB console dashboard. You can have a quick look of the basic features:

        <iframe width="560" height="315" src="https://www.youtube.com/embed/jfbiMoNUxOM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>


    - #### Express Connect

        Express connect provides a fast, stable, secure and private or dedicated network communication between different cloud environments, including VPC intranet intercommunication and dedicated leased line connection across regions and users.

        > Think of Express Connect as AWS Direct Connect

        View official Express Connect [documentation here](https://www.alibabacloud.com/product/express-connect).

    - #### Cloud DNS

        Alibaba Cloud DNS (Domain Name System) is an authoritative highly available and highly scalable domain name resolution and management service.

        Key features:

        - Mapping Between Domain Names and IP Addresses
        - GEO DNS

        > Think of Cloud DNS as AWS Route53

        View official Cloud DNS [documentation here](https://www.alibabacloud.com/product/dns).

    - #### Cloud CDN

       Alibaba Cloud CDN is a Content Delivery Network (a.k.a CDN). Alibaba Cloud CDN has 1,200+ nodes distributed across the globe, it enables users to effectively reduce website response time to milliseconds, ensure smooth video streaming and handle large volumes of traffic.

        > Think of Cloud DNS as AWS CloudFront

        - View official Cloud CDN [documentation here](https://www.alibabacloud.com/product/cdn)





- ## 2.Compute {#compute}

    `
    Cloud IaaS platform's native compute service provides resizable cloud-based compute capacity in the form of virtual servers. It allows us to provision one or thousands of instances simultaneously, and pay only for what we use, making web-scale cloud computing easy.
    `

    Alibaba Cloud provides a full set of networking products that includes:

    | Service    | Product Type  | Description   |
    | -------- |:------------- | :------------|
    | [Elastic Compute Service](https://www.alibabacloud.com/product/ecs)       | Elastic Compute        | Secure, resizable and scalable compute capacity       |
    | [Auto Scaling](https://www.alibabacloud.com/product/auto-scaling)       | Auto Scale        | Dynamically scale ECS capacity up or down automatically       |
    | [Container Service](https://www.alibabacloud.com/product/container-service)      | Container Orchestration        | Fully managed cloud container orchestration service       |
    | [Elastic GPU Service](https://www.alibabacloud.com/product/gpu)       | Parallel Compute        | GPU-based computing service suited for high-demand computing     |



    This section gives a high level view of __compute__ products.

    ------
    - #### Elastic Compute Service

        On Alibaba Cloud official website, it states:
        
        > Alibaba Cloud Elastic Compute Service (ECS) provides fast memory and the latest Intel CPUs to help you to power your cloud applications and achieve faster results with low latency. All ECS instances come with Anti-DDoS protection to safeguard your data and applications from DDoS and Trojan attacks.
        
        If you are familiar with AWS, the Alibaba Cloud ECS is the equivalent product to AWS EC2. What's interesting here is that the average price of ECS is __roughly 15% to 17% cheaper__ than EC2, as of Jan, 2018. You can check the ECS pricing [here](http://cloudsforce.com/cost-calculator/ecs-pricing). Alibaba ECS provides these features:
        
        - Multiple instance configuration / instance family
        - Multiple regions and zones
        - Machine image resources
        - Multiple storage methods _(Basic Cloud Disks, Ultra Cloud Disks, and SSD Cloud Disks)_
        - Robust network and security
        - Management can be done through console, VNC, and APIs
        - Two payment types: Subscription _(reserved)_ and Pay-As-You-Go _(on-demand)_
      
        We won't dive into much detail of its features here, but you can refer to [this documentation](https://www.alibabacloud.com/help/doc-detail/25367.htm) on Alibaba Cloud ECS features.
        
        Here is a diagram shows what a typical VPC in AliCloud looks like:
        
        ![alt text](http://docs-aliyun.cn-hangzhou.oss.aliyun-inc.com/assets/pic/25367/intl_en/1491882098619/ECS%20Overview%20EN.jpg.png "Concept of an ECS instance")
        
        Here is a screencast of Alibaba Cloud SLB console dashboard. You can have a quick look of the basic features:

        <iframe width="560" height="315" src="https://www.youtube.com/embed/VUxEER94f5w" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        
        
    ------
    - #### Auto Scaling


        On Alibaba Cloud official website, it states:
        
        > Auto Scaling is a service to automatically adjust computing resources based on your volume of user requests. When demand for computing resources increase, Auto Scaling automatically adds ECS instances to serve additional user requests, or alternatively removes instances in the case of decreased user requests.
   
        Auto Scaling is the very basic feature that every public cloud provides. It usually works together with Load Balancer, but it's not a requirement.
        
        Alibaba Auto Scaling not only provides the elastic scaling ability to ECS servers for your web workloads, but it also supports RDS database scaling. The service is free or charge and you only pay for your ECS instances in your auto scaling group. 
        
        Features:
        
        - Auto Scaling
        - Support Server Load Balancer (SLB) Configuration
        - Support RDS Whitelist
        - Scheduled Scaling
        - Alerts
        
               
        We won't dive into much detail of its features here, but you can refer to Alibaba Cloud Auto Scaling [getting started guide](https://www.alibabacloud.com/product/auto-scaling?#getting-started).
        
        Here is a diagram shows how a scale-in and scale-out process look like:
        
        ![alt text](https://img.alicdn.com/tps/TB1W8DeMVXXXXXzXVXXXXXXXXXX-720-540.png_.webp "Concept of an ECS instance")
        
        Here is a screencast of Alibaba Cloud Auto Scaling console. You can have a quick look of the basic features:

        <iframe width="560" height="315" src="https://www.youtube.com/embed/KBzTTZODxI0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        
    ------
    - #### Container Service

        Alibaba Container Service is a container (currently only Docker) management service that provides containerized application lifecycle management. 
        It can be integrated with Server Load Balancer, VPC, and other Alibaba Cloud services.

        > Think of Alibaba Container Service as AWS Elastic Container Service (ECS)
        
        Features:
        
        - Supports Swarm & Kubernetes
        - Managed _network_, _storage_, _self-healing_, _monitoring_, _scheduling_ and _routing_
        - Compatible with standard docker APIs
        - Scheduling policies

        We won't dive into much detail of its features here, but you can view official Continer Service [documentation here](https://www.alibabacloud.com/product/container-service)
        
        
        Here is a screencast of Alibaba Cloud Auto Scaling console. You can have a quick look of the basic features:

        <iframe width="560" height="315" src="https://www.youtube.com/embed/uSw2DzRqZXs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

    ------
    - #### Elastic GPU Service

        On Alibaba Cloud official website, it states:

        > Elastic GPU Service (EGS) is a powerful GPU-based computing service suited for high-demand computing, including video decoding, graphics rendering, deep learning, and scientific computation. The service boosts fast speed, strong concurrent computing, and floating point computing capabilities.
        
        Ideal for industries:
        
        - Graphic Design
        - Video Rendering
        - Computing
        - Deep Learning
        
        We won't dive into much detail of its features here, but you can refer to Alibaba Cloud Auto Scaling [getting started guide](https://www.alibabacloud.com/product/gpu).
       
       
- ## 3.Storage {#storage}
    Pending update
- ## 4.Database {#database}
    Pending update
