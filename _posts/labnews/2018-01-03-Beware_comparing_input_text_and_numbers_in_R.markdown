---
author: yannick
comments: true
date: 2018-01-03 12:07:12
layout: post
slug: comparing_input_text_and_numbers_in_R
title: "Easy mistake comparing numbers in R"
categories:
 - labnews
---

It shouldn't really be necessary to share this. But it keeps popping up (in particular when students are [learning to program in R](/teaching#programming_in_r). 

It is nonsensical to compare text to numbers. But R will let you. For example:


```R
> "a" > 1
[1] TRUE
> "A" > 1
[1] TRUE
> "bob" > 99
[1] TRUE
```

I suspect that this is a remnant of the desire to be able to compare letters (e.g., for sorting ASCII characters alphabetically "A" < "D").


# Problem comparing numbers and "text as numbers" in R.

When new to programming in R, you might ask the user to input a number. For example with


```R
input_number <- readline(prompt="Enter a number: ")

```

This comes into R as text, not as a number. Unless you run `as.numeric()` or `strtoi()` on the input, it will remain text. Comparisons are then equivalent to the following.


```R
> 1 == "10"
[1] FALSE
> 10 == "10"
[1] TRUE
> 100 == "10"
[1] FALSE
> 11 < "10"
[1] FALSE
> 1 < "10"
[1] TRUE
> 9 < "10"   # <- uh-oh
[1] FALSE
> 3 < "10"
[1] FALSE
```


Note that *some* of these comparisons yield the result you would expect if only comparing numbers. **But some of them (e.g., the last 2) give you an incorrect response**. This is dangerous.

R does not show an error message; it acts as is everything is ok, and gives you a response that looks reasonable (i.e., TRUE or FALSE). It would thus be easy for this type of mistake to go undetected.


## How can this type of number comparison problem in R be prevented or detected?

* Always check/force the type. If you run `as.numeric()` or `strtoi` on something text that is not unambiguously a number, R will show an error message or return `NA`.
* Use a testing framework such as `testtthat` to ensure that even the small pieces of code you write behave as you would expect.
