---
author: yannick
comments: true
date: 2020-07-24 14:00:00
layout: post
slug: quality_4G_internet_for_working_from_remote_home
title: "Getting a good internet connection from out in the boonies"
categories:
 - labnews
---


Ok so Covid made Yannick *et al* head for the woods. But what about internet access?

**It took some time but I figured it out**. It is now fast and reliable. Low ping. Fast download. Fast upload. Amazing.

I suspect others in remote places could benefit from what I learnt.  Two things were needed. 

![chateau.png](/img/news/2020-07-lte_setup/chateau.png#center)

### A high performance 4G/LTE router

The MikroTik Chateau is incredible. 

Put a SIM card inside, and its already *much* faster than:
 - a phone, 
 - a mifi hotspot, 
 - or a "simple" 90 euro 4G/LTE router like the Dlink DWR 921. 

But plug in a dual antenna and it's crazy fast. 

![fast_speedtest_chateau_lte_mimo.png](/img/news/2020-07-lte_setup/fast_speedtest_chateau_lte_mimo.png#center)


FYI, those 180 Mbps are despite having only 3 bars of reception. 

It turns out that this router is [Category 12 LTE](https://en.wikipedia.org/wiki/E-UTRA#UE_Category), which means that it connects to the cell tower 3 times. So you get **more combined bandwidth, and more resilience to interruptions** - say if one of the cell towers were to become overloaded or fail.

MikroTik design and build these in Latvia. Most of their stuff is geared towards  professionals. So the user interface offers immense flexibility - but is not easy to use. And it didn't just "plug and play". 

FWIW the Microtik Chateau is [~200 GBP in UK](https://amzn.to/2B2gZhP). If out of stock, or you want something more user friendly, the [Netgear Orbi](https://amzn.to/2MEjXOS) is super-fast, or [TP-link Archer MR600](https://amzn.to/3ovQ0xH) is cheap but slower (Cat 6). All of these have antennas built in - so if signal is strong enough, no external antenna is needed.  

<br/>

### A Yagi MIMO directional antenna on the roof

This had to be pointed at the nearest 4G phone tower - which I located using this [handy map](https://www.cellmapper.net/). 

This made a huge improvement in cell reception. 

(This type of [pair of directional antennas is ~100 GBP](https://amzn.to/3teeZsT)). If you want to avoid the hassle of precise pointing, at the cost of lower sensitivity, get an [omni-directional antenna](https://amzn.to/2YHF4mp) that can just be stuck to the wall or window. 


![coflex_mimo_lte_antenna.jpg](/img/news/2020-07-lte_setup/coflex_mimo_lte_antenna.jpg#center)
### MikroTik Chateau configuration

Every small thing you could want to imagine can be tuned on this router - and bazillions of things I am not even close to imagining (!).

However, it didn't work right away. I had to specifically:

**1. Set the APN**

[Following MikroTik's help documents](https://help.mikrotik.com/docs/display/RKB/Chateau+LTE12+APN+problem), I did this in the Terminal interface:
```
/interface lte apn add apn=internet.it use-network-apn=no
/interface lte set lte1 apn-profiles=internet.it
```

**2.  In the Quick interface** 
 * Specifically tell it to use both antennas
 * Rename network, add password
 * Update the OS to the latest development version 
 
**3.  In the WebFig interface**
* Tell it to accept incoming SMS

<br/>


### Getting internet while traveling

On the road (train, hotel rooms...), tethering to the iPhone is sometimes ok... but throughput is really much better with a dedicated device. 

I stick a SIM card into a [Netgear Aircard 790](https://amzn.to/3oyCqd0). Its wonderful and works right away; their newer [NightHawk M2](https://amzn.to/36r3cO5) is likely even better. If signal is weak, I take a [portable mini LTE-antenna](https://amzn.to/2MICl9a) that can just be plugged into the aircard or nighthawk and stick that to the window. Obviously, if signal is very weak, a bigger antenna setup (like above) is needed...


