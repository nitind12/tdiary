using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace T_diary
{
    #region Time_table_edit
    public class Time_table_edit
    {
        #region Member Variables
        protected string _Day;
        protected string _Course_id;
        protected int _Semester;
        protected string _Section;
        protected string _Subject_id;
        protected int _Room;
        protected string _Time;
        protected string _Session;
        protected int _tid;
        #endregion
        #region Constructors
        public Time_table_edit() { }
        public Time_table_edit(string Day, string Course_id, int Semester, string Section, string Subject_id, int Room, string Time, string Session)
        {
            this._Day=Day;
            this._Course_id=Course_id;
            this._Semester=Semester;
            this._Section=Section;
            this._Subject_id=Subject_id;
            this._Room=Room;
            this._Time=Time;
            this._Session=Session;
        }
        #endregion
        #region Public Properties
        public virtual string Day
        {
            get {return _Day;}
            set {_Day=value;}
        }
        public virtual string Course_id
        {
            get {return _Course_id;}
            set {_Course_id=value;}
        }
        public virtual int Semester
        {
            get {return _Semester;}
            set {_Semester=value;}
        }
        public virtual string Section
        {
            get {return _Section;}
            set {_Section=value;}
        }
        public virtual string Subject_id
        {
            get {return _Subject_id;}
            set {_Subject_id=value;}
        }
        public virtual int Room
        {
            get {return _Room;}
            set {_Room=value;}
        }
        public virtual string Time
        {
            get {return _Time;}
            set {_Time=value;}
        }
        public virtual string Session
        {
            get {return _Session;}
            set {_Session=value;}
        }
        public virtual int Tid
        {
            get {return _tid;}
            set {_tid=value;}
        }
        #endregion
    }
    #endregion
}