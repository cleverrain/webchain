<?php

namespace App\Entity;

class Faq
{
    public function getData()
    {
        return [
            [
                'question' => 'I receive an “Invalid Login” message > [pool.webchain.network:3333] error: "Invalid login", code: -1',
                'answer' => 'Make sure to add the 0x prefix to you address. If your address is 8d1ba0497c3e3db17143604ab7f5e93a3cbac68b, you will have to write it like this on the file 0x8d1ba0497c3e3db17143604ab7f5e93a3cbac68b',
            ],
            [
                'question' => 'How can I check my balance?',
                'answer' => 'Go to <a href="https://explorer.webchain.network" target="_blank">https://explorer.webchain.network</a> and search your address on the bar. It’ll look something like this:<br>
                    <img src="{{ asset(\'build/images/explorer.jpg\') }}" width="1200" height="800"><br><br> Or from do it from console: 
                    webchain.getBalance("address")'
            ],
            [
                'question' => 'I forgot / cannot see my wallet address, where can I see it?',
                'answer' => '<b>Windows version:</b><br>
                        <b>B.1</b> From CMD, PowerShell or your preferred console, go to the route where you saved webchaind.exe<br>
                        <b>B.2</b> Let’s say you saved webchain.exe in the the following directory<br>
                        > C:\Users\UserName\AppData\Roaming\Webchain\<br><br>
                        <b>B.3</b> Then, to go to that folder nativate that folder, run the command:<br>
                        > cd c:\users\UserName\AppData\Roaming\Webchain and hit enter<br><br>

                        <code class="m-2">Step B.3 will lead you to the directory where 
                        your 
                        webchaind.exe file is located</code>

                        <code class="m-2">Once you are in the directory where your webchaind.exe file is located, you can enter all the commands that webchaind.exe can execute!</code>

                        <b>B.4:</b> Execute the following command, which will show you your wallet address(es) created<br>

                        > webchaind.exe account list<br><br>
                        <b>Linux version:</b><br>

                        <b>B.1</b> From Linux shell go to the folder where you decompressed webchaind by  running the command “cd”<br>
                        <b>B.2</b> Let’s say you stored webchain in the directory<br>
                        > /opt/webchaind/<br>
                        <b>B.3</b> Type the following command:<br>
                        > cd /opt/webchaind/ and press enter<br>

                        <code class="m-2">Step B.3 will lead you to the directory where your webchaind file is located</code>

                        <code class="m-2">Once you are in the directory where your webchaind.exe file is located, you can enter all the commands that webchaind.exe can execute!</code>

                        <b>B.4:</b> Execute the following command, which will show you your wallet address(es) created<br>
                        > ./webchaind account list<br>

                        After following these steps, you will see your account wallet number:<br>

                        <code class="m-2">Remember to add the prefix “0x” to your account, so if it’s 8d1ba0497c3e3db17143604ab7f5e93a3cbac68b then the resulting account would be 0x8d1ba0497c3e3db17143604ab7f5e93a3cbac68b</code>

                        <img src="">'
            ],
            [
                'question' => 'I cannot generate my address, what can I do?',
                'answer' => 'Creating the address is really simple. This guide might help you:<br>
                    <a href="https://pool.webchain.network/#/help" target="_blank">How to mine</a>'
            ],
            [
                'question' => 'I can\'t type in the Webchaind CMD prompt',
                'answer' => 'In case you\'re using windows, you can use powershell (CMD,  Git bash or your preferred terminal) and type the command “cd” to enter the directory where the webchain-miner app was saved. Ex: “cd c:\Users\MyName\webchain”<br><br>
                            After you\'re in that directory you can use any of the commands listed here <a href="https://github.com/webchain-network/webchaind" target="_blank">https://github.com/webchain-network/webchaind</a><br>
                        as webchaind account new <----to create new addresses<br>
                        webchaind account list <--- to list all of your addresses<br>'
            ],
            [
                'question' => 'I don’t know how to run commands and I’m a windows user',
                'answer' => 'A guide for those Windows users that have no clue about how to run webchaind miner from console:<br><br>

                        Steps are easy to follow:<br><br>

                        <b>A)</b> Go to “Webchain: the basics” <a href="https://github.com/webchain-network/webchaind#green_book-webchaind-the-basics" target="_blank">https://github.com/webchain-network/webchaind#green_book-webchaind-the-basics</a>. 	Here you will see a list of all the possible commands that you can use, from how to create a new wallet to how to access and mine Webchain.<br>

                        <b>B)</b> From CMD, PowerShell or your preferred console, go to the route where you stored webchaind.exe<br>
                        <b>a)</b> Let’s say you stored webchain.exe in the recommended directory<br>
                            C:\Users\UserName\AppData\Roaming\Webchain</br>
                        <b>b)</b> Input the following command:<br>
                            > cd c:\users\UserName\AppData\Roaming\Webchain<br><br>
                        and hit enter<br>
                        <b>c)</b> Once you’re there, you can write all the commands that webchaind.exe can execute!<br>
                            <b>C)</b> Check the following link if you need help to create your account <a href="https://github.com/webchain-network/webchaind#create-or-manage-accounts" target="_blank">https://github.com/webchain-network/webchaind#create-or-manage-accounts</a>'
            ],
            [
                'question' => 'How do I get a wallet?',
                'answer' => 'Webchain is node and wallet at the same time. Follow these instructions to create your wallet and <a href="https://pool.webchain.network/#/help" target="_blank">mine</a>'
            ],
            [
                'question' => 'There is high difficulty on pool is there any other pool?',
                'answer' => 'Yes, we have two official pools:<br>
                        pool2.webchain.network:2222 which has much lower difficulty than on pool.webchain.network:3333'
            ],
            [
                'question' => 'Do you have any plan to build a GPU miner?',
                'answer' => 'There are no plans to build a GPU miner for the coin,  as it would reduce the opportunity for low-budget devices, compromising one of our reasons to be, which is to guarantee a profitable and egalitarian opportunity for most users.<br><br>
                        We suggest you to keep in touch with us not to miss any important updates.<br>
                        <a href="https://twitter.com/TheWebchain" target="_blank">https://twitter.com/TheWebchain</a><br><a href="https://reddit.com/r/webchain" target="_blank">https://reddit.com/r/webchain</a><br><a href=" https://github.com/webchain-network" target="_blank"> https://github.com/webchain-network</a>'
            ],
            [
                'question' => 'When could we start trading?',
                'answer' => 'There is no "exchange listing" on our roadmap yet; we\'re currently focused on making webchain user friendly so it works as well as possible. However, we will start the process of adding our coin to exchanges later, and  as soon as there is a clear milestone about it, our community will be informed about it.'
            ],
            [
                'question' => '20% premine for a pow project is too large',
                'answer' => 'Consider that we\'re not holding any ICO or sale. Our chance to finance this project comes from those premined coins.<br><br>

                        We’ve set a lock-in for those premined coins that will divide our access in four moments:<br><br>

                        5% - available this year (part of it might be used as airdrops in another project to promote Webchain)<br>
                        20% - available from start of 2019<br>
                        30% - available from start of 2020<br>
                        45% - available from start of 2021<br><br>

                        We plan to schedule a use of these shares as soon as we get a market value.'
            ],
            [
                'question' => 'I checked the guide but still don\'t know how to send coins to other wallets',
                'answer' => '<b>a)</b> In console, get to the webchaind directory  as was explained here:
                        <a href="https://pool.webchain.network/#/help" target="_blank">How to mine</a>

                        <b>b)</b> type this command:<br><br>

                        (on windows)<br>
                        > webchaind.exe console<br>
                        (on linux)<br>
                        > webchaind console<br><br>

                        <b>c)</b> then use this command in console:<br><br>

                        > personal.unlockAccount(WALLET)<br><br>

                        where “WALLET” refers to your webchain wallet number. You will be prompted with your wallet password.<br><br>

                        <b>d)</b> To send coins to other wallet, use this command with the following      arguments:<br>

                        > webchain.sendTransaction({from:\'WALLET1\', to:\'WALLET2\', value: web3.toWei(0.05, "ether"), gas:21000});<br>

                        where “WALLET1” represents your wallet, and “WALLET2” the recipient\'s wallet.<br>

                        0.05 is the amount of WEBs to be sent  (0.05 WEB here is just an example).<br>

                        <code class="m-2">Remember to add the prefix “0x” to your account, so if it’s 8d1ba0497c3e3db17143604ab7f5e93a3cbac68b then the resulting account would be 0x8d1ba0497c3e3db17143604ab7f5e93a3cbac68b</code>'
            ],
            [
                'question' => 'How can I see my wallet number?',
                'answer' => '<b>a)</b> In console, get to the webchaind directory  as was explained here: <a href="https://pool.webchain.network/#/help" target="_blank">https://pool.webchain.network/#/help</a><br>
                        <b>b)</b> Type the command “webchain.coinbase”; which will show you your main wallet in webchain.<br>
                        <b>c)</b> If you have multiple wallets you can see them all by typing “webchaind account list”.<br>'
            ],
            [
                'question' => 'When will you be releasing GUI Wallet?',
                'answer' => 'We are working on it and we will be releasing a GUI Wallet in 2018-3rdQ.<br>
                        Meanwhile, we’ll be as helpful as possible about guiding you and other people needing a GUI. you can check the <a href="https://pool.webchain.network/#/help" target="_blank">How to mine</a> guide while our GUI is on development.'
            ],
            [
                'question' => 'Will mining affect my CPU process? I mean, will I be able to use my pc while mining?',
                'answer' => 'Of course you can use your PC normally while mining; you can always select the amount of CPU that will be used,so you’re able to mine and do other things at the same time. Remember that you can also use more than one device (a.k.a “worker”) to mine at the same time using the same address.'
            ],
            [
                'question' => 'Miner is working but i see no workers on pool',
                'answer' => 'It means that pool didn’t get shares from your miner. A possible reason is that you have low hashrate (about 20-30 H/s or less ) and you’re mining on first pool pool.webchain.network:3333 with high difficulty (20000). You need to switch you miner to second pool pool2.webchain.network:2222 with lower difficulty (5000) and try again.'
            ],
            [
                'question' => 'The balance I get when using the console is different than the balance showed on the website.',
                'answer' => 'The balance you get when you’re using the console must be the same you get from the website. If you are mining, it could be a little different because of the network syncing.<br><br>

                        Check the log file and see if there are warnings about time differences. If your clock is significantly out of sync with the current time, it may prevent you from downloading.<br><br>

                        To check log file:<br><br>

                        On Linux:<br>
                        > ~/.webchain/mainnet/log<br><br>

                        On Windows:<br>
                        > C:\Users\<profilename>\AppData\Roaming\Webchain\mainnet\log'
            ],
            [
                'question' => 'Where is the link to the wallet with the premine?',
                'answer' => '<a href="https://explorer.webchain.network/addr/0x8d1ba0497c3e3db17143604ab7f5e93a3cbac68b" target="_blank">https://explorer.webchain.network/addr/0x8d1ba0497c3e3db17143604ab7f5e93a3cbac68b</a>'
            ],
            [
                'question' => 'Can you provide some nodes? I can\'t sync it',
                'answer' => 'Everyone who runs webchaind is node. and webchaind finds all nodes automatically, it works as p2p. but on first connection webchaind needs at least one ip to connect and get list of peers from it, that\'s why we have two servers hardcoded.'
            ],
            [
                'question' => 'Solo mining, slow synchronization',
                'answer' => 'You can try considerably faster method described here: <a href="https://github.com/webchain-network/webchaind#fast-synchronisation" target="_blank">https://github.com/webchain-network/webchaind#fast-synchronisation</a>'
            ],
            [
                'question' => 'If I can’t get any peers so how can I rebuild my wallet?',
                'answer' => 'To rebuild your wallet, you need the keystore and the password you set before. The fact that you can\'t get any peers might be related to one of the followings:<br><br>

                        1. Your local time might be incorrect.<br>
                        2. Some firewall configurations can prevent UDP traffic from flowing.'
            ],
            [
                'question' => 'Is it mineable with cryptonight GPU miner?',
                'answer' => ' So far we haven\'t found evidence of GPU miners on webchain. As we\'ve said before, we aren\'t planning to release any GPU miners because our goal is to make CPU mining profitable.<br><br>

                        So I might say the answer to your question is that we don\'t focus on GPU miners.'
            ],
            [
                'question' => 'When using webchain pool, is there a way to set a username to identify miners in the config of the mining software?',
                'answer' => 'Yes, when you edit the json file, you add your wallet address number as your username, through which you can be identified.'
            ],
            [
                'question' => 'How can I change the password of my wallet',
                'answer' => 'Write this command in linux shell console or windows cmd console in dir of webchaind:<br><br>

                        webchaind account update YOURWALLETNUMBER<br><br>

                        You will be prompted for current passphrase and then you can enter new password'
            ],
            [
                'question' => 'If someone complains about 20% pre-mine or wants to know a valid reason for this:',
                'answer' => 'We already announced lock-in for premined coins:<br><br>

                        5% - available this year (part of it might be used as airdrops on another project to spread awareness about webchain)<br>
                        20% - available in early 2019<br>
                        30% - available in early 2020<br>
                        45% - available in early 2021<br><br>

                        meaning that our share of premined WEB will be fully unlocked in 2021, but we are not planning to sell those coins according to lock-in dates.<br><br>

                        What we are going to use WEB for?<br><br>

                        Project support, marketing, promotion, development, bonuses for devs, etc., but biggest part will not be touched at all, since we believe in the long-term prosperity of this project.'
            ],
            [
                'question' => 'My antivirus swears on the Windows client that it is infected with a virus Malware-gen, is this a false positive?',
                'answer' => 'Yes, it is false positive. AVs usually warn about every cryptocurrency miner.'
            ],
            [
                'question' => 'How to mine alone?',
                'answer' => 'You can use these steps:<br>
                        1. Start the console: ./webchaind console or (webchaind.exe for windows)<br>
                        2. Get your balance (on console): web3.fromWei(webchain.getBalance(webchain.coinbase), "ether")<br>
                        3. Start mining (on console): miner.start()<br>
                        4. Get your balance again to confirm you are mining: web3.fromWei(webchain.getBalance(webchain.coinbase), "ether")'
            ],
            [
                'question' => 'How is it possible to have such huge hashes/second e.g. 20 KH, 30 KH etc?',
                'answer' => 'That is farm of servers. Some of those guys sit on discord and even posted their stats - how many servers they have and with what CPU.<br><br>

                        Farm of servers is pretty much same as many computers, we cannot distinguish farm from many different computers of different owners. Unless we would forbid mining on one address from more than one location, but then they would simply generate many wallets.'
            ],
            [
                'question' => 'May I try to make a GPU miner?',
                'answer' => 'You can try to figure out a GPU miner, but it will be not much more effective as CPU mining due to specifics of our Cryptonight algorithm.'
            ],
            [
                'question' => 'As for the difficulty, do I gain more depending on the difficulty?',
                'answer' => '<b>A lower difficulty</b> makes it easier and faster to find solutions for a block, which means a smaller but faster payout. However, difficulty doesn\'t determine how many coins you\'ll earn at the end, but how often you\'ll get paid.'
            ],

        ];
    }
}