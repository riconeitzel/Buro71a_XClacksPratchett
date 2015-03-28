# Why

In Terry Pratchett's Discworld series, the clacks are a series of semaphore towers loosely based on the concept of the telegraph. Invented by an artificer named Robert Dearheart, the towers could send messages "at the speed of light" using standardized codes. Three of these codes are of particular import:

```
G: send the message on 
N: do not log the message 
U: turn the message around at the end of the line and send it back again
```

When Dearheart's son John died due to an accident while working on a clacks tower, Dearheart inserted John's name into the overhead of the clacks with a "GNU" in front of it to as a way to memorialize his son forever (or for at least as long as the clacks are standing.)

For more information see [GNU Terry Pratchett](http://www.gnuterrypratchett.com/)

# What

This extension uses Magento's event/observer system to insert the X-Clacks-Overhead header hine right before the reponse headers are sent.

# Installation

To install this extension simply put all files under /src into you Magento root app folder or use modman or composer to deploy the files automatically. 

No further database modification needed.

# Uninstallation

To uninstall this extension simply remove the following files and folders:

- app/etc/Buro71a_XClacksPratchett.xml
- app/etc/community/Buro71a/XClacksPratchett

No further database modification needed.


# Copyright

This extension is based on GPL 3.0. For more information about the Licence see the head section of each individual file.

# Author

This extension is provided by Rico Neitzel and supported by Büro 71a, Neitzel und Klose GbR, Germany.