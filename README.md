# NPTEL-iitkgp
This repository contains basic files and instruction for NPTEL HDD setup.

### Directory Structure  
/MEDIA/DISK-1  
 ┬  
 ├ setup.sh  
 ├ .htaccess  
 ├ index.php  
 ├ DisplayVideo.php  
 ├ dbDisciplineList1.json [discipline_id, discipline_name]  
 ├ dbSubjectList1.json [subject_id, discipline_id, subject_name, [coordinator_1,coordinator_2,...]]  
 ├ dbLectureList1.json [subject_id, lecture_id, title]  
 └ [DIR] VIDEOS  
  
/MEDIA/DISK-N\*\*  
 ┬  
 ├ dbDisciplineListN.json [discipline_id, discipline_name]  
 ├ dbSubjectListN.json [subject_id, discipline_id, subject_name, [coordinator_1,coordinator_2,...]]  
 ├ dbLectureListN.json [subject_id, lecture_id, title]  
 └ [DIR] VIDEOS  
 \*\* Here N is the serial no. of the disk.  
 
### Instruction
- Connect and open all disks
- Open terminal and run *setup.sh* on *DISK-1*
- Enter the number of drives connected.
