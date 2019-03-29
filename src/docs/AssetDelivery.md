Design Asset Delivery 
========

  
Process
--------

1. **PM + DESIGN + DEV + PARTNER**: Requirements Gathering
2. **PM**: Put together requirements into a doc **---> DESIGN** 
3. **PM or DESIGN**: Create wireframes **---> DESIGN**
5. **DESIGN**: create mockups **---> PM**
7. **[ Design Asset Delivery ]**  

 Deliver design assets to Partner for approval. This step involves one or both of these two things:  
 - **PM ---> PARTNER**: send the PM exported assets  
 - **PM + DESIGN ---> PARTNER**: Presentations 

8. **DESIGN**: revisions based on partner feedback  **---> PM  ---> PARTNER**
9. **DESIGN + PM + PARTNER**: repeat steps 7-9 as needed, until partner gives final approval of designs. Ideally, 1-2 cycles for most projects.
10. **DESIGN + DEV**: adjust toolkit materials based on mockups, create new materials as needed.  

After this step: `backend development`, `launch`, and `post-launch maintenance` 

---

Delivering Mockup Assets
--------

1. Exporting Assets (**DESIGN**)
2. Sharing Assets Within PAI (**DESIGN ---> PM**)
3. Getting Assets to the Partner (**PM ---> PARTNER**)
4. Presentations / Review Meetings (**PM + DESIGN ---> PARTNER**)

### 1. Exporting Assets (**DESIGN**)

After your designs are complete, you'll need to export them. The filetype depends on what type of asset you're working with. In the case of mockups, it will nearly always be one of these options:  

#### FILE TYPES:

- **`.png`** - used for non-photograph images (like logos or icons)
- **`.jpg`** - used for photographs
- **`.zip`** - compressed file. If you have multiple mockups, you'll want to place them in a folder, which you can compress into a zip. 
- **`preview URL`** - provided by Adobe through xD, it previews the static mockups from a publicly available url, with extra prototype effects (like naviagting through the mockups by clicking on navigation in the design itself, page transitions, scrolling, etc.) 
 
 Adobe Xd's preview URL bascially allows the static mockups feel more like a real functioning website. This is very effective for communicating to our partners how a website will actually appear and feel. 
 
 Here's an example: [xd.adobe.com](https://xd.adobe.com/view/3fa87f82-9b93-4d16-ad30-8a25019b4df3/) 

![Xd Preview Url Example] (src/xdPreviewURL.png)

#### PROGRAMS USED:

- **Xd - Adobe Experience Designer**  
 	A mockup & prototype tool.  
 	*Exports*: `.png, .svg, .pdf, preview url`

- **Ps - Adobe Photoshop**  
 	Used for a massive range of image creation / manipulation tasks.  
 	*Exports*: `.png, .jpg, .svg, .pdf`

- **Ai - Adobe Illustrator**  
 	Creates vector art. Used primarily to create logos, icons, and illustrations.   
 	*Exports*: `.png, .jpg, .svg, pdf`

- **Balsamiq**  
 	A popular wireframing tool. 
	*Exports*: `.png, .jpg, .pdf`

### 2. Sharing Assets Within PAI (DESIGN ---> PM)

Internally, we have several tools and routes by which to share files. 

- **Slack** - by far, the most convenient method. Simply drag the files into the intended channel, or press the `+` button (it's sitting to the left of where you type your messages.)
- **Email** - The ol' standby. While email is incredibly useful for a quick message with one or two attached images, attempting to send files larger than a few mb can take huge amounts of time, or not work at all.
- **Cloud Sharing** - The best solution for sharing enormous files. 
- **Memory Stick or External HD** - Data transfer, with a personal touch --- just place the assets in an external drive, and physically bring it to the PM. 
- **Store the Files On Our Servers** - This would work essentially the same way Cloud computing works, only it's hosted on our servers. Anyone with the url should be able to access it. *



### 3. Getting Assets to the Partner (PM ---> PARTNER)

This step is covered by the PM department's internal processes. However, in terms of how to get the design assets to the partner, here's a few insights:

There are 3 primary approaches to getting assets to the client, that sidestep the potential issues. The first two relate to digital delivery:  

1. **jpgs or pngs attached to an email**
 
 - The maximum filesize for an email is **20mb** [^filesize] 
 - The Commonwealth may even restrict this filesize limit further. 
 - Anything larger than 3-5 mb will take a long time to download, so try to keep your emails below this. 
 
  [^filesize]: Via [outlook-apps.com/maximum-email-size](https://www.outlook-apps.com/maximum-email-size/)
 
2. **A download link** to files stored on our servers

 - this sidesteps the filesize requirements and the .zip issue. 
 - this may require help from a developer to set up an approriate location and the place the files onto the server 
  (TODO: this process needs fleshed out)
 
3. **Presentations / Review Meetings**: this is covered in the next section 

#### ISSUES TO PLAN AROUND

These solutions solve these persistent issues: 

- **No ZIP files in Emails** - At present, the commonwealth won't accept .zip files sent via email. Meaning, even though email is likely the primary form of contact with the state, it is not a viable asset delivery method on its own.
- **We cannot use the Cloud** - The state also won't accept anything from a cloud account, either from email, and likely blocks them in their browsers. Even if you send them an email with a link to an asset stored on a Cloud service, they won't be able to even look at it. 
- **Internet Explorer** - many agencies still use Internet Explorer (possibly in versions older than 11), which leads to its own share of technical issues.



### 4. Presentations / Review Meetings (PM + DESIGN ---> PARTNER)

For review meetings, in which we present our designs to the partner, it's imperative that we consider the technical limitations when meeting remotely.

Ideally, this presentation will have both printouts and a projector presentation with an Xd Preview URL (and .jpgs or .pngs of mockup assets available as backups). 

Remember that the most important thing is to give the partner as close an experience to the final website as possible, to ensure the partner's opinion is untainted by unrelated technical issues.  

**Presenting Assets When Outside The Office**

1. **Projector** - The most obvious presentation option. Many of our partner's conference rooms are equiped with projectors. 

 **To connect your laptop:**
 
 * **HDMI** - there's normally an HDMI input for the projector (either an attached computer or a panel on a nearby wall). 
 * **Attached Computer** - you can also use an attached computer to access the files in a jump drive. 

2. **Printouts** - Physically printed copies of each page of the site. 
 * For taller screenshots, try to use longer paper 
 * Print copies for every person attending
 * Distribute at the beginning of the meeting
 * Printouts are great for taking notes and ensuring everyone is on the same page (literally)
 * Printouts suffer from the same non-interactvity of static jpgs. 

#### ISSUES TO PLAN AROUND

- **No Internet** - You won't have access to their wifi, so when gathering whatever you need for the presentation, make sure they're available offline. 
- **No Projector** - Occassionally, they won't have a projector, or you can't connect to it. 