# AliCloud IaaS の概要{#landscape}

![alt text](https://learn-cdn.mobingi.com/cloudsforce/alibaba-iaas-landscape-v2.png "Alibaba Cloud IaaS Products Landscape")


## 主なサービス

- ### ネットワーク {#networking}

    ```
    クラウドIaaSプラットフォームのネイティブネットワーキング製品は、クラウドインフラストラクチャの分離、アプリケーション要求処理能力の拡張、および物理ネットワークとプライベート仮想ネットワークの接続を可能にする基本的なコンポーネントの1つです。
    ```

    Alibaba Cloudは以下を含むネットワーク製品の全てを提供します:

    | サービス    | プロダクトタイプ  | 概要   |
    | -------- |:------------- | :------------|
    | [VPC](https://www.alibabacloud.com/product/vpc)       | バーチャルプライベートクラウド       | クラウドリソースをプライベート仮想ネットワークの分離      |
    | [Server Load Balancer](https://www.alibabacloud.com/product/server-load-balancer)       | サーバーロードバランサー       | クラウド内の複数のコンピューティングインスタンスにアプリケーショントラフィックを自動的に配信       |
    | [Express Connect](https://www.alibabacloud.com/product/express-connect)  | Alibaba Cloudへの専用ネットワーク接続        | ネットワークとAlibaba Cloud VPC間の専用ネットワーク接続    |
    | [Cloud DNS](https://www.alibabacloud.com/product/dns)      | ドメインネームサービス (DNS)        | 高可用性とスケーラビリティを備えたクラウドDNSにより、ユーザーの要求をクラウドリソースに接続      |
    | [CDN](https://www.alibabacloud.com/product/cdn)         | コンテンツ配信ネットワーク        | クラウド内の高度に分散されたコンテンツ配信ネットワーク     |

    このセクションでは、ネットワークプロダクトの概要を説明しています

    ------
    - #### VPC - バーチャルプライベートクラウド

        Alibaba Cloud 公式サイトより:

        > Virtual Private Cloud（VPC）は、Alibaba Cloudに設置されたプライベートネットワークです。 VPCはAlibaba Cloudの他の仮想ネットワークと論理的に分離されています。 VPCはAlibaba Cloudでお客様専用のプライベートネットワークです。 IPアドレス範囲の指定、ルートテーブルとネットワークゲートウェイの設定など、VPCを完全に制御できます。独自のVPCで、ECS、RDS、SLBなどのAlibaba Cloudリソースを使用することもできます。

        既にAWS VPCを使っている方であれば、AliCloud VPCの機能や使用事例はほぼ同じです。 AliCloud VPCには、次の機能があります。:


        - Multiple availability zones _(AZs)_
        - Cross vpc connections _(VPC peering)_
        - Vpc to on-prem connections _(Express connect/Direct connect)_
        - Gateway
        - VRouter
        - VSwitch _(route table)_
        - Subnets with customize cidr block
        - Elastic ips _(EIPs)_


        下の図がAliCloudのVPCを分かりやすくしたものです:

        ![alt text](http://docs-aliyun.cn-hangzhou.oss.aliyun-inc.com/assets/pic/34217/intl_en/1516179868166/Image%2013.png "Alibaba Cloud VPC diagram")

        Alibaba Cloud VPCコンソールダッシュボードの動画。基本的な機能をすばやく見ることができます:
        <div class="iframeWrapper">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/gwFXiM8mtEM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>


        VPCリソースの制限:

        | Items    | Limits  | Increasable    |
        | ----- |:------------- | :------------|
        | 利用可能なCIDRブロック | 192.168.0.0/16, 172.16.0.0/12, 10.0.0.0/8, and their subsets | Supported |
        |VPCアカウントの最大数 | 10 | Supported |
        | VPC内のVRouterの最大数 | 1 | Unsupported |
        | VSwitchの最大数	| 24 |  Unsupported |
        | ルートテーブルの最大数 | 1 | Unsupported |
        | ルートテーブル内のルートエントリ最大数 | 48 | Supported |
        | VPCで実行できるクラウド製品インスタンスの最大数 | 10,000 | Unsupported |
        | VRouter | <ul><li>各VPCには1つのVRouterのみを持たせることができます。</li><li>VRouterは、BGPやOSPFなどの動的ルートプロトコルをサポートしていません。</li><li>各VRouterにはルートテーブルが1つしかありません。</li><li>ルートテーブル内のルートエントリは、VPC内のすべてのクラウド製品インスタンスに影響します。現在、ソースIPルーティングルールは、VSwitchおよびクラウド製品インスタンスではサポートされていません。</li></ul> | N/A |
        | VSwitche | <ul><li>VSwitches はlayer-3スイッチであるため、layer-2のブロードキャストおよびマルチキャストはサポートされていません。</li><li>VSwitchが持つことができるインスタンスの数= 10,000  -  VPC内の既存のインスタンスの数</li><li>CIDRブロックは変更できません。</li></ul> | N/A |

    ------
    - #### Server Load Balancer　-サーバーロードバランサー

        Alibaba Cloud 公式サイトより:

        > Alibaba Cloud Server Load Balancerは大量のトラフィックに対処するために構築されており、毎年11月にはAlibabaの年間グローバルショッピングフェスティバルでテストが行​​われます。 AlibabaはServer Load Balancerを利用して、フェスティバル中にデータセンター間の要求を交換し、トランザクションを最も利用可能なサーバーに転送することにより、中断のないサービスを提供します。これには、1,000キロメートル以上離れた場所にあるサーバーへのリクエストの転送が含まれます。


        管理されたロードバランサは、文字通り、入ってくるアプリケーショントラフィックをクラウド内の複数のサーバーインスタンスに自動的に分散させることができます。アプリケーションのトラフィックを分散させるのに必要な負荷分散容量をシームレスに提供することで、より高いレベルのフォールトトレランスを実現します。

        AliCloud Server Load Balancer（SLB）には、次の主な機能があります。:

        - High availability
        - Cross-zone load balancing
        - Health checks
        - Works with Auto Scaling
        - Supports HTTPS protocal
        - Supports session stickness
        - Supports global load balancing and cross-region disaster recovery when used in combination with DNS
        - Guarantees up to 99.9% availability

        ここではSLBの詳細を詳しく説明しませんが、Alibaba CloudのSLBに関する [このドキュメント](https://www.alibabacloud.com/product/server-load-balancer) を参照ください。

        下の図がAliCloudのSLBを分かりやすくしたものです:

        ![alt text](https://img.alicdn.com/tps/TB1dzgaLVXXXXX3apXXXXXXXXXX-474-391.png_.webp "Alibaba Cloud SLB Diagram")

        Alibaba Cloud SLBコンソールダッシュボードの動画。基本的な機能をすばやく見ることができます:
        <div class="iframeWrapper">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/jfbiMoNUxOM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>


    - #### Express Connect
    	Express Connectは、VPCイントラネットの相互通信や閉域網やユーザー間の専用専用線接続など、さまざまなクラウド環境間で高速で安定した、安全でプライベートなまたは専用のネットワーク通信を提供します。

        > Alibaba Cloud Express Connect は AWS Direct Connect と類似のサービスです。

        詳細はAlibaba Cloud Express Connectの公式ドキュメントを確認してください。 [documentation here](https://www.alibabacloud.com/product/express-connect)

    
    - #### Cloud DNS

        Alibaba Cloud DNS（Domain Name System）は、高可用性で拡張性の高いドメイン名解決および管理サービスです。

        主な機能:

        - インターネット名前解決
        - GEO DNS

        > Alibaba Cloud DNS は AWS Route53 と類似のサービスです。

        詳細はAlibaba Cloud DNSの公式ドキュメントを確認してください。  [documentation here](https://www.alibabacloud.com/product/dns).

    - #### Cloud CDN

       Alibaba Cloud CDNは、コンテンツ配信ネットワーク（a.k.a CDN）です。 Alibaba Cloud CDNには世界中に1,200以上のノードが分散しているため、Webサイトの応答時間をミリ秒に短縮し、スムーズなビデオストリーミングを実現し、大量のトラフィックを処理できます。

        > Alibaba Cloud CDN は AWS CloudFront と類似のサービスです。

        詳細はAlibaba Cloud CDNの公式ドキュメントを確認してください。 [documentation here](https://www.alibabacloud.com/product/cdn)


- ## 2.Compute {#compute}

    `
     Cloud IaaSプラットフォームのネイティブコンピューティングサービスは、サイズ変更可能なクラウドベースの処理能力を仮想サーバーの形で提供します。 これにより、1〜数千のインスタンスを同時にプロビジョニングし、使用するものだけを支払うことができ、Web規模のクラウドコンピューティングが容易になります。
    `

   Alibaba Cloudは以下を含むネットワーク製品のフルセットを提供します：

    | サービス    | プロダクトタイプ  | 概要   |
    | -------- |:------------- | :------------|
    | [Elastic Compute Service (ECS)](https://www.alibabacloud.com/product/ecs)       | Elastic コンピュート（仮想サーバー）        | セキュアで、サイズ変更可能でスケーラブルな処理能力       |
    | [Auto Scaling](https://www.alibabacloud.com/product/auto-scaling)       | オートスケール        | 自動的にECSの容量をスケールアップまたはダウンする       |
    | [Container Service](https://www.alibabacloud.com/product/container-service)      | コンテナ Orchestration（コンテナ管理）        | フルマネージドのクラウドコンテナオーケストレーションサービス       |
    | [Elastic GPU Service](https://www.alibabacloud.com/product/gpu)       | 並列コンピュート（GPU処理）        | ハイデマンドコンピューティングに適したGPUベースのコンピューティングサービス     |



    このセクションでは、__仮想サーバーサービス__ 製品の概要を示します。

    ------
    - #### Elastic Compute Service (ECS) - 仮想クラウドサーバー

        Alibaba Cloud 公式サイトより:
        
        > Alibaba Cloud Elastic Compute Service（ECS）は、高速メモリと最新のIntel CPUを提供し、クラウドアプリケーションに大きな処理能力を供給し、レイテンシを短縮してより速く結果を得られます。 すべてのECSインスタンスには、DDoSおよびトロイの木馬の攻撃からデータおよびアプリケーションを保護するためのアンチDDoS保護が付属しています。
        
        AWSに詳しい場合、Alibaba Cloud ECSはAWS EC2と同等の製品です。 ここで興味深いのは、2018年1月現在、ECSの平均価格がEC2よりも__15％〜17％安い__ことです。ECSの価格は[こちら](http://cloudsforce.com/cost-calculator/ecs-pricing)で確認できます。
         
         Alibaba ECSには次の機能があります:

		  - 複数のインスタンス構成/インスタンスファミリ
		  - 複数の地域とゾーン
		  - マシンイメージリソース
		  - 複数のストレージ方式_（Basicクラウドディスク、Ultraクラウドディスク、SSDクラウドディスク）_
		  - 堅牢なネットワークとセキュリティ
		  - 管理は、コンソール、VNC、およびAPIを介して行うことができます
		  - 2つの支払いタイプ：サブスクリプション_（予約済み）_とPay-As-You-Go _（オンデマンド）_
              
        その他機能の詳細はここでは詳しく説明しませんが、Alibaba Cloud ECSの機能については [こちらの公式ドキュメント](https://www.alibabacloud.com/help/doc-detail/25367.htm)を参照してください。
        
        下の図がAliCloudの典型的なVPCを分かりやすくしたものです:
        
        ![alt text](http://docs-aliyun.cn-hangzhou.oss.aliyun-inc.com/assets/pic/25367/intl_en/1491882098619/ECS%20Overview%20EN.jpg.png "Concept of an ECS instance")
        
		 Alibaba Cloud SLBコンソールダッシュボードの動画。基本的な機能をすばやく見ることができます:

        <iframe width="560" height="315" src="https://www.youtube.com/embed/VUxEER94f5w" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        
        
    ------
    - #### Auto Scaling

    ------
    - #### Container Service

    ------
    - #### Elastic GPU Service



- ### Storage {#storage}
    Pending update
- ### Database {#database}
    Pending update
ß
