USE [dev]
GO

/****** Object:  Table [dbo].[asr5500_summaries]    Script Date: 03/30/2016 16:57:51 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[asr5500_summaries](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[date] [date] NULL,
	[no1] [bit] NULL,
	[no2] [bit] NULL,
	[no3] [bit] NULL,
	[no4] [bit] NULL,
	[no5] [bit] NULL,
	[no6] [bit] NULL,
	[no7] [bit] NULL,
	[no8] [bit] NULL,
	[no1_dblchk] [bit] NULL,
	[no2_dblchk] [bit] NULL,
	[no3_dblchk] [bit] NULL,
	[no4_dblchk] [bit] NULL,
	[no5_dblchk] [bit] NULL,
	[no6_dblchk] [bit] NULL,
	[no7_dblchk] [bit] NULL,
	[no8_dblchk] [bit] NULL,
 CONSTRAINT [PK_asr5500_summaries] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]

GO


